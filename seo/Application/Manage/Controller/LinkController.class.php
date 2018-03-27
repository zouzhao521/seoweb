<?php

namespace Manage\Controller;

use Think\Controller;

class LinkController extends Controller {

    public function index(){
      $tab=M('alink')->where(array('dd'=>1))->order('id desc')->select();
           //引入广告类别表
      
      foreach ($tab as $k => $v) {
       $big=M('bigad4')->where(array('id'=>$v['aid']))->find();
       $tab[$k]['type']=$big['type'];
      }

      $this->assign('link',$tab);

      $ad=M('bigad4')->where(array('dd'=>1))->select();
      $this->assign('type',$ad);

      $this->display();

    }

    //图集基本信息添加页
    public function add(){
      //实例化产品类别表
      $tab=M('bigad4')->where(array('dd'=>1))->select();
      $this->assign('type',$tab);
      //var_dump($tab);
      $this->display();
    }

    public function go(){
      $title=I('post.title');
      $link=I('post.link');
      $aid=I('post.type');

      // //封面图上传
      // $img=isset($_FILES['img'])?$_FILES['img']:'';
      // $upload = new \Think\Upload();// 实例化上传类    
      // $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      // $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      // $info   =   $upload->uploadOne($img);
      // $data['img']=$info['savepath'].$info['savename'];
      
      // //广告图片上传
      // $adimg=isset($_FILES['adimg'])?$_FILES['adimg']:'';
      // $upload = new \Think\Upload();// 实例化上传类    
      // $upload->maxSize   = 10*1024*1024 ;// 设置附件上传大小    
      // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      // $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传目录    // 上传单个文件     
      // $info2   =   $upload->uploadOne($adimg); 
      // $data['adimg']=$info2['savepath'].$info2['savename'];

      $data['title']=$title;
      $data['link']=$link;
      $data['aid']=$aid;

      $bool=M('alink')->add($data);

      if($bool){
        $this->success('操作成功',__CONTROLLER__.'/index',2);
      }else{
        $this->error('操作失败','',2);
      }
      

    }

    public function del($id){

            $art=M("alink");

            $art->where("id=$id")->setField('dd',0);

            $this->success("操作成功啦！",U('Link/index'));    

    }


    public function bad(){
    $id=$_GET['id'];


    $bool=M('alink')->where(array('id'=>$id))->setField('ad',$_GET['why']);

    if($bool!==false){
      echo "<script>alert('修改成功');history.go(-1);</script>";
    }else{
      echo "<script>alert('修改失败');history.go(-1);</script>";
    }
    
   }

    public function show($id){
      $ad=M('bigad4')->where(array('dd'=>1))->select();
        $this->assign('type',$ad);
      $tab=M('alink')->where(array('id'=>$id))->find();
      $this->assign('li',$tab);
      $this->display();

    }

    public function change(){
      $id=I('post.id');
      $title=I('post.title');
      $link=I('post.link');
      $aid=I('post.type');
     
     $data['title']=$title;
     $data['link']=$link;
     $data['aid']=$aid;

     $bool=M('alink')->where(array('id'=>$id))->save($data); 

     if($bool){

        $this->success('修改成功',__CONTROLLER__.'/index',1);

      }else{

        $this->success('修改失败',__CONTROLLER__.'/index',1);

      }


    }

}