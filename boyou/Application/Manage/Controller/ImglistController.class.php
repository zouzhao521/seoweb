<?php
namespace Manage\Controller;
use Think\Controller;
class ImglistController extends Controller {
    public function index(){

      //实例化产品类别表
      $tab=M('bigad')->where(array('dd'=>1))->select();
      $this->assign('type',$tab);

      //分页
        $count      = M('imglist')->where(array('dd'=>1))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性


    	//实例化图集基础信息表
    	$imglist=M('imglist')->where(array('dd'=>1))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        //引入广告类别表
    	foreach ($imglist as $k => $v) {
    	 $tab=M('bigad')->where(array('id'=>$v['aid']))->find();
    	 $imglist[$k]['type']=$tab['type'];
    	}

    	$this->assign('list',$imglist);

    	$this->assign('page',$show);// 赋值分页输出
    	
        $this->display();
    }

    //图集基本信息添加页
    public function add(){
    	//实例化产品类别表
    	$tab=M('bigad')->where(array('dd'=>1))->select();
    	$this->assign('type',$tab);
    	//var_dump($tab);
    	$this->display();
    }

    //删除图集方法
    public function del($id){
    	$imglist=M("imglist");
        $imglist->where("id=$id")->setField('dd',0);
        $this->success("操作成功啦！",U('Imglist/index')); 
    }

    //图集基本信息添加方法
    public function image(){
    	//图集基本信息表
        $tab=M('imglist');

    	//获取首屏广告图id
        $aid=I('post.type');
        //获取图集基础信息
        $btitle=I('post.title');
        $time=I('post.time');
        $writer=I('post.writer');

          //图片上传
      $photo=isset($_FILES['img'])?$_FILES['img']:'';
      $upload = new \Think\Upload();// 实例化上传类    
      $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      $info   =   $upload->uploadOne($photo);    if(!$info) {// 上传错误提示错误信息        
      $this->error($upload->getError());}else{// 上传成功 获取上传文件信息     
      $data['btitle']=$btitle;
      $data['img']=$info['savepath'].$info['savename'];
      $data['time']=$time;
      $data['aid']=$aid;
      $data['writer']=$writer;
      $bool=$tab->add($data); 
      if($bool){
      	$this->success('操作成功',__CONTROLLER__.'/index',1);
      }else{
      	$this->error('操作失败','',1);
      }
    }

    }

    //修改图集基本信息的页面
    public function show($id){
    	//实例化产品类别表
    	$tab=M('bigad')->where(array('dd'=>1))->select();
    	$this->assign('type',$tab);
    	//实例化图集基本信息表
    	$img=M('imglist')->where(array('id'=>$id))->find();
    	$this->assign('img',$img);
    	//var_dump($img);
    	$this->display();
    }

    //修改图集基本信息的方法
    public function change(){
        //图集基本信息表
        

    	//获取首屏广告图id
        $aid=I('post.type');
        //获取图集基础信息
        $btitle=I('post.title');
        $time=I('post.time');
        $writer=I('post.writer');
        $id=I('post.id');

        $tab=M('imglist')->where(array('id'=>$id))->find();
        $tupian=$tab['img'];

          //图片上传
     // $photo=isset($_FILES['img'])?$_FILES['img']:'';
      $upload = new \Think\Upload();// 实例化上传类    
      $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      $info   =   $upload->uploadOne($_FILES['img']); 

      $pic.=$info['savepath'].$info['savename'];
       if(empty($pic)){     
         $path=$tupian;
       }else{
         $path=$pic;
       }     

      $data['btitle']=$btitle;
      
      $data['time']=$time;
      $data['aid']=$aid;
      $data['writer']=$writer;
      $data['img']=$path;
      $bool=M('imglist')->where(array('id'=>$id))->save($data); 
      if($bool){
      	$this->success('修改成功',__CONTROLLER__.'/index',1);
      }else{
      	$this->success('修改成功',__CONTROLLER__.'/index',1);
      }
    }

