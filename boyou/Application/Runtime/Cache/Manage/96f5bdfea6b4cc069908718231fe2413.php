<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
    <link rel="stylesheet" href="/seoweb/boyou/Public/css/pintuer.css">
    <link rel="stylesheet" href="/seoweb/boyou/Public/css/admin.css">
    <script src="/seoweb/boyou/Public/js/jquery.js"></script>
    <script src="/seoweb/boyou/Public/js/pintuer.js"></script>

    <script type="text/javascript" charset="utf-8" src="/seoweb/boyou/Public/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/seoweb/boyou/Public/js/ueditor/ueditor.all.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/seoweb/boyou/Public/js/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/seoweb/boyou/manage.php?s=/Manage/Arclist/article" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" / style="width:100%;">
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>简单描述：</label>
        </div>
        <div class="field">
          <textarea class="input w50" value="" name="des" data-validate="required:请输入描述" ></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>封面图：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
        </div>
      </div>     
      
        <div class="form-group">
          <div class="label">
            <label>文章分类：</label>
          </div>
          <div class="field">
            <select name="type" class="input w50">
              <option value="0">请选择分类</option>
              <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>

      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <script>
              var ue = UE.getEditor('content');
            </script>
            <textarea id='content' name='content' style="width: 800px;height: 300px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>

      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <script src="js/laydate/laydate.js"></script>
          <input type="date" class="laydate-icon input w50" name="datetime" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>链接：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="link" placeholder="选填" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="writer" value=""  />
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