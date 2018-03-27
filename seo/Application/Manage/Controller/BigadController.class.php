<?php
namespace Manage\Controller;
use Think\Controller;
class BigadController extends Controller {
    public function index(){
    	$tab=M('bigad')->where(array('dd'=>1))->select();
    	$this->assign('ad',$tab);
        $this->display();
    }

   //添加广告页
    public function add(){

    	$this->display();
    }

    public function del($id){
        $ad=M("bigad");
        $ad->where("id=$id")->setField('dd',0);
        $this->success("操作成功啦！",U('Bigad/index')); 
    }

    //添加广告方法
    public function ads(){
    	$tab=M('bigad');
    	$title=I('post.title');
    	$type=I('post.type');
    	$link=I('post.link');

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
      $data['type']=$type;
      $data['link']=$link;
      $bool=$tab->add($data); 
      if($bool){
      	$this->success('操作成功',__CONTROLLER__.'/index',1);
      }else{
      	$this->error('操作失败','',1);
      }
    }
   }

   //广告修改页
     public function show($id){
     	$tab=M('bigad');
     	$ad=$tab->where(array('id'=>$id))->find();
     	$this->assign('ad',$ad);
     	//var_dump($ad);
     	$this->display();
     }

   //广告修改方法
      public function change(){
      	$tab=M('bigad');
      	$id=I('post.id');
      	$title=I('post.title');
      	$type=I('post.type');
      	$link=I('post.link');

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
      $data['type']=$type;
      $data['link']=$link;
      $bool=$tab->where(array('id'=>$id))->save($data); 
      if($bool){
      	$this->success('修改成功',__CONTROLLER__.'/index',1);
      }else{
      	$this->error('修改失败','',1);
      }
    }


      }

}