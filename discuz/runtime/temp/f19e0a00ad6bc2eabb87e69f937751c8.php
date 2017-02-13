<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\web\discuz\public/../application/admin\view\login\login.html";i:1486777777;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="__PUBADMIN__/css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post" id="myform" name="myform" >
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" value=""  size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
 
<link rel="stylesheet" type="text/css" href="__PUBADMIN__/js/dialog/skin/default/layer.css"/>
<script type="text/javascript" src="__PUBADMIN__/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="__PUBADMIN__/js/jquery.form.js"></script>
<script type="text/javascript" src="__PUBADMIN__/js/dialog/layer.js"></script>
<script type="text/javascript" src="__PUBADMIN__/js/dialog.js"></script>
<script type="text/javascript" src="__PUBADMIN__/js/index.js"></script>
</body>
</html>