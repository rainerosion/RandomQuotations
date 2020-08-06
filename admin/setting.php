<?php
require('../class/login_verify.php');
if ($list[0]['id'] != 1) {
    echo "<script>alert(\"你无权访问当前页面\");</script>";
    exit();
} ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>站点设置 - 后台设置</title>
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
                    <h5>站点设置<small class="m-l-sm">语录系统</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        站点设置<br/>
                    </h2>
                    <p>
                        在这里进行站点信息设置，因为是存为PHP文本 因此请不要输入php常用的结束符号以及引号。。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    系统API
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">站点名称：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control"
                                           data-form-un="1483112471400.764">
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">站点描述：</label>
                                <div class="col-sm-9">
                                    <textarea name="desc" class="form-control" placeholder="站点描述(Description)"
                                              data-form-un="1483112471400.764"></textarea>
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">关键词：</label>
                                <div class="col-sm-9">
                                    <textarea name="key" class="form-control" placeholder="关键词(Keywords)"
                                              data-form-un="1483112471400.764"></textarea>
                                </div>
                                <br/>
                            </div>
                            <div class="form-group col-sm-9" align="center">
                                <input type="submit" name="submit" value="修改站点信息" class="btn btn-primary">

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
</html>
<?php
if (@$_POST['submit']) {
    $con = "<?php\n//站点配置文件\n\$SiteTitle = '{$_POST['title']}';\n\$Description = '{$_POST['desc']}';\n\$Keywords = '{$_POST['key']}';";
    if (file_put_contents('webconfig.php', $con)) {
        echo "<script>alert(\"修改站点信息成功\");</script>";
    } else {
        echo "<script>alert(\"修改站点信息失败\");</script>";
    }
}
?>
