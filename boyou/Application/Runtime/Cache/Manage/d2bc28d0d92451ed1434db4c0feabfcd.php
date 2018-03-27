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

        <style type="text/css">

    .input2 {
	    font-size: 14px;
	    padding: 10px;
	    border: solid 1px #ddd;

	    display: block;
	    border-radius: 3px;
	    -webkit-appearance: none;
    }

    </style> 
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 文章列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="/seoweb/boyou/manage.php?s=/Manage/Link/add"> 添加友情链接</a> </li>
        <!-- <li>
            <select name="cid" class="input" style="width:200px; line-height:17px;" id="fen">
              <option value="">请选择分类</option>
              <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </li> -->
      </ul>
    </div>

    <script type="text/javascript">
    	$(function(){
    		$('#fen').change(function(){
    			var i=$(this).val();

    			location.href="/seoweb/boyou/manage.php?s=/Manage/Link/select1/id/"+i;
    		})
    	})
    </script>

    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <!-- <th>封面图</th> -->
        <th>标题</th>
        <!-- <th>广告图</th>
        <th>播放广告</th> -->
        <th width="10%">链接</th>
        <th width="310">操作</th>
      </tr>
      <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <td style="text-align:left; padding-left:20px;"><!-- <input type="checkbox" name="id[]" value="" /> -->
           <?php echo ($vo["id"]); ?></td>
          <!-- <td width="10%"><img src="/seoweb/boyou/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" width="70" height="50" /></td> -->
          <td><?php echo ($vo["title"]); ?></td>
          <!-- <td><?php echo ($vo["type"]); ?></td> -->
          <!-- <td>
          <center>
          <select name="cid" class="input2" style="width:100px; line-height:17px;" alias='<?php echo ($vo["id"]); ?>'>
            
              <option value="1" <?php if($vo['ad'] == 1): ?>selected="selected"<?php endif; ?> >是</option>
              <option value="0" <?php if($vo['ad'] == 0): ?>selected="selected"<?php endif; ?> >否</option>

          </select>
          </center>
           </td> -->
          <td><?php echo ($vo["link"]); ?></td>
          <td><div class="button-group"> <a class="button border-main" href="<?php echo U('Link/show',array('id'=>$vo['id']));?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="<?php echo U('Link/del',array('id'=>$vo['id']));?>" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>
  </div>
</form>

<div>
	<?php echo ($page); ?>
</div>

<script type="text/javascript">

$(function(){
	$('.input2').change(function(){
	var k=$(this).val();
	var alias=$(this).attr('alias');
	location.href="/seoweb/boyou/manage.php?s=/Manage/Link/bad/id/"+alias+'/why/'+k;
	})
		
})
    	
</script>


<script type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(){
	var r=confirm("确定删除？")
  if (r==true)
    {
    
    }
  else
    {
    return false;
    }
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

</script>
</body>
</html>