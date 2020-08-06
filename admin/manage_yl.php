<?php
require('../Sql_Filter.php');
require('../class/login_verify.php');
if ($list[0]['id'] != 1) {
    echo "<script>alert(\"你无权访问当前页面\");</script>";
    exit();
}
$type = array('动漫语录', '哲理语录', '名人名言', '优美诗词', '其他类型');
$page = @$_GET['p'] ? @$_GET['p'] : 1;
//模式1 用户语录  模式2 系统语录
$mode = @$_GET['m'] ? @$_GET['m'] : 1;
//echo $mode;
$id = $_GET['id'];
if ($page < 1) {
    exit('参数错误');
}
if (@$_GET['action'] == 'del' && $id == true) {
    if ($mode == 1) {
        $sql = "DELETE FROM rains_own WHERE id = $id";
    }
    if ($mode == 2) {
        $sql = "DELETE FROM rains_sjyl WHERE id = $id";
    }
    if ($con->query($sql)) {
        echo '<script>alert("删除成功！");</script>';
    } else {
        echo '<script>alert("未知错误，失败！");</script>';
    }
}
$start = ($page - 1) * 15;
if ($mode == 1) {
    $count_sql = "SELECT COUNT(*) FROM rains_own";
}
if ($mode == 2) {
    $count_sql = "SELECT COUNT(*) FROM rains_sjyl";
}
$total = $con->query($count_sql);
$total = $total->fetchAll();
$total = $total[0][0];
$PageCount = ceil($total / 15);
$PageUp = $page - 1;
$PageNext = $page + 1;
if ($PageCount == $page) {
    $PageNext = '#';
}
if ($page == 1) {
    $PageUp = '#';
}
if ($mode == 1) {
    $sql = "SELECT * FROM rains_own order by time DESC LIMIT $start,15";
}
if ($mode == 2) {
    $sql = "SELECT * FROM rains_sjyl order by id DESC LIMIT $start,15";
}
$content = $con->query($sql);
$content = $content->fetchAll();
//print_r($content);
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>语录管理- 后台管理</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href="../resource/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="../resource/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="../resource/css/animate.min.css" rel="stylesheet">
    <link href="../resource/css/style.min.css?v=4.0.0" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInUp">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>所有项目</h5>
                    <div class="ibox-tools">
                        <a href="<?php if ($mode == 1) {
                            echo '?m=2';
                        } else {
                            echo '?m=1';
                        } ?>" class="btn btn-primary btn-xs"><?php if ($mode == 1) {
                                echo '管理系统语录';
                            } else {
                                echo '管理用户语录';
                            } ?></a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="project-list">
                        <table class="table table-hover">
                            <tbody>
                            <?php if (count($content) != 0) {
                                $i = 0;
                                while ($i < count($content)) {
                                    if ($mode == 1) {
                                        echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>' . $content[$i]['txt'] . '(' . $content[$i]['author'] . ')</B>
                                            <br/>
                                            <small><button type="button" class="btn btn-xs btn-primary btn-outline btn-info">用户ID:' . $content[$i]['userid'] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-warning">提交时间:' . $content[$i]['time'] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-success">' . $type[$content[$i]['kind']] . '</button></small>
                                        </td>
                                        <td class="project-actions"><a href="?m=' . $mode . '&action=del&p=' . $page . '&id=' . $content[$i]['id'] . '" onClick="del()" class="btn btn-white btn-sm"><i class="fa fa-recycle"></i> 删除 </a>
                                        </td>
                                        </tr>';
                                    } else {
                                        echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>' . $content[$i]['txt'] . '</B>
                                            <br/>
                                            <small><button type="button" class="btn btn-xs btn-primary btn-outline btn-info">ID:' . $content[$i]['id'] . '</button></small>
                                        </td>
                                        <td class="project-actions"><a href="?m=' . $mode . '&action=del&p=' . $page . '&id=' . $content[$i]['id'] . '" onClick="del()" class="btn btn-white btn-sm"><i class="fa fa-recycle"></i> 删除 </a>
                                        </td>
                                        </tr>';
                                    }
                                    $i++;
                                }
                            } else {
                                echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>暂时没有语录</B>
                                        </td></tr>';
                            } ?>
                            <tr>
                                <td class="project-title">
                                    <a href="?m=<?php echo $mode; ?>&p=1" class="btn btn-white btn-sm"> 第一页 </a>
                                    <a href="?m=<?php echo $mode; ?>&p=<?php echo $PageUp; ?>"
                                       class="btn btn-white btn-sm"> 上一页 </a>
                                    <a href="?m=<?php echo $mode; ?>&p=<?php echo $PageNext; ?>"
                                       class="btn btn-white btn-sm"> 下一页 </a>
                                    <a href="?m=<?php echo $mode; ?>&p=<?php echo $PageCount; ?>"
                                       class="btn btn-white btn-sm"> 尾页 </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../resource/js/jquery.min.js?v=2.1.4"></script>
<script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
<script src="../resource/js/content.min.js?v=1.0.0"></script>
<script>
    function del() {
        if (!confirm("确认要删除？")) {
            window.event.returnValue = false;
        }
    }
</script>
</body>
</html>