<?php
require('../Sql_Filter.php');
require('../class/login_verify.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>语录管理 - 语录中心</title>
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
                    <h5>我的所有语录</h5>
                    <div class="ibox-tools">
                        <a href="write.php" class="btn btn-primary btn-xs">添加语录</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row m-b-sm m-t-sm">

                        <div class="col-md-12">

                            <div class="input-group">
                                <input type="text" placeholder="搜索功能开发中...." class="input-sm form-control"> <span
                                        class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </div>

                    <div class="project-list">

                        <table class="table table-hover">
                            <tbody>
                            <?php
                            date_default_timezone_set("Asia/Shanghai");
                            $time = date('Y-m-d H:i:s');
                            $type = array('动漫语录', '哲理语录', '名人名言', '优美诗词', '其他类型');
                            $id = @$_GET['id'];
                            if (@$_GET['action'] == 'del' && $id == true) {
                                if ($con->query("DELETE FROM rains_own WHERE id = $id")) {
                                    echo '<script>alert("删除成功！");</script>';
                                } else {
                                    echo '<script>alert("未知错误，失败！");</script>';
                                }
                            }
                            if (@$_GET['action'] == 'share' && $id == true) {
                                if ($con->query("UPDATE rains_own SET share = 1,sharetime = '$time' WHERE id = $id")) {
                                    echo '<script>alert("分享成功！");</script>';
                                } else {
                                    echo '<script>alert("未知错误，分享失败！");</script>';
                                }
                            }
                            $userid = $list['0']['id'];
                            $page = @$_GET['p'] ? @$_GET['p'] : 1;
                            if ($page < 1) {
                                exit('参数错误');
                            }
                            $start = ($page - 1) * 15;
                            $content = $con->query("SELECT id, txt, time, author, kind FROM rains_own WHERE userid=$userid order by time DESC LIMIT $start,15");
                            $total = $con->query("SELECT COUNT(*) FROM rains_own WHERE userid=$userid");
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
                            $content = $content->fetchAll();
                            //print_r($content);
                            $num = count($content);
                            if ($num == 0) {
                                echo '<script>alert("系统发现没有属于你的语录哦，快去添加一条吧！");</script>';
                            }

                            if (isset ($_SERVER['HTTP_USER_AGENT'])) {
                                $clientkeywords = array(
                                    'nokia',
                                    'sony',
                                    'ericsson',
                                    'mot',
                                    'samsung',
                                    'htc',
                                    'sgh',
                                    'lg',
                                    'sharp',
                                    'sie-',
                                    'philips',
                                    'panasonic',
                                    'alcatel',
                                    'lenovo',
                                    'iphone',
                                    'ipod',
                                    'blackberry',
                                    'meizu',
                                    'android',
                                    'netfront',
                                    'symbian',
                                    'ucweb',
                                    'windowsce',
                                    'palm',
                                    'operamini',
                                    'operamobi',
                                    'openwave',
                                    'nexusone',
                                    'cldc',
                                    'midp',
                                    'wap',
                                    'mobile'
                                );
                                if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                                    for ($i = 0; $i < $num; $i++) {
                                        echo '
                                        <tr>
                                            <td class="project-title" style="word-break:break-all"><B>' . $content[$i]['txt'] . '——【' . $content[$i]['author'] . '】</B>
                                                <br/>
                                                <small><button type="button" class="btn btn-xs btn-primary btn-outline btn-info">ID' . $content[$i]['id'] . ' </button><button type="button" class="btn btn-xs btn-primary btn-outline btn-success">' . $type[$content[$i]['kind']] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-warning">创建于' . $content[$i]['time'] . '</button></small><br/><small><a href="?action=share&id=' . $content[$i]['id'] . '" class="btn btn-white btn-sm"><i class="fa fa-share"></i> 分享 </a>
                        <a href="edit.php?id=' . $content[$i]['id'] . '" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 编辑 </a>
                        <a href="?action=del&p=' . $page . '&id=' . $content[$i]['id'] . '" onClick="del()" class="btn btn-white btn-sm"><i class="fa fa-recycle"></i> 删除 </a></small>
                                            </td>
                                        </tr>';
                                    }
                                } else {
                                    //pc 端

                                    for ($i = 0; $i < $num; $i++) {

                                        echo '
                                        <tr>
                                            <td class="project-title" style="word-break:break-all"><B>' . $content[$i]['txt'] . '——【' . $content[$i]['author'] . '】</B>
                                                <br/>
                                                <small><button type="button" class="btn btn-xs btn-primary btn-outline btn-info">ID' . $content[$i]['id'] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-success">' . $type[$content[$i]['kind']] . '</button><button type="button" class="btn btn-xs btn-primary btn-outline btn-warning">创建于' . $content[$i]['time'] . '</button></small>
                                            </td>
                                           <td class="project-actions">
                                               <a href="?action=share&id=' . $content[$i]['id'] . '" class="btn btn-white btn-sm"><i class="fa fa-share"></i> 分享 </a>
                                                <a href="edit.php?id=' . $content[$i]['id'] . '" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 编辑 </a>
                                                <a href="?action=del&p=' . $page . '&id=' . $content[$i]['id'] . '" onClick="del()" class="btn btn-white btn-sm"><i class="fa fa-recycle"></i> 删除 </a>
                                            </td>
                                        </tr>';
                                    }
                                }
                            }
                            ?>
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
<script>function del() {
        if (!confirm("确认要删除？")) {
            window.event.returnValue = false;
        }
    }
</script>
</body>
</html>