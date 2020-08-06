<?php require('../Sql_Filter.php');?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>语录提交</title>
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
                    <h5>提交语录 - 语录中心<small class="m-l-sm">这是一个语录系统</small></h5>
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
                        <form action="?act=write" method="POST">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">语录：</label>
                                <div class="col-sm-9">
                                    <textarea name="txt" class="form-control" placeholder="请输入语录"
                                              data-form-un="1483112471400.764"></textarea>
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">作者：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="author" class="form-control" placeholder="输入的内容在15字以内"
                                           data-form-un="1483112471400.764">
                                </div>
                                <br/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">分类：</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="type">
                                        <option value="0">动漫语录</option>
                                        <option value="1">哲理语录</option>
                                        <option value="2">名人名言</option>
                                        <option value="3">优美诗词</option>
                                        <option value="4">其他类型</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">分享：</label>
                                <div class="col-sm-9">
                                    <label>
                                        <input type="radio" checked value="1" name="share"><i>分享这条语录</i></label>
                                    <span style="font-size:20px;color: #4169E1;margin-right:10px;margin-left:10px;">  <b>or</b>  </span>
                                    <label>
                                        <input type="radio" value="0" name="share"><i>不分享这条语录</i></label>
                                </div>
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
    <?php
    require('../class/login_verify.php');
    date_default_timezone_set("Asia/Shanghai");
    $time = date('Y-m-d H:i:s');
    if (@$_POST['submit']) {
        $txt = $_POST['txt'];
        $author = $_POST['author'];
        $type = $_POST['type'];
        $userid = $list['0']['id'];
        $share = $_POST['share'];
        if ($txt == true && $author == true) {
            if ($share == 0) {
                $sharetime = '0000-00-00 00:00:00';
            } else {
                $sharetime = $time;
            }
            $sql = "insert into rains_own (txt, author, kind, userid, time, share, sharetime) values ('$txt','$author','$type','$userid','$time','$share','$sharetime')";
            if ($con->query($sql)) {
                echo '<script>alert("添加成功！");</script>';
            } else {
                echo '<script>alert("添加失败！");</script>';
            }
        } else {
            echo '<script>alert("还有未填项！");</script>';
        }
    }
    ?>

</body>

</html>
