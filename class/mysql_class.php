    <?php
    /****
     *   数据库操作类
     *   SQLITE数据库
     *   MYSQL数据库
     *   编码设置
     *   创建数据库
     *   查询SQL语句
     *   QQ:1782832653
     *   Powered By 雨落凋殇
     ****/
    class Sql
    {
        private $host, $password, $name, $database;
        //数据库
        //构造函数
        //construct
        function __construct($host = 'localhost', $user = null, $password = null)
        {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
        }
        //连接mysql数据库
        public function connect_mysql($db)
        {
            try {
                $mysql = "mysql:host={$this->host};dbname={$db}";
                $this->mysql = $mysql;
                $this->pdo = new PDO($this->mysql, $this->user, $this->password);
            } catch (PDOEXception $e) {
                die('MYSQL数据库链接错误<br />错误详情:' . $e->getMessage());
            }
        }
        public function connect_sqlite($db)
        {
            try {
                $this->pdo = new PDO("sqlite:{$db}");
            } catch (PDOEXception $e) {
                die('SQLITE数据库链接错误<br />错误详情:' . $e->getMessage());
            }
        }
        //编码设置
        public function charset($charset = 'utf8')
        {
            return $this->pdo->query("set names {$charset}");
        }
        //语句sql查询
        public function query($sql)
        {
            //$this->connect_mysql($db);
            $que = $this->pdo->query("{$sql}");
            return $que;
        }
        public function setFetchMode($my)
        {
            return $my->setFetchMode(PDO::FETCH_ASSOC);
        }
        public function fetchAll()
        {
            return $this->pdo->fetchAll();
        }
        //创建数据库
        public function database($database)
        {
            return $this->pdo->query("create database {$database}");
        }
        public function Sclose()
        {
            return $this->pdo = null;
        }
        public function Mclose()
        {
            return $this->mysql = null;
        }
    }