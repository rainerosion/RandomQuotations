<?php
require('config.php');
require('./class/mysql_class.php');
header("Content-type: text/html; charset=utf-8");
$con = new Sql($db_host, $db_user, $db_pwd);
$con->connect_mysql($db_database);
$con->charset();
$sql = "SELECT txt FROM `rains_sjyl` ORDER BY RAND() LIMIT 1";
$query = $con->query($sql);
$list = $query->fetchAll();
if (@$_GET['type'] == 'txt') {
    if (@$_GET["source"] == 'false') {
        $con = explode("——", $list['0']['txt']);
        echo count($con) >= 2 ? $con[0] : 'error';
    } else {
        echo $list['0']['txt'];
    }
}
if (@$_GET['type'] == 'json') {
    if ($list['0']['txt']) {
        $state = "SUCCESS";
    } else {
        $state = "ERROR";
    }
    $content = "";
    if (@$_GET["source"] == 'false') {
        $con = explode("——", $list['0']['txt']);
        $content = count($con) >= 2 ? $con[0] : 'error';
    } else {
        $content = $list['0']['txt'];
    }
    $content = array('txt' => urlencode($content), 'state' => $state);
    echo urldecode(json_encode($content));
}
if (@$_GET['type'] == 'js') {
    $content = "";
    if (@$_GET["source"] == 'false') {
        $con = explode("——", $list['0']['txt']);
        $content = count($con) >= 2 ? $con[0] : 'error';
    } else {
        $content = $list['0']['txt'];
    }
    $color = @$_GET['color'] ? @$_GET['color'] : '000000';
    echo "var Color = '#{$color}';var txt = '{$content}';document.write('<font color=\"' + Color + '\">' + txt + '</font>');";
}
if (@$_GET['type'] == 'js_2') {
    $content = "";
    if (@$_GET["source"] == 'false') {
        $con = explode("——", $list['0']['txt']);
        $content = count($con) >= 2 ? $con[0] : 'error';
    } else {
        $content = $list['0']['txt'];
    }
    $color = @$_GET['color'] ? @$_GET['color'] : '000000';
    echo "function rains(){document.write(\"<span class='word'>{$content}</span>\");}";
} 