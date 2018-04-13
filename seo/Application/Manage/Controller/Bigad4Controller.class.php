<?php
namespace Manage\Controller;
use Think\Controller;
class Bigad4Controller extends Controller {
    public function index(){
    	$tab=M('bigad2')->where(array('dd'=>1))->select();
    	$this->assign('ad',$tab);
        $this->display();
    }
    public function add()
    {
       $this->display();
    }
    //删除广告方法
    public function del($id){
        $ad=M("bigad2");
        $ad->where("id=$id")->setField('dd',0);
        $this->success("操作成功啦！",U('Bigad4/index')); 
    }

    //添加广告方法
    public function ads(){
    	$tab=M('bigad2');
    	$title=I('post.title');   
      $data['type']=$title;
      $bool=$tab->add($data); 
      if($bool){
      	$this->success('操作成功',__CONTROLLER__.'/index',2);
      }else{
      	$this->error('操作失败','',2);
      }
    }

   //广告修改页
     public function show($id){
     	$tab=M('bigad2');
     	$ad=$tab->where(array('id'=>$id))->find();
     	$this->assign('ad',$ad);
     	//var_dump($ad);
     	$this->display();
     }

   //广告修改方法
      public function change(){
      	$tab=M('bigad2');
      	$id=I('post.id');
      	$title=I('post.title');
        $data['type']=$title;
      $bool=$tab->where(array('id'=>$id))->save($data); 
      if($bool){
      	$this->success('修改成功',__CONTROLLER__.'/index',1);
      }else{
      	$this->error('修改失败','',1);
      }
    // }


      }

}