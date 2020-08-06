<?php
require('config.php');
require('./Sql_Filter.php');
require('./admin/webconfig.php');
require('./class/mysql_class.php');
require('./class/register.class.php');
session_start();
if ($_POST['submit']) {
    $user = $_POST['user'];
    $pwd = $_POST['password'];
    $mail = $_POST['mail'];
    if ($_SESSION['yzm'] != @$_POST['verifyCode']) {
        echo "<script>alert(\"验证码有误\");</script>";
    } else {
        $reg = Register($user, $pwd, $mail);
        if ($reg != 1) {
            echo " <script>alert(\"$reg\");</script>";
        } else {
            echo '<script>alert("注册成功");</script><meta http-equiv="refresh" content="0;url=login.php">';
        }
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php echo $SiteTitle; ?> - 注册</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="<?php echo $Description; ?>"/>
    <meta name="keywords" content="<?php echo $Keywords; ?>"/>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="./resource/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="./resource/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="./resource/css/animate.min.css" rel="stylesheet">
    <link href="./resource/css/style.min.css?v=4.0.0" rel="stylesheet">
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
        <h3>欢迎使用随机语录</h3>

        <form class="m-t" role="form" method="POST" action="register.php">
            <div class="form-group">
                <input type="text" name="user" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码" required="">
            </div>
            <div class="form-group">
                <input type="email" name="mail" class="form-control" placeholder="邮箱" required="">
            </div>
            <div class="form-group">
                <input type="txt" name="verifyCode" class="form-control" placeholder="验证码" required=""><a href="#"
                                                                                                          onclick="javascript:refresh();"><img
                            src='./class/verifyCode.php' id="checkCodeImg" alt="点击图片更换验证码"/> </a>
            </div>
            <button type="submit" name="submit" value="注册" class="btn btn-primary block full-width m-b">注 册</button>
        </form>
    </div>
</div>
<script src="./resource/js/jquery.min.js?v=2.1.4"></script>
<script src="./resource/js/bootstrap.min.js?v=3.3.5"></script>
<script language="javascript">
    function refresh() {
        var img = document.getElementById("checkCodeImg");
        now = new Date();
        img.src = "./class/verifyCode.php?code=" + now.getTime();
    }
</script>
</body>
</html>