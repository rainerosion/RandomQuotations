<?php
require('../Sql_Filter.php');
require('../class/login_verify.php');
$userid = $list['0']['id'];
$password_old = @$_POST['password_old'];
$password_new = md5(@$_POST['password_new']);
$email = @$_POST['email'];
if (@$_GET['act'] == 'ChangePassword' && @$_POST['password_new'] == true && @$_POST['submit'] == true) {
    if ($list['0']['passwd'] == md5($password_old)) {
        if ($con->query("UPDATE rains_users SET passwd = '$password_new'  WHERE id = $userid ")) {
            echo "<script>alert(\"密码修改成功\");</script>";
        } else {
            echo "<script>alert(\"密码修改失败\");</script>";
        }
    } else {
        echo "<script>alert(\"原密码错误\");</script>";
    }
}
if (@$_GET['act'] == 'ChangeEmail' && @$_POST['email'] == true && @$_POST['submit'] == true) {
    if ($list['0']['passwd'] == md5($password_old)) {
        if ($con->query("UPDATE rains_users SET mail = '$email'  WHERE id = $userid ")) {
            echo "<script>alert(\"邮箱修改成功\");</script>";
        } else {
            echo "<script>alert(\"邮箱修改失败\");</script>";
        }
    } else {
        echo "<script>alert(\"原密码错误\");</script>";
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>信息修改 - 个人设置</title>
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
                    <h5>信息修改<small class="m-l-sm">这是一个随机语录</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>

                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        信息修改<br/>
                    </h2>
                    <p>
                        这里可以修改用户密码用户邮箱，用户名唯一，一经注册 不可修改~</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    密码修改
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="?act=ChangePassword" method="POST">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">旧密码：</label>
                                <div class="col-sm-9">
                                    <input name="password_old" class="form-control" placeholder="请输入当前正在使用的密码"
                                           data-form-un="1483112471400.764" required="">
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">新密码：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="password_new" class="form-control" placeholder="输入新的密码"
                                           data-form-un="1483112471400.764" required="">
                                </div>
                                <br/>
                            </div>
                            <div class="form-group col-sm-9" align="center">
                                <input type="submit" name="submit" value="确认修改" class="btn btn-primary">

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="panel panel-warning">
                <div class="panel-heading">
                    邮箱修改
                </div>
                <div class="panel-body">
                    <form action="?act=ChangeEmail" method="POST">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">当前密码：</label>
                            <div class="col-sm-9">
                                <input name="password_old" class="form-control" placeholder="请输入密码"
                                       data-form-un="1483112471400.764" required="">
                            </div>
                            <br/>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">新的邮箱：</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" placeholder="输入新的邮箱"
                                       data-form-un="1483112471400.764" required="">
                            </div>
                            <br/>
                        </div>
                        <div class="form-group col-sm-9" align="center">
                            <input type="submit" name="submit" value="确认修改" class="btn btn-primary">

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
