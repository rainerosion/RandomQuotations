<?php
require('../Sql_Filter.php');
require('../class/login_verify.php');
$page = @$_GET['p'] ? @$_GET['p'] : 1;
if ($page < 1) {
    exit('参数错误');
}
$start = ($page - 1) * 15;
$total = $con->query("SELECT COUNT(*) FROM rains_own WHERE share = 1");
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
$content = $con->query("SELECT userid, txt, time, author, kind FROM rains_own order by time DESC LIMIT $start,15");
$content = $content->fetchAll();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户分享 - 分享中心</title>
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
                        <a href="projects.html" class="btn btn-primary btn-xs">创建新项目</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="project-list">

                        <table class="table table-hover">
                            <tbody>

                            <?php if (count($content) != 0) {
                                $i = 0;
                                $type = array('动漫语录', '哲理语录', '名人名言', '优美诗词', '其他类型');
                                while ($i < count($content)) {
                                    echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>' . $content[$i]['txt'] . '——【' . $content[$i]['author'] . '】</B>
                                            <br/>
                                            <small><button type="button" class="btn btn-xs btn-primary btn-outline btn-info">用户ID:' . $content[$i]['userid'] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-success">' . $type[$content[$i]['kind']] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-warning">' . $content[$i]['time'] . '</button></small>
                                        </td></tr>';
                                    $i++;
                                }
                            } else {
                                echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>暂时没有人分享</B>
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
</body>
</html>