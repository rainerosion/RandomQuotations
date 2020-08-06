<?php
require('./config.php');
require('./class/mysql_class.php');
header("Content-type: text/html; charset=utf-8");
$type = array('动漫语录', '哲理语录', '名人名言', '优美诗词', '其他类型');
$kind = $_GET['kind'];
$userid = @$_GET['userid'];
if ($userid == false) {
    echo "未收到用户ID";
    exit();
}
$con = new Sql($db_host, $db_user, $db_pwd);
$con->connect_mysql($db_database);
$con->charset();
if ($kind == false) {
    $sql = "SELECT * FROM `rains_own` where userid = $userid ORDER BY RAND() LIMIT 1";
} else {
    $sql = "SELECT * FROM `rains_own` where userid = $userid and kind = $kind ORDER BY RAND() LIMIT 1";
}
$query = $con->query($sql);
$list = $query->fetchAll();
if (@$_GET['type'] == 'txt') {
    if (@$_GET['source'] == 'false') {
        echo $list['0']['txt'];
    } else {
        echo $list['0']['txt'] . '——' . $list['0']['author'];
    }
}
if (@$_GET['type'] == 'json') {
    if ($list['0']['txt']) {
        $state = "SUCCESS";
    } else {
        $state = "ERROR";
    }
    $content = array('id' => $list['0']['id'], 'author' => urlencode($list['0']['author']), 'time' => $list['0']['time'], 'kind' => urlencode($type[$list['0']['kind']]), 'txt' => urlencode($list['0']['txt']), 'state' => $state);
    echo urldecode(json_encode($content));
}
if (@$_GET['type'] == 'js') {
    $content = "";
    if (@$_GET['source'] == 'false') {
        $content = $list['0']['txt'];
    } else {
        $content = $list['0']['txt'] . ' ——' . $list['0']['author'];
    }
    $color = @$_GET['color'] ? @$_GET['color'] : '000000';
    echo "var Color = '#{$color}';var txt = '{$content}';document.write('<font color=\"' + Color + '\">' + txt + '</font>');";
}
if (@$_GET['type'] == 'js_2') {
    $content = "";
    if (@$_GET['source'] == 'false') {
        $content = $list['0']['txt'];
    } else {
        $content = $list['0']['txt'] . ' ——' . $list['0']['author'];
    }
    echo "function rains(){document.write(\"<span class='word' >{$content}</span>\");}";
} 

