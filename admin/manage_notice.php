<?php
require('../Sql_Filter.php');
require('../class/login_verify.php');
if ($list[0]['id'] != 1) {
    echo "<script>alert(\"你无权访问当前页面\");</script>";
    exit();
}
$page = @$_GET['p'] ? @$_GET['p'] : 1;
$id = $_GET['id'];
if ($page < 1) {
    exit('参数错误');
}
if (@$_GET['action'] == 'del' && $id == true) {
    if ($con->query("DELETE FROM rains_notice WHERE id = $id")) {
        echo '<script>alert("删除成功！");</script>';
    } else {
        echo '<script>alert("未知错误，失败！");</script>';
    }
}
$start = ($page - 1) * 15;
$total = $con->query("SELECT COUNT(*) FROM rains_notice");
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
$content = $con->query("SELECT * FROM rains_notice order by time DESC LIMIT $start,15");
$content = $content->fetchAll();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>公告管理 - 后台管理</title>
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
                        <a href="new_notice.php" class="btn btn-primary btn-xs">创建新项目</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="project-list">
                        <table class="table table-hover">
                            <tbody>
                            <?php if (count($content) != 0) {
                                $i = 0;
                                while ($i < count($content)) {
                                    echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>' . $content[$i]['content'] . '</B>
                                            <br/>
                                            <small><button type="button" class="btn btn-xs btn-primary btn-outline btn-info">ID:' . $content[$i]['id'] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-warning">' . $content[$i]['time'] . '</small>
                                        </td>
                                        <td class="project-actions"></button><a href="?action=del&p=' . $page . '&id=' . $content[$i]['id'] . '" onClick="del()" class="btn btn-white btn-sm"><i class="fa fa-recycle"></i> 删除 </a>
                                        </td>
                                        </tr>';
                                    $i++;
                                }
                            } else {
                                echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>暂时没有公告</B>
                                        </td></tr>';
                            } ?>
                            <tr>
                                <td class="project-title">
                                    <a href="?p=1" class="btn btn-white btn-sm"> 第一页 </a>
                                    <a href="?p=<?php echo $PageUp; ?>" class="btn btn-white btn-sm"> 上一页 </a>
                                    <a href="?p=<?php echo $PageNext; ?>" class="btn btn-white btn-sm"> 下一页 </a>
                                    <a href="?p=<?php echo $PageCount; ?>" class="btn btn-white btn-sm"> 尾页 </a>
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