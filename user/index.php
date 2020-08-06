<?php require('../class/login_verify.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>用户中心 - 主页</title>

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->

    <link rel="shortcut icon" href="../favicon.ico">
    <link href="../resource/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="../resource/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="../resource/css/animate.min.css" rel="stylesheet">
    <link href="../resource/css/style.min.css?v=4.0.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="../resource/img/head.jpg"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong
                                           class="font-bold"><?php echo $_COOKIE['rains_user']; ?></strong></span>
                                <span class="text-muted text-xs block"> <?php if ($list['0']['id'] == 1) {
                                        echo '超级管理员';
                                    } else {
                                        echo '普通用户';
                                    } ?><b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="J_menuItem" href="users_info.php">修改密码</a>
                            </li>
                            <li><a class="J_menuItem"
                                   href="http://wpa.qq.com/msgrd?v=3&uin=1782832653&site=qq&menu=yes">联系我们</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="/login.php?act=out">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">随
                    </div>
                </li>
                <?php
                if ($list['0']['id'] == 1) {
                    echo '
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i>
                            <span class="nav-label">系统设置</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="../admin/setting.php">站点设置</a>
                            </li>
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">后台管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="../admin/manage_notice.php">公告管理</a>
                            </li>
                            <li><a class="J_menuItem" href="../admin/new_notice.php">公告发布</a>
                            </li>
                            <li><a class="J_menuItem" href="../admin/manage_users.php">用户管理</a>
                            </li>
                            <li><a class="J_menuItem" href="../admin/manage_yl.php">语录管理</a>
                            </li>
                            <li><a class="J_menuItem" href="../admin/manage_lyb.php">留言管理</a>
                            </li>
                   
                        </ul>
                    </li>';
                } ?>
                <li>
                    <a class="J_menuItem" href="notice.php"><i class="fa fa-tag"></i> <span
                                class="nav-label">网站公告</span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">个人设置</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="users_info.php">密码修改</a>
                        </li>
                        <li><a class="J_menuItem" href="users_info.php">邮箱修改</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-book"></i> <span class="nav-label">语录中心</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="write.php">提交语录</a>
                        </li>
                        <li><a class="J_menuItem" href="manage.php">管理语录</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-share"></i> <span class="nav-label">分享中心</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="users_share.php">语录分享</a>
                        </li>
                        <li><a class="J_menuItem" href="my_share.php">我的分享</a>
                        </li>
                        <li><a class="J_menuItem" href="new_submit.php">最新提交</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">使用接口</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="api_system.php">系统语录</a>
                        </li>
                        <li><a class="J_menuItem" href="api_users.php">我的语录</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-comment"></i> <span class="nav-label">留言反馈</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="ly.php">问题反馈</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 主题
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="user.php">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="../login.php?act=out" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i>
                退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="user.php?v=4.0" frameborder="0"
                    data-id="user.php" seamless></iframe>
        </div>
    </div>
    <!--右侧部分结束-->
    <!--右侧边栏开始-->
    <div id="right-sidebar">
        <div class="sidebar-container">

            <ul class="nav nav-tabs navs-3">

                <li class="active">
                    <a data-toggle="tab" href="#tab-1">
                        <i class="fa fa-gear"></i> 主题
                    </a>
                </li>
                <li class=""><a data-toggle="tab" href="#tab-2">
                        通知
                    </a>
                </li>
                <li><a data-toggle="tab" href="#tab-3">
                        项目进度
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="sidebar-title">
                        <h3><i class="fa fa-comments-o"></i> 主题设置</h3>
                        <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                    </div>
                    <div class="skin-setttings">
                        <div class="title">主题设置</div>
                        <div class="setings-item">
                            <span>收起左侧菜单</span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                           id="collapsemenu">
                                    <label class="onoffswitch-label" for="collapsemenu">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>固定顶部</span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox"
                                           id="fixednavbar">
                                    <label class="onoffswitch-label" for="fixednavbar">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox"
                                           id="boxedlayout">
                                    <label class="onoffswitch-label" for="boxedlayout">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="title">皮肤选择</div>
                        <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                        </div>
                        <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                        </div>
                        <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<script src="../resource/js/jquery.min.js?v=2.1.4"></script>
<script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
<script src="../resource/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../resource/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../resource/js/plugins/layer/layer.min.js"></script>
<script src="../resource/js/hplus.min.js?v=4.0.0"></script>
<script type="text/javascript" src="../resource/js/contabs.min.js"></script>
<script src="/resource/js/plugins/pace/pace.min.js"></script>
</body>

</html>