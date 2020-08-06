<?php
/*  语录批量导入  */
function BatchAdd($FileName)
{
    if (!file_exists($FileName)) {
        die('文件未找到！');
    }
    require_once('../class/login_verify.php');
    //设置时区
    date_default_timezone_set("Asia/Shanghai");
    //获取用户id
    $userid = $list[0]['id'];
    //获取当前时间
    $time = date('Y-m-d H:i:s');
    //读取文本内容
    $txt = file($FileName);
    //计算语句总条数
    $TotalNum = count($txt);
    //循环处理数据开始
    //计算成功条数
    $NumSuccess = 0;
    $NumError = 0;
    for ($i = 0; $i < $TotalNum; $i++) {
    //分割数据
        $contents = explode('  ', $txt[$i]);
        $content = $contents[0];//内容
        $author = $contents[3] ? $contents[3] : null;//作者
        $share = $contents[1] ? $contents[1] : 1; //分享
        $type = $contents[2] ? $contents[2] : 4;  //类型
        $sql = "insert into rains_own (txt, author, kind, userid, time, share, sharetime) values ('$content','$author','$type','$userid','$time','$share','$time')";
        if ($con->query($sql)) {
            $NumSuccess++;
        } else {
            $NumError++;
        }
    }
    return '成功' . $NumSuccess . '条,失败' . $NumError . '条';
//循环处理数据结束
}
