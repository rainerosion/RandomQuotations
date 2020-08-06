<?php 
require('../Sql_Filter.php');
require('../class/login_verify.php');
$list = $con->query("select * from rains_notice order by time DESC");
$list = $list->fetchAll();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>网站公告 - 用户中心</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link href="../resource/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="../resource/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="../resource/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../resource/css/animate.min.css" rel="stylesheet">
    <link href="../resource/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>基本</h5>
                        
                    </div>

                    <div class="ibox-content timeline">
            <?php if(count($list) == 0){ ?>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i> 6:00
                                    
                                </div>
                                <div class="col-xs-7 content no-top-border">
                                    <p class="m-b-xs"><strong>暂时还没有公告</strong>
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <?php }else{ $i = 0; while($i < count($list)){ ?>
                         <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i> <?php echo $list[$i]['time']; ?>
                                    
                                </div>
                                <div class="col-xs-7 content no-top-border">
                                    <p class="m-b-xs"><strong><?php echo $list[$i]['content']; ?></strong>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                             <?php $i++; } } ?>                 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../resource/js/jquery.min.js?v=2.1.4"></script>
    <script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="../resource/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../resource/js/content.min.js?v=1.0.0"></script>
 
</body>

</html>