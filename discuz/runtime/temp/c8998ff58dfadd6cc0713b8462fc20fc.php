<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"F:\web\discuz\public/../application/admin\view\index\index.html";i:1486481837;s:63:"F:\web\discuz\public/../application/admin\view\public\base.html";i:1486728750;}*/ ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="__PUBADMIN__/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBADMIN__/css/main.css"/>
    <script type="text/javascript" src="__PUBADMIN__/js/libs/modernizr.min.js"></script>
</head>
<body>

    <div class="topbar-wrap white">
        <div class="topbar-inner clearfix">
            <div class="topbar-logo-wrap clearfix">
                <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
                <ul class="navbar-list clearfix">
                    <li><a class="on" href="index.html">首页</a></li>
                    <li><a href="#" target="_blank">网站首页</a></li>
                </ul>
            </div>
            <div class="top-info-wrap">
                <ul class="top-info-list clearfix">
                    <li><a href="http://www.jscss.me">管理员</a></li>
                    <li><a href="http://www.jscss.me">修改密码</a></li>
                    <li><a href="http://www.jscss.me">退出</a></li>
                </ul>
            </div>
        </div>
    </div>

<div class="container clearfix">
    
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('cate/lst'); ?>"><i class="icon-font">&#xe008;</i>栏目管理</a></li>
                        <li><a href="<?php echo url('article/lst'); ?>"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                        <li><a href="<?php echo url('link/lst'); ?>"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info">WINNT</span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win64) PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">静静设计-版本</label><span class="res-info">v-0.1</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info">2014年3月18日 21:08:24</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">localhost [ 127.0.0.1 ]</span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">ThinkPHP交流群：</label><span class="res-info">484519446</span>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
  
    <!--/main-->
</div>

 <link rel="stylesheet" type="text/css" href="__PUBADMIN__/js/dialog/skin/default/layer.css"/>
 <script type="text/javascript" src="__PUBADMIN__/js/jquery-1.11.3.min.js"></script>
 <script type="text/javascript" src="__PUBADMIN__/js/jquery.form.js"></script>
 <script type="text/javascript" src="__PUBADMIN__/js/dialog/layer.js"></script>
 <script type="text/javascript" src="__PUBADMIN__/js/dialog.js"></script>
 <script type="text/javascript" src="__PUBADMIN__/js/index.js"></script>
</body>
</html>