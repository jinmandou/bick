<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"F:\web\discuz\public/../application/admin\view\link\lst.html";i:1486738790;s:63:"F:\web\discuz\public/../application/admin\view\public\base.html";i:1486738906;}*/ ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="__PUBADMIN__/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBADMIN__/css/main.css"/>
    <script type="text/javascript" src="__PUBADMIN__/js/libs/modernizr.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="__PUBADMIN__/js/dialog/skin/default/layer.css"/>
    <script type="text/javascript" src="__PUBADMIN__/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="__PUBADMIN__/js/jquery.form.js"></script>
    <script type="text/javascript" src="__PUBADMIN__/js/dialog/layer.js"></script>
    <script type="text/javascript" src="__PUBADMIN__/js/dialog.js"></script>
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
    
    
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo url('index/index'); ?>">首页</a>
             <span class="crumb-step">&gt;</span><span class="crumb-name">链接管理</span>
            </div>
        </div>
        
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo url('add'); ?>"><i class="icon-font"></i>新增链接</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">   
                        <tr>                           
                            <th width="60px">ID</th>
                            <th>链接标题</th>
                            <th >链接描述</th>
                            <th >链接地址</th>
                            <th width="8%">操作</th>
                        </tr>
                        <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>                            
                            <td><?php echo $vo['id']; ?></td>
                            <td><?php echo $vo['title']; ?></td> 
                            <td><?php echo $vo['desc']; ?></td> 
                            <td title="<?php echo $vo['url']; ?>"><a target="_blank" href="<?php echo $vo['url']; ?>"><?php echo $vo['url']; ?></a></td>          
                            <td>
                                <a class="link-update" href="<?php echo url('edit',array('id'=>$vo['id'])); ?>">修改</a>
                                <a class="link-del" onclick="javascript:
                                             dialog.funconfirm( '你确定要删除该文章吗？','<?php echo url('del',array('id'=>$vo['id'])); ?>');return false;" href="#" >删除
                                 </a>
                            </td>
                        </tr>
                       <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                     <div class="list-page"> <?php echo $page; ?></div>
                    
                </div>
            </form>
        </div>
    </div>


<script type="text/javascript" src="__PUBADMIN__/js/index.js"></script>

    <!--/main-->
</div>

 
</body>
</html>