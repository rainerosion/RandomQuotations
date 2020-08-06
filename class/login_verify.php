<?php
//检测验证文件 登录
//header("Content-type: text/html; charset=utf-8");
echo '<head><meta charset="utf-8"></head>';
require('mysql_class.php');
require('../config.php');
if ($_COOKIE['rains_user'] == false || $_COOKIE['rains_password'] == false) {
    echo '<script>alert("请登录！");</script><meta http-equiv="refresh" content="1;url=../login.php">';
    die();
}
$con = new Sql($db_host, $db_user, $db_pwd);
$con->connect_mysql($db_database);
$con->charset();
$sql = "select `passwd`,`id`,`mail` from rains_users where name = '{$_COOKIE['rains_user']}';";
$query = $con->query($sql);
$list = $query->fetchAll();
if ($list['0']['passwd'] != $_COOKIE['rains_password']) {
    echo '<script>alert("COOKIE登录信息失效，请重新登录！");</script><meta http-equiv="refresh" content="1;url=/login.php?act=out">';
    die();
}