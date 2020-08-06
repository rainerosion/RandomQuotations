<?php
require('../Sql_Filter.php');
  require('../class/login_verify.php');
  $content = $con->query("SELECT userid, txt, time, author, kind FROM rains_own order by time DESC LIMIT 0,20");
  $content = $content->fetchAll();  
  ?> 
  <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>最新提交 - 分享中心</title>
   
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
                            <a href="write.php" class="btn btn-primary btn-xs">创建新语录</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        

                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                    
                                      <?php if(count($content) != 0){ 
                                        $i = 0;
                                        $type = array('动漫语录','哲理语录','名人名言','优美诗词','其他类型');
                                        while($i < count($content)){
                                        echo '<tr><td class="project-title" style="word-break:break-all">
                                           <B>'.$content[$i]['txt'].'——【'.$content[$i]['author'].'】</B>
                                            <br/>
                                            <small><button type="button" class="btn btn-xs btn-primary btn-outline btn-info">用户ID:'.$content[$i]['userid'].'</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-success">'.$type[$content[$i]['kind']].'</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-warning">'.$content[$i]['time'].'</button></small>
                                        </td></tr>'; 
                                        $i++;
                                      }
                                      }else{ 
                                       echo '<td class="project-title" style="word-break:break-all">
                                           <B>暂时没有人分享</B>
                                        </td>';
                                        }?>
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