<?php
function Register($user, $password, $email)
{
    global $db_host, $db_user, $db_pwd, $db_database;
    date_default_timezone_set("Asia/Shanghai");
    $time = date('Y-m-d h:i:s', time());
    $con = new Sql($db_host, $db_user, $db_pwd);
    $con->connect_mysql($db_database);
    $con->charset();
    $pwd = md5($password);
    $sql = " INSERT INTO rains_users(name,passwd,mail,time)values('{$user}','{$pwd}','{$email}','{$time}'); ";
    $mysql = "select `name` from rains_users where name = '{$user}'";
    $query = $con->query($mysql);
    $list = $query->fetchAll();
    if ($list == true) {
        $error = '帐号已存在';
        return $error;
        die;
    }
    if ($con->query($sql)) {
        return 1;
    } else {
        $false = '注册失败';
        return $false;
    }
}

function SignIn($user, $pwd)
{
    global $db_host, $db_user, $db_pwd, $db_database;
    $pwd = md5($pwd);
    $con = new Sql($db_host, $db_user, $db_pwd);
    $con->connect_mysql($db_database);
    $con->charset();
    $sql = "select `passwd` from rains_users where name = '{$user}';";
    $query = $con->query($sql);
    $list = $query->fetchAll();
    if ($list) {
        if ($list['0']['passwd'] == $pwd) {
            setcookie("rains_user", "{$user}", time() + 3600 * 24 * 7);
            setcookie("rains_password", "{$pwd}", time() + 3600 * 24 * 7);
            return 1;
        } else {
            $error = "帐号或密码错误";
            return $error;
            die;
        }
    } else {
        $error = '帐号不存在';
        return $error;
        die;
    }
}