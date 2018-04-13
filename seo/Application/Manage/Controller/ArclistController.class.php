<?php

namespace Manage\Controller;

use Think\Controller;

class ArclistController extends Controller {

    public function index(){


      //实例化产品类别表
      $tab=M('bigad2')->where(array('dd'=>1))->select();
      $this->assign('type',$tab);




    	//分页
      $id=I("get.id");
      if($id){
        $count      = M('article')->where(array('dd'=>1,'aid'=>$id))->count();// 查询满足要求的总记录数
      }else{
        $count      = M('article')->where(array('dd'=>1))->count();// 查询满足要求的总记录数
      }

        $Page       = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性

        if($id){
          $list = M('article')->where(array('dd'=>1,'aid'=>$id,))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }else{
          $list = M('article')->where(array('dd'=>1))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }

          //引入广告类别表
      foreach ($list as $k => $v) {
       $tab=M('bigad2')->where(array('id'=>$v['aid']))->find();
       $list[$k]['type']=$tab['type'];
      }



        $this->assign('list',$list);// 赋值数据集

        $this->assign('arclist',$list);

        $this->assign('page',$show);// 赋值分页输出




        

        //输出

        $this->display();

    }



        //图集基本信息添加页
    public function add(){
      //实例化产品类别表
      $tab=M('bigad2')->where(array('dd'=>1))->select();
      $this->assign('type',$tab);
      //var_dump($tab);
      $this->display();
    }



    //添加文章

    public function article(){

    	$art=M('article');

    	$title=I('post.title');

    	$des=I('post.des');

      $aid=I('post.type');

    	$content=I('post.content');

    	$time=I('post.datetime');

    	$link=I('post.link');

    	$writer=I('post.writer');



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

      $data['time']=$time;

      $data['content']=$content;

      $data['des']=$des;

      $data['link']=$link;

      $data['writer']=$writer;

      $data['aid']=$aid;

      $bool=$art->add($data); 

      if($bool){

      	$this->success('操作成功',__CONTROLLER__.'/index',1);

      }else{

      	$this->error('操作失败','',1);

      }

    }



    }



    //文章修改页

    public function show(){
        //实例化产品类别表
        $tab=M('bigad2')->where(array('dd'=>1))->select();
        $this->assign('type',$tab);

        $id=I('get.id');

        $art=M('article')->where(array('id'=>$id))->find();
        //引入广告类别表
       $tab=M('bigad2')->where(array('id'=>$art['aid']))->find();
       $art['type']=$tab['type'];

        //var_dump($art);

        $this->assign('art',$art);

        $this->assign('id',$id);

    	$this->display();

    }



      public function del($id){

            $art=M("article");

            $art->where("id=$id")->delete();

            $this->success("操作成功啦！",U('Arclist/index'));    

        }



    //修改文章方法

    public function change(){

    	$id=I('post.id');

    	//$art=M('article');

    	$title=I('post.title');

    	$aid=I('post.type');

      $des=I('post.des');

    	$content=I('post.content');

    	$time=I('post.datetime');

    	$link=I('post.link');

    	$writer=I('post.writer');

      $content=stripslashes($content); 

      $tab=M('article')->where(array('id'=>$id))->find();

      $tupian=$tab['img'];







      //图片上传

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

      $data['time']=$time;

      $data['content']=$content;

      $data['type']=$type;

      $data['link']=$link;

      $data['writer']=$writer;

      $data['img']=$path;

      $data['aid']=$aid;
      $data['des']=$des;

      //var_dump($data['img']);die;

      $bool=M('article')->where(array('id'=>$id))->save($data); 

      if($bool){

      	$this->success('修改成功',__CONTROLLER__.'/index',1);

      }else{

      	$this->success('修改成功',__CONTROLLER__.'/index',1);

      }
   }

    public function bad(){
    $id=$_GET['id'];


    $bool=M('article')->where(array('id'=>$id))->setField('ad',$_GET['why']);

    if($bool!==false){
      echo "<script>alert('修改成功');history.go(-1);</script>";
    }else{
      echo "<script>alert('修改失败');history.go(-1);</script>";
    }
    
   }



       








}