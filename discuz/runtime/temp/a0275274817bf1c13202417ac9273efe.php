<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"F:\web\discuz\public/../application/index\view\article_index.html";i:1486987703;s:63:"F:\web\discuz\public/../application/index\view\public_base.html";i:1486989093;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="keywords" content="<?php echo isset($web['keywords']) ? $web['keywords'] :  '劲松电脑通讯'; ?>" />
	<meta name="description" content="<?php echo isset($web['desc']) ? $web['desc'] :  '这里是介绍'; ?> " />
	<title><?php echo isset($web['title']) ? $web['title'] :  '聚宝盆'; ?></title>
	<link rel="stylesheet" rev="stylesheet" href="__PUBINDEX__/style/style.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="/favicon.ico" />
	<script src="__PUBINDEX__/style/common.js" type="text/javascript"></script>
	<script src="__PUBINDEX__/style/c_html_js_add.js" type="text/javascript"></script>
	<script src="__PUBINDEX__/style/custom.js" type="text/javascript"></script>
        
</head>
<body class="multi catalog">
<div id="divAll">
    <div id="divPage">
	<div id="divMiddle">
            
		<div id="divTop">
			<h1 id="BlogTitle"><a href="http://www.youmew.com/"><img src="__PUBINDEX__/images/LOGO.gif" alt="你我网" onMouseover="shake(this,'onmouseout')" /></a></h1>
			
		</div>
		<div id="divNavBar">
                    <ul>
                    <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="
                        <?php if($vo['type'] == 0): ?>
                        <?php echo url('lst/index',array('cateid'=>$vo['id'])); else: ?>
                        <?php echo url('guest/index',array('cateid'=>$vo['id'])); endif; ?>
                        "><?php echo $vo['catename']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
		</div>
            
                
               
	
	<div id="divMain">
        <div class="post single-post cate2 auth1">
                <div class="post-nav">
                <?php if($prev == ''): ?>
                <a class="l" href="javascritp:void(0);">上一篇没有了</a>
                <?php else: ?>
                <a class="l" href="<?php echo url('article/index',array('artid'=>$prev)); ?>">上一篇 »</a>
                <?php endif; if($next == ''): ?>
                <a class="r" href="javascritp:void(0);">下一篇没有了</a>
                <?php else: ?>
                <a class="r" href="<?php echo url('article/index',array('artid'=>$next)); ?>">下一篇 »</a>
                <?php endif; ?>
                </div>
                <h4 class="post-date"><?php echo date("Y-m-d H:i:s",$arts['time']); ?></h4>
                <h2 class="post-title"><?php echo $arts['title']; ?></h2>
                <div class="post-body">
                        <?php echo $arts['content']; ?>
                </div>
                <h5 class="post-tags">Tags: <span class="tags">
                    <?php
                            $arr=explode(',', $arts['keywords']);
                            foreach ($arr as $k => $v) {
                                    echo "<a href='http://127.0.0.1/youme/Public/index.php/index/Tags/index/tags/$v'>$v</a>";
                                    echo ' ';
                            }
                    ?>
                </span></h5>
                <h6 class="post-footer">
                        发布:圈圈 | 分类:<?php echo $arts['catename']; ?> | 评论:5 | 浏览:<span id="spn75"><?php echo $arts['click']; ?></span>
                        <br />
                <!-- AD BEGIN -->
                <br />
                <div style="width:660px;" align="center">

                </div>
                <!-- AD END -->
            </h6>
        </div>
        <ul class="msg mutuality">
                <li class="tbname">相关文章:</li>
                <li class="msgarticle">
                <?php if(is_array($ralateres) || $ralateres instanceof \think\Collection || $ralateres instanceof \think\Paginator): $i = 0; $__LIST__ = $ralateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <p><a  href="<?php echo url('article/index',array('artid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>&nbsp;&nbsp;(<?php echo date("Y-m-d H:i:s",$vo['time']); ?>)</p>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
        </ul>
    </div>

               
		<div id="divSidebar">
                    <dl class="function" id="divSearchPanel">
                    <dt class="function_t">搜索</dt>
                    <dd class="function_c">
                    <div><div style="padding:0.5em 0 0.5em 1em;"><form method="post" action="<?php echo url('search/index'); ?>"><input type="text" name="edtSearch" id="edtSearch" size="12" /> <input type="submit" value="提交" name="btnPost" id="btnPost" /></form></div></div>
                    </dd>
                    </dl><dl class="function" id="divTags">
                    <dt class="function_t">按标签浏览</dt>
                    <dd class="function_c">
                            <ul>
                             <?php if(is_array($tagstab) || $tagstab instanceof \think\Collection || $tagstab instanceof \think\Paginator): $i = 0; $__LIST__ = $tagstab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li class="tag-name tag-name-size-2"><a href="<?php echo url('index/tags/index',array('tags'=>$key)); ?>"><?php echo $key; ?><span class="tag-count"> (<?php echo $vo; ?>)</span></a></li>
                              <?php endforeach; endif; else: echo "" ;endif; ?>   
                            </ul>
                    </dd>
                    </dl><dl class="function" id="divComments">
                    <dt class="function_t">最新留言</dt>
                    <dd class="function_c">
                    <ul>
                        <li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/76.html#cmt1492" title="2016-7-14 20:22:16 post by 卢松松博客">说的很不错呢！</a></li>
                                            </ul>
                    </dd>
                    </dl><dl class="function" id="divLinkage">
                    <dt class="function_t">友情链接</dt>
                    <dd class="function_c">
                    <ul>
                        <li>
                            <?php if(is_array($linktab) || $linktab instanceof \think\Collection || $linktab instanceof \think\Paginator): $i = 0; $__LIST__ = $linktab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo $vo['url']; ?>" target="_blank"><?php echo $vo['title']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                         </li>
                     </ul>
                           
　                  </dd>
                    </dl><dl class="function" id="divMisc">
                    <dt class="function_t">分享到：</dt>
                    <dd class="function_c">
                    <ul><li><img src="__PUBINDEX__/images/weixin.jpg" height="110" width="110" border="0" alt="你我网微信公众平台" title="微信扫一扫，关注圈圈的最新消息。" /></li>
                        <li><!-- Baidu Button BEGIN --><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到百度贴吧" href="#" class="bds_tieba" data-cmd="tieba"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a></div><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["sqq","weixin","qzone","tsina","tieba","douban"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script><!-- Baidu Button END --></li><li><a href="http://www.youmew.com/feed.asp" target="_blank"><img src="__PUBINDEX__/images/rss.png" height="31" width="88" border="0" alt="订阅本站的 RSS 2.0 新闻聚合" /></a></li>
                    </ul>
                    </dd>
                    </dl>

		</div>
                	
               
		<div id="divBottom">
                            <h3 id="BlogCopyRight">备案号</h3>
			<h4 id="BlogPowerBy">版权申明</h4>
		</div>
               
                <div class="clear"></div>
           </div>
       <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<script language="JavaScript1.2">
var typ=["marginTop","marginLeft"],rangeN=10,timeout=0; 
function shake(o,end){ 
var range=Math.floor(Math.random()*rangeN); 
var typN=Math.floor(Math.random()*typ.length); 
o["style"][typ[typN]]=""+range+"px"; 
var shakeTimer=setTimeout(function(){shake(o,end)},timeout); 
o[end]=function(){clearTimeout(shakeTimer)}; 
} 
  </script>

</body>
</html>
