<?php
require('../Sql_Filter.php');
require('../class/login_verify.php');
if ($list[0]['id'] != 1) {
    echo "<script>alert(\"你无权访问当前页面\");</script>";
    exit();
}
date_default_timezone_set("Asia/Shanghai");
$time = date('Y-m-d H:i:s');
$userid = $list['0']['id'];
if (@$_POST['submit'] && @$_POST['txt'] == true) {
    if ($con->query("insert into rains_notice(content,time)values('{$_POST['txt']}','$time')")) {
        echo "<script>alert(\"发布成功\");</script>";
    } else {
        echo "<script>alert(\"嘎巴失败\");</script>";

    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>公告发布 - 后台管理</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href="../resource/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="../resource/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="../resource/css/animate.min.css" rel="stylesheet">
    <link href="../resource/css/style.min.css?v=4.0.0" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>公告发布<small class="m-l-sm">这是一个语录系统</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        公告发布<br/>
                    </h2>
                    <p>
                        你可以在这里向正在使用你系统的用户发布公告通知。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    公告发布
                </div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">内容：</label>
                            <div class="col-sm-9">
                                <textarea name="txt" class="form-control" placeholder="输入公告内容"
                                          data-form-un="1483112471400.764"></textarea>
                            </div>
                            <br/>
                        </div>
                        <div class="form-group col-sm-9" align="center">
                            <input type="submit" name="submit" value="发布公告" class="btn btn-primary">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../resource/js/jquery.min.js?v=2.1.4"></script>
    <script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="../resource/js/content.min.js?v=1.0.0"></script>
</body>

</html>
