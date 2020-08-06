<?php
require('./config.php');
require('./admin/webconfig.php');
require('./class/mysql_class.php');
require('./class/register.class.php');
$con = new Sql($db_host, $db_user, $db_pwd);
$con->connect_mysql($db_database);
$con->charset();
$sql = "SELECT txt FROM `rains_sjyl` ORDER BY RAND() LIMIT 1";
$query = $con->query($sql);
$list = $query->fetchAll();
?>
<!DOCTYPE HTML>
<head>
    <title><?php echo $SiteTitle; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="<?php echo $Description; ?>"/>
    <meta name="keywords" content="<?php echo $Keywords; ?>"/>
    <script src="./resource/js/jquery.min.js"></script>
    <script src="./resource/js/jquery.dropotron.min.js"></script>
    <script src="./resource/js/skel.min.js"></script>
    <script src="./resource/js/skel-layers.min.js"></script>
    <script src="./resource/js/init.js"></script>
    <style>#banner {
            background-attachment: scroll, scroll, scroll, fixed;
            background-color: #645862;
            background-image: url("./resource/css/images/light-bl.svg"), url("./resource/css/images/light-br.svg"), url("./resource/css/images/overlay.png"), url("./resource/img/banner-<?php echo rand(0,15);?>.jpg");
            background-position: bottom left, bottom right, top left, top center;
            background-repeat: no-repeat, no-repeat, repeat, no-repeat;
            background-size: 25em, 25em, auto, cover;
            color: white;
            cursor: default;
            padding: 6em 0;
            text-align: center;
        }

        #cta {
            background-attachment: scroll, scroll, scroll, fixed;
            background-color: #645862;
            background-image: url("./resource/css/images/light-tl.svg"), url("./resource/css/images/light-tr.svg"), url("./resource/css/images/overlay.png"), url("./resource/img/banner-<?php echo rand(0,15);?>.jpg");
            background-position: top left, top right, top left, bottom center;
            background-repeat: no-repeat, no-repeat, repeat, no-repeat;
            background-size: 20em, 20em, auto, cover;
            color: white;
            padding: 3em;
            text-align: center;
        }
    </style>
</head>
<body class="index loading">

<!-- Header -->
<header id="header" class="alt">
    <h1 id="logo"><a href="index.php">Rains</a></h1>
    <nav id="nav">
        <ul>
            <li class="current"><a href="index.php">Welcome</a></li>
            <?php if (!isset($_COOKIE['rains_user'])) {
                echo '
						<li><a href="register.php" class="button special">注册</a></li>
						<li><a href="login.php" class="button special">登录</a></li>';
            } else {
                echo '
						<li><a href="/user" class="button special">' . $_COOKIE['rains_user'] . '</a></li>
						<li><a href="login.php?act=out" class="button special">退出登录</a></li>';
            } ?>
        </ul>
    </nav>
</header>

<!-- Banner -->
<section id="banner">

    <div class="inner">

        <header>
            <h2>语录系统</h2>
        </header>
        <p><?php echo $list['0']['txt']; ?></p>
        <footer>
            <ul class="buttons vertical">
                <li><?php if (!isset($_COOKIE['rains_user'])) {
                        echo "<a href=\"register.php\" class=\"button fit scrolly\">立即加入</a>";
                    } else {
                        echo "<a href=\"/user\" class=\"button fit scrolly\">用户中心</a>";
                    } ?></li>
            </ul>
        </footer>

    </div>

</section>

<!-- Main -->
<article id="main">

    <header class="special container">
        <span class="icon fa-bar-chart-o"></span>
        <h2>全新的系统，更好的体验</h2>
        <p>你可以调用系统为你提供的语句，并将其展示在你的网站上。<br/>你也可以定制属于自己语句，提交你的专属语句并调用。
        </p>
    </header>
    <!-- CTA -->
    <section id="cta">

        <header>
            <h2>如何使用随机语录?</h2>
            <p>点击下面的按钮，获取调用接口</p>
        </header>
        <footer>
            <ul class="buttons">
                <li><a href="/user/api_system.php" class="button special">系统语录</a></li>
                <li><a href="/user/api_users.php" class="button">我的语句</a></li>
            </ul>
        </footer>

    </section>

    <!-- Footer -->
    <footer id="footer">
        <span class="copyright">Copyright &copy; 2016.<a target="_blank" href="http://rainss.cn/">&#38632;&#33853;&#20939;&#27527;</a> All rights reserved.</span>

    </footer>
</body>
</html>