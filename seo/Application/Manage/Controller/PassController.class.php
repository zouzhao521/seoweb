<?php
namespace Manage\Controller;
use Think\Controller;
class PassController extends Controller {
    public function index(){
    	//echo md5(admin);
        $this->display();
    }

    public function change(){
        $u=M('user');
        $newpass=md5(I('post.newpass'));
        $data['password']=$newpass;
        $bool=$u->where('id=1')->save($data);
        if($bool){
            $this->success('修改成功','',1);
        }
    }
}