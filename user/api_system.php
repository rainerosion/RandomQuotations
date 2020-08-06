<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>系统接口 - 接口中心</title>
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
                    <h5>调用接口<small class="m-l-sm">这是一个随机语录</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>

                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        调用接口<br/>
                    </h2>
                    <p>
                        你可以定制属于你自己的语录并在你的网站调用它，你也可以使用系统为你提供的语录并调用。</p>
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
                        <div class="form-group">
                            <label class="col-sm-3 control-label">TXT（返回纯文本）</label>
                            <textarea name="txt" class="form-control"
                                      data-form-un="1483112471400.764">http://<?php echo $_SERVER['SERVER_NAME']; ?>/api_system.php?type=txt&source=true</textarea>
                            返回内容：<br/>人生重要的事情就是确定一个伟大的目标，并决心实现它。——歌德
                            <br/>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">JSON（JSON数据）</label>
                            <textarea name="txt" class="form-control"
                                      data-form-un="1483112471400.764">http://<?php echo $_SERVER['SERVER_NAME']; ?>/api_system.php?type=json&source=true</textarea>
                            返回内容：<br/>{"txt":"即使我们的世界被分开，但记忆却已超越时空。——《偷星九月天》","state":"SUCCESS"}
                            <br/>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">javascript（js直接使用）</label>
                            <textarea name="txt" class="form-control" data-form-un="1483112471400.764"><script type="text/JavaScript" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/api_system.php?type=js"></script></textarea>
                            使用提示：<br/>颜色（color）为可选参数默认黑色，使用颜色时，在接口type=js后面加上&color=16进制颜色代码(不能带#号)
                            <br/>这里提供几个颜色代码<font color='#fa8c35'>fa8c35</font>,<font color='#4b5cc4'>4b5cc4</font>,<font
                                    color='#801dae'>801dae</font>,<font color='#44cef6'>44cef6</font><br/>可选参数source值为false时不显示作者，为true时显示作者。
                            <br/>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">javascript（封装为function）</label>
                            <textarea name="txt" class="form-control" data-form-un="1483112471400.764"><script type="text/JavaScript" src="//<?php echo $_SERVER['SERVER_NAME']; ?>/api_system.php?userid=<?php echo $list[0]['id']; ?>&type=js_2&source=true"></script></textarea>
                            使用提示：<br/>source参数取值为false时不显示作者，true时候显示作者。
                            <br/>添加引入上述代码后在需要显示的位置使用&lt;script type="text/JavaScript"&gt;rains()&lt;/script&gt;代码即可
                            <br/>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/JavaScript" src="../api_system.php?type=js&color=fa8c35"></script>
    <script src="../resource/js/jquery.min.js?v=2.1.4"></script>
    <script src="../resource/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="../resource/js/content.min.js?v=1.0.0"></script>
</body>
</html>
