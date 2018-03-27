<?php
namespace Manage\Controller;
use Think\Controller;
class InfoController extends Controller {
    public function index(){
    	$L=M('lianxi')->where("id=2")->find();
        $this->assign('l',$L);
        $this->display();
    }

    public function add(){
    	$L=M('lianxi');
    	$title=I('post.stitle');
    	$des=I('post.s_des');
    	$key=I('post.s_key');

    	$data['title']=$title;
    	$data['des']=$des;
    	$data['key']=$key;

    	$bool=$L->where("id=2")->save($data);
    	if($bool){
    		$this->success('修改成功','',1);
    	}else{
    		$this->error('修改失败','',1);
    	}
    }
}