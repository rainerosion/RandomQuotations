<?php
require('../Sql_Filter.php');
require('../class/login_verify.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户中心 - 首页</title>
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
                    <h5>用户中心<small class="m-l-sm">这是一个语录管理调用系统</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>

                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        语录系统<br/>
                    </h2>
                    <p>
                        你可以定制属于你自己的语录并在你的网站调用它，你也可以使用系统为你提供的语录并调用。相关使用方法请点击功能菜单【使用接口】</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>用户中心<small>用户信息</small></h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <i class="fa fa-info-circle"></i> 信息
                                </div>
                                <div class="panel-body">
                                    <p>用户ID: <b><?php echo $list[0]['id']; ?></b></p>
                                    <p>用户名: <b>
                                            <?php echo $_COOKIE['rains_user'];
                                            if ($list[0]['id'] == 1) {
                                                echo '[<font color="red">管理员</font>]';
                                            } else {
                                                echo '[<font color="red">普通用户</font>]';
                                            } ?>
                                        </b></p>
                                    <p>EMAIL: <b><?php echo $list[0]['mail']; ?></b></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../resource/js/jquery.min.js?v=2.1.4"></script>
    <script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="../resource/js/content.min.js?v=1.0.0"></script>
</body>

</html>