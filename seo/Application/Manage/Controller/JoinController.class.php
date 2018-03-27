<?php
namespace Manage\Controller;
use Think\Controller;
class JoinController extends Controller {
    public function index(){
    	$tab=M('link');
    	$val=$tab->where(array('id'=>1))->find();
    	$this->assign('val',$val);
    	//var_dump($val);
        $this->display();
    }

    public function add(){
    	$tab=M('link');
    	$link=I('post.link');
    	if(empty($link)){
    		echo "<script>alert('请输入链接地址');history.go(-1);</script>";
    		die;
    	}

    	$data['link']=$link;
    	$bool=$tab->where(array('id'=>1))->save($data);
    	if($bool){
    		$this->success('操作成功',__CONTROLLER__.'/index',1);
    	}else{
    		$this->error('操作失败','',1);
    	}
    }

}