    //图集页产品列表
    public function imgs(){
    	$id=$_GET['id'];
    	//var_dump($id);
    	//获取图集id，传到前台
    	$tid=$id;
    	$this->assign('tid',$tid);
    	//产品导出
    	$tab=M('images')->where(array('dd'=>1,'tid'=>$id))->select();
    	$this->assign('img',$tab);
    	//广告导出
    	$inner=M('inner_ad')->where(array('dd'=>1,'tid'=>$id))->select();
    	$this->assign('inner',$inner);

    	$this->display();
    }

    //添加图集产品页
    public function adds($tid){
    //var_dump($tid);
    $this->assign('tid',$tid);
    $this->display();
   }

   //添加产品方法
   public function addimg(){
     $tid=I('post.tid');
     $title=I('post.title');
     $price=I('post.price');
     $desc=I('post.desc');
     $link=I('post.link');

     $tab=M('images');
     
         //图片上传
      $photo=isset($_FILES['img'])?$_FILES['img']:'';
      $upload = new \Think\Upload();// 实例化上传类    
      $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      $info   =   $upload->uploadOne($photo);    if(!$info) {// 上传错误提示错误信息        
      $this->error($upload->getError());}else{// 上传成功 获取上传文件信息     
      $data['title']=$title;
      $data['img']=$info['savepath'].$info['savename'];
      $data['price']=$price;
      $data['tid']=$tid;
      $data['link']=$link;
      $data['desc']=$desc;
      $bool=$tab->add($data); 
      if($bool){
      	$this->success('添加成功',U('Imglist/imgs',array('id'=>$tid)),1);
      }else{
      	$this->error('操作失败','',1);
      }
    }
   }

   //添加内部广告页
   public function addinner($tid){
   	//获取图集id
   	var_dump($tid);
   	$this->assign('tid',$tid);
   	$this->display();
   }

   //添加内部广告方法
   public function addads(){
   	 $tid=I('post.tid');
     $desc=I('post.desc');
     $link=I('post.link');

     $tab=M('inner_ad');
     
         //图片上传
      $photo=isset($_FILES['img'])?$_FILES['img']:'';
      $upload = new \Think\Upload();// 实例化上传类    
      $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      $info   =   $upload->uploadOne($photo);    if(!$info) {// 上传错误提示错误信息        
      $this->error($upload->getError());}else{// 上传成功 获取上传文件信息     
      $data['img']=$info['savepath'].$info['savename'];
      $data['tid']=$tid;
      $data['link']=$link;
      $data['desc']=$desc;
      $bool=$tab->add($data); 
      if($bool){
      	$this->success('添加成功',U('Imglist/imgs',array('id'=>$tid)),1);
      }else{
      	$this->error('操作失败','',1);
      }
    }
   }

   //删除产品方法
   public function deladds($id){
     $imglist=M("images");
     $imglist->where("id=$id")->setField('dd',0);
     $td=$imglist->where("id=$id")->find();
     $tid=$td['tid'];

     $this->success("删除成功！",U('Imglist/imgs',array('id'=>$tid))); 
   }

   //删除广告方法
   public function delinner($id){
     $imglist=M("inner_ad");
     $imglist->where("id=$id")->setField('dd',0);

     $td=$imglist->where("id=$id")->find();
     $tid=$td['tid'];

     $this->success("删除成功！",U('Imglist/imgs',array('id'=>$tid))); 
   }

   //产品修改页
   public function show1($id){
   	$tab=M('images')->where(array('id'=>$id))->find();
   	$this->assign('pro',$tab);
   	$this->assign('id',$id);
   	$this->display();
   }

