<?php
require('../Sql_Filter.php');
require('../class/login_verify.php');
$id = @$_GET['id'];
if (@$_POST['submit']) {
    if ($con->query("UPDATE rains_own SET txt = '{$_POST['txt']}', author = '{$_POST['author']}', kind='{$_POST['type']}'  WHERE id = $id")) {
        echo "<script>alert(\"修改成功！\");</script>";
    } else {
        echo "<script>alert(\"修改失败！\");</script>";
    }
}
if ($id) {
    $list = $con->query("select txt, author, kind from rains_own where id = $id");
    $list = $list->fetchAll();
    echo count($list);
    if (count($list) == 0) {
        echo "<script>alert(\"没有数据\");</script>";
        exit();
    }
} else {
    echo "<script>alert(\"参数错误\");</script>";
    exit();
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>语录编辑 - 语录中心</title>
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
                    <h5>修改语录<small class="m-l-sm">这是一个随机语录</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>

                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        修改语录<br/>
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
                    修改窗口
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="?id=<?php echo $id; ?>" method="POST">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">语录：</label>
                                <div class="col-sm-9">
                                    <textarea name="txt" class="form-control" placeholder="请输入语录"
                                              data-form-un="1483112471400.764"><?php echo $list[0]['txt']; ?></textarea>
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">作者：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="author" class="form-control"
                                           value="<?php echo $list[0]['author']; ?>" placeholder="输入的内容在15字以内"
                                           data-form-un="1483112471400.764">
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">分类：</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="type">
                                        <option <?php if ($list[0]['kind'] == 0) {
                                            echo "selected";
                                        } ?> value="0">动漫语录
                                        </option>
                                        <option <?php if ($list[0]['kind'] == 1) {
                                            echo "selected";
                                        } ?> value="1">哲理语录
                                        </option>
                                        <option <?php if ($list[0]['kind'] == 2) {
                                            echo "selected";
                                        } ?> value="2">名人名言
                                        </option>
                                        <option <?php if ($list[0]['kind'] == 3) {
                                            echo "selected";
                                        } ?> value="3">优美诗词
                                        </option>
                                        <option <?php if ($list[0]['kind'] == 4) {
                                            echo "selected";
                                        } ?> value="4">其他类型
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-9" align="center">
                                <input type="submit" name="submit" value="修改我的语录" class="btn btn-primary">

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
