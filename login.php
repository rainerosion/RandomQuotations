<?php
require('./config.php');
require('./admin/webconfig.php');
require('./class/mysql_class.php');
require('./class/register.class.php');
if ($_GET['act'] == 'out') {
    setcookie("rains_user", "{$user}", time() - 3600 * 24 * 7);
    setcookie("rains_password", "{$pwd}", time() - 3600 * 24 * 7);
    echo '<script>alert("退出成功");</script><meta http-equiv="refresh" content="0;url=/">';
}
if ($_POST['submit']) {
    $user = $_POST['user'];
    $pwd = $_POST['password'];
    $login = SignIn($user, $pwd);
    if ($login != 1) {
        echo " <script>alert(\"$login\");</script>";
    } else {
        echo '<script>alert("登录成功");</script><meta http-equiv="refresh" content="0;url=./user">';
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php echo $SiteTitle; ?> - 登录</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="<?php echo $Description; ?>"/>
    <meta name="keywords" content="<?php echo $Keywords; ?>"/>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="./resource/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="./resource/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="./resource/css/animate.min.css" rel="stylesheet">
    <link href="./resource/css/style.min.css?v=4.0.0" rel="stylesheet">
    <style>.bg-image {
            position: fixed;
            top: 0;
            bottom: -30%;
            left: 0;
            z-index: -9999;
            width: 100%;
            height: auto;
            min-width: 1024px;
            min-height: 100%;
        }</style>
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->
    <script>if (window.top !== window.self) {
            window.top.location = window.location;
        }</script>
</head>

<body class="signin">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">语</h1>

        </div>
        <h3>欢迎使用语录系统</h3>

        <form class="m-t" method="POST" role="form" action="login.php">
            <div class="form-group">
                <input type="text" name="user" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码" required="">
            </div>
            <button type="submit" name="submit" value="登录" class="btn btn-primary block full-width m-b">登 录</button>


            <p class="text-muted text-center"><a href="login.php?act=forget"><small>忘记密码了？</small></a> | <a
                        href="register.php">注册一个新账号</a>
            </p>

        </form>
    </div>
</div>
<script src="./resource/js/jquery.min.js?v=2.1.4"></script>
<script src="./resource/js/bootstrap.min.js?v=3.3.5"></script>
<img class="bg-image" src="./resource/img/banner-5.jpg"/>
</div>
</body>

</html>