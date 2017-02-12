<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"F:\web\discuz\public/../application/admin\view\Jump\index.html";i:1486900372;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <link rel="stylesheet" type="text/css" href="__PUBADMIN__/js/dialog/skin/default/layer.css"/>
    <style>
        a{text-decoration: none;color: #666;}
    </style>
</head>
<body>
    
    <div class="layui-layer layui-layer-dialog layer-ext-moon layer-anim" style="margin-left:-140px; left: 50%;">
            <?php switch ($code) {case 1:?>
                <div id="" class="layui-layer-content layui-layer-padding"><i class="layui-layer-ico layui-layer-ico6"></i><?php echo(strip_tags($msg));?></div>

                <?php break;case 0:?>
                <div id="" class="layui-layer-content layui-layer-padding"><i class="layui-layer-ico layui-layer-ico5"></i><?php echo(strip_tags($msg));?></div>

                <?php break;} ?>
            <p class="detail"></p>
            <p class="layui-layer-title">
                页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
            </p>
        </div>
    
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
