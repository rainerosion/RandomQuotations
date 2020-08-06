<?php
header("Content-type: text/html; charset=utf-8");
//过滤规则
$FilterRule = "/'|;|insert into|update(.*)set|drop table|select(.*)from|delete from/i";
function Filter($value_one, $FilterRule)
{
    if (preg_match($FilterRule, $value_one)) {
        return true;
    } else {
        return false;
    }
}

//过滤POST GET请求
foreach ($_REQUEST as $value) {
    if (Filter($value, $FilterRule) == true) {
        echo "非法请求";
        exit();
    }
}
//过滤COOKIE
foreach ($_COOKIE as $value) {
    if (Filter($value, $FilterRule) == true) {
        echo "非法请求";
        exit();
    }
}