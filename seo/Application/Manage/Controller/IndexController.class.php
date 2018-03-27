<?php

namespace Manage\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//echo md5(admin);
        $this->display();
    }

    public function CheckLogin(){
    	$m=M('user');
    	$name=I('post.name');
    	$pwd=md5(I('post.pwd'));

    	if(empty($name)){
    		//$this->error('请填写用户名','',3);
            echo "<script>alert('请填写用户名');history.go(-1);</script>";
            die;
    	}
    	if(empty($pwd)){
    		//$this->error('请填写密码','',3);
            echo "<script>alert('请填写密码');history.go(-1);</script>";
            die;
    	}
    	$checkname=$m->where('name="'.$name.'" and password="'.$pwd.'"')->find();
    	if(!$checkname){
    		//$this->error('该用户已存在','',3);
            echo "<script>alert('用户名或密码错误');history.go(-1);</script>";
            die;
    	}else{
    		redirect(__MODULE__.'/Welcome/index');
    	}

    }
}