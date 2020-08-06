<?php
error_reporting(0);
require('../Sql_Filter.php');
require_once('./batch.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>批量导入语句</title>
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
                    <h5>批量导入 - 语录中心<small class="m-l-sm">这是一个语录系统</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>

                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        提交语录<br/>
                    </h2>
                    <p>
                        你可以定制属于你自己的语录并在你的网站调用它，你也可以使用系统为你提供的语录并调用。相关使用方法请点击功能菜单【使用接口】</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    提交窗口
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="?act=upload" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">文件：</label>
                                <div class="col-sm-9">
                                    <input type="file" name="file" class="form-control"
                                           data-form-un="1483112471400.764">
                                </div>
                                <br/>
                            </div>
                            <div class="form-group col-sm-9" align="center">
                                <input type="submit" name="submit" value="提交我的语录" class="btn btn-primary">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../resource/js/jquery.min.js?v=2.1.4"></script>
    <script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="../resource/js/content.min.js?v=1.0.0"></script>
</body>
<?php
if ($_GET['act'] == 'upload') {
    if ($_FILES['file']['error'] != 0) {
        die("<script>alert(\"文件上传出错！\");</script>");
    }
    if ($_FILES['file']['type'] != 'text/plain' || ($_FILES['file']['size'] / 1024) >= 200) {
        echo "<script>alert(\"请上传txt格式文件，大小不得超过200k\");</script>";
    } else {
        $status = BatchAdd($_FILES['file']['tmp_name']);
        echo '<script>alert("' . $status . '");</script>';
    }
}
?>
</html>
