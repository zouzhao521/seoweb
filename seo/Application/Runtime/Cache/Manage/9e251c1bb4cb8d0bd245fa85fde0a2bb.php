<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh-cn">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<meta name="renderer" content="webkit">

<title></title>

    <link rel="stylesheet" href="/boyou/Public/css/pintuer.css">

    <link rel="stylesheet" href="/boyou/Public/css/admin.css">

    <script src="/boyou/Public/js/jquery.js"></script>

    <script src="/boyou/Public/js/pintuer.js"></script>



    <script type="text/javascript" charset="utf-8" src="/boyou/Public/js/ueditor/ueditor.config.js"></script>

    <script type="text/javascript" charset="utf-8" src="/boyou/Public/js/ueditor/ueditor.all.js"> </script>

    <script type="text/javascript" charset="utf-8" src="/boyou/Public/js/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>

<body>

<div class="panel admin-panel">

  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>

  <div class="body-content">

    <form method="post" class="form-x" action="/boyou/manage.php?s=/Manage/Bigad4/ads" enctype="multipart/form-data">  

      <div class="form-group">

        <div class="label">

          <label>分类标题：</label>

        </div>

        <div class="field">

          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />

          <div class="tips"></div>

        </div>

      </div>

      <!-- <div class="form-group">

        <div class="label">

          <label>广告图：</label>

        </div>

        <div class="field">

          <input type="file" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />

        </div> -->

      <!-- </div>  --> 



      <!-- <div class="form-group">

        <div class="label">

          <label>广告类别：</label>

        </div>

        <div class="field">

          <input type="text" class="input w50" value="" name="type" data-validate="required:请输入类别" />

          <div class="tips"></div>

        </div>

      </div>   



      <div class="form-group">

        <div class="label">

          <label>广告链接：</label>

        </div>

        <div class="field">

          <input type="text" class="input w50" value="" name="link"/>

          <div class="tips"></div>

        </div>

      </div>  

      
 -->


     

      <div class="clear"></div>



<!--       <div class="form-group">

        <div class="label">

          <label>发布时间：</label>

        </div>

        <div class="field"> 

          <script src="js/laydate/laydate.js"></script>

          <input type="date" class="laydate-icon input w50" name="datetime" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />

          <div class="tips"></div>

        </div>

      </div> -->



<!--       <div class="form-group">

        <div class="label">

          <label>链接：</label>

        </div>

        <div class="field">

          <input type="text" class="input w50" value="" name="link" placeholder="选填" />

          <div class="tips"></div>

        </div>

      </div> -->



<!--       <div class="form-group">

        <div class="label">

          <label>作者：</label>

        </div>

        <div class="field">

          <input type="text" class="input w50" name="writer" value=""  />

          <div class="tips"></div>

        </div>

      </div> -->

      <div class="form-group">

        <div class="label">

          <label></label>

        </div>

        <div class="field">

          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>

        </div>

      </div>

    </form>

  </div>

</div>



</body></html>