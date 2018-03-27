<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="/seoweb/boyou/Public/css/pintuer.css">
    <link rel="stylesheet" href="/seoweb/boyou/Public/css/admin.css">
    <script src="/seoweb/boyou/Public/js/jquery.js"></script>
    <script src="/seoweb/boyou/Public/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/seoweb/boyou/manage.php?s=/Manage/Info/add">
      <div class="form-group">
        <div class="label">
          <label>网站名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="stitle" value="<?php echo ($l["title"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_key" value="<?php echo ($l["key"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_des" value="<?php echo ($l["des"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>
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