   //产品修改方法
   public function change1(){
   	 $id=I('post.id');
   	 $title=I('post.title');
     $price=I('post.price');
     $desc=I('post.desc');
     $link=I('post.link');
     $tid=I('post.tid');

     $tab=M('images')->where(array('id'=>$id))->find();
      $tupian=$tab['img'];


     
         //图片上传
     // $photo=isset($_FILES['img'])?$_FILES['img']:'';
      $upload = new \Think\Upload();// 实例化上传类    
      $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      $info   =   $upload->uploadOne($_FILES['img']); 
      $pic.=$info['savepath'].$info['savename'];

        if(empty($pic)){     
         $path=$tupian;
       }else{
         $path=$pic;
       }

      $data['title']=$title;
      $data['img']=$path;
      $data['price']=$price;
      $data['link']=$link;
      $data['desc']=$desc;
      $bool=M('images')->where(array('id'=>$id))->save($data); 
      if($bool){
      	$this->success('修改成功',U('Imglist/imgs',array('id'=>$tid)),1);
      }else{
      	//$this->error('操作失败','',2);
        $this->success('修改成功',U('Imglist/imgs',array('id'=>$tid)),1);
      }
   }

   //广告修改页
   public function show2($id){
   	$tab=M('inner_ad')->where(array('id'=>$id))->find();
   	$this->assign('ad',$tab);
   	$this->assign('id',$id);

   	$this->display();
   }

   //广告修改方法
   public function change2($id){
   	 $desc=I('post.desc');
     $link=I('post.link');
     $tid=I('post.tid');
     $tab=M('inner_ad')->where(array('id'=>$id))->find();
      $tupian=$tab['img'];
     
     
         //图片上传
     // $photo=isset($_FILES['img'])?$_FILES['img']:'';
      $upload = new \Think\Upload();// 实例化上传类    
      $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      $info   =   $upload->uploadOne($_FILES['img']);

      $pic.=$info['savepath'].$info['savename'];

      if(empty($pic)){     
       $path=$tupian;
     }else{
       $path=$pic;
     }

      $data['link']=$link;
      $data['desc']=$desc;
      $data['img']=$path;
      $bool=M('inner_ad')->where(array('id'=>$id))->save($data); 
      if($bool){
      	$this->success('修改成功',U('Imglist/imgs',array('id'=>$tid)),1);
      }else{
      	$this->success('修改成功',U('Imglist/imgs',array('id'=>$tid)),1);
      }
   }


   //分类筛选
   public function select1(){
    $aid=I('get.id');

    //实例化产品类别表
      $tab=M('bigad')->where(array('dd'=>1))->select();
      $this->assign('type',$tab);

    //分页
        $count      = M('imglist')->where(array('dd'=>1,'aid'=>$aid))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性


      //实例化图集基础信息表
      $imglist=M('imglist')->where(array('dd'=>1,'aid'=>$aid))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        //引入广告类别表
      foreach ($imglist as $k => $v) {
       $tab=M('bigad')->where(array('id'=>$v['aid']))->find();
       $imglist[$k]['type']=$tab['type'];
      }

      $this->assign('list',$imglist);

      $this->assign('page',$show);// 赋值分页输出
      
        $this->display();
   }

      public function select2(){
    $aid=I('get.id');

    //实例化产品类别表
      $tab=M('bigad')->where(array('dd'=>1))->select();
      $this->assign('type',$tab);

    //分页
        $count      = M('imglist')->where(array('dd'=>1,'aid'=>$aid))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性


      //实例化图集基础信息表
      $imglist=M('imglist')->where(array('dd'=>1,'aid'=>$aid))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        //引入广告类别表
      foreach ($imglist as $k => $v) {
       $tab=M('bigad')->where(array('id'=>$v['aid']))->find();
       $imglist[$k]['type']=$tab['type'];
      }

      $this->assign('list',$imglist);

      $this->assign('page',$show);// 赋值分页输出
      
        $this->display();
   }

   public function bad(){
    $id=$_GET['id'];


    $bool=M('imglist')->where(array('id'=>$id))->setField('ad',$_GET['why']);

    if($bool!==false){
      echo "<script>alert('修改成功');history.go(-1);</script>";
    }else{
      echo "<script>alert('修改失败');history.go(-1);</script>";
    }
    
   }

}