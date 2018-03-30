<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>博友后台管理中心</title>  
    <link rel="stylesheet" href="/Public/css/pintuer.css">
    <link rel="stylesheet" href="/Public/css/admin.css">
    <script src="/Public/js/jquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/Public/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="/manage.php?s=/Manage/index" ><span class="icon-home"></span> 退出</a>
  </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>栏目管理</h2>
  <ul style="display:block">
    <li><a href="/manage.php?s=/Manage/info" target="right"><span class="icon-caret-right"></span>网站信息</a></li>
    <li><a href="/manage.php?s=/Manage/Pass" target="right"><span class="icon-caret-right"></span>账户管理</a></li>
    <li><a href="/manage.php?s=/Manage/Bigad4" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
    <li><a href="/manage.php?s=/Manage/Arclist" target="right"><span class="icon-caret-right"></span>文章管理</a></li>
    <li><a href="/manage.php?s=/Manage/Link" target="right"><span class="icon-caret-right"></span>友情链接</a></li>   
    <!-- <li><a href="/manage.php?s=/Manage/Imglist" target="right"><span class="icon-caret-right"></span>图集管理</a></li>    -->
    <!-- <li><a href="/manage.php?s=/Manage/Paylist" target="right"><span class="icon-caret-right"></span>支付管理</a></li>   
    <li><a href="/manage.php?s=/Manage/Bigad" target="right"><span class="icon-caret-right"></span>图集全屏广告</a></li> 
    <li><a href="/manage.php?s=/Manage/Bigad2" target="right"><span class="icon-caret-right"></span>新闻全屏广告</a></li> 
    <li><a href="/manage.php?s=/Manage/Bigad3" target="right"><span class="icon-caret-right"></span>支付全屏广告</a></li>
    <li><a href="/manage.php?s=/Manage/Join" target="right"><span class="icon-caret-right"></span>合作链接</a></li> -->
  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo U('Info/index');?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <!-- <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li> -->
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="/manage.php?s=/Manage/info" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
</div>
</body>

</html>