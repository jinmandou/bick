<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"F:\web\discuz\public/../application/admin\view\article\edit.html";i:1486904806;s:63:"F:\web\discuz\public/../application/admin\view\public\base.html";i:1486796079;}*/ ?>

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
                <h1 class="topbar-logo none"><a href="<?php echo url('admin/index'); ?>" class="navbar-brand">后台管理</a></h1>
                <ul class="navbar-list clearfix">
                    <li><a class="on" href="<?php echo url('index/index'); ?>">首页</a></li>
                    <li><a href="<?php echo url('index/index/index'); ?>"  target="_blank">网站首页</a></li>
                </ul>
            </div>
            <div class="top-info-wrap">
                <ul class="top-info-list clearfix">
                    <li><a href="#">管理员-<?php echo session('username') ?></a></li>
                    <li><a href="<?php echo url('admin/edit',array('id'=>session('id'))); ?>">修改密码</a></li>
                    <li><a href="<?php echo url('login/logout'); ?>">退出</a></li>
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
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('admin/lst'); ?>"><i class="icon-font">&#xe006;</i>管理员管理</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo url('index/index'); ?>">首页</a><span class="crumb-step">&gt;</span>
                <a class="crumb-name" href="<?php echo url('lst'); ?>" >文章管理</a><span class="crumb-step">&gt;</span><span>修改文章</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $arts['id']; ?>">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th width="10%"><i class="require-red">*</i>文章标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="<?php echo $arts['title']; ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>关键词：</th>
                                <td><input class="common-text" name="keywords" size="50" value="<?php echo $arts['keywords']; ?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>描述：</th>
                                <td><textarea name="desc" class="common-textarea" id="desc" cols="20" style="width: 50%;" rows="5"><?php echo $arts['desc']; ?></textarea></td>
                  
                            </tr>
                            <tr>
                                <th>所属栏目：</th>
                                <td>
                                    <select name="cateid">
                                        <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option <?php if($vo['id'] == $arts['cateid']): ?>selected<?php endif; ?> value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>缩略图：</th>
                                <td><input type="file" name="pic" />
                                <?php if($arts['pic'] == ''): ?>
                                暂无缩略图
                                <?php else: ?>
                                <img src="<?php echo $arts['pic']; ?>" height="50">
                                <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea  name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10">
                                    <?php echo htmlspecialchars_decode($arts['content']); ?>
                                    
                                </textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>

<script type="text/javascript" src="__PUBADMIN__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__PUBADMIN__/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="__PUBADMIN__/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:'100%',initialFrameHeight:400,});
</script>


    <!--/main-->
</div>

 
</body>
</html>