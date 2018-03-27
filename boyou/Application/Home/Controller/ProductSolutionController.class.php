<?php
namespace Home\Controller;
use Think\Controller;
class ProductSolutionController extends Controller {
   public function index(){
    //网站优化
        $website=M('lianxi')->where(array('id'=>2))->find();
        $this->assign('website',$website);

         $links=M('alink')->where(array('dd'=>1))->order('id desc')->select();//友情链接

        $this->assign('links',$links);
        //实例化产品类别表
        $tab=M('bigad2')->where(array('dd'=>1))->order('id asc')->select();
        $this->assign('type',$tab);
        $id=I('get.id');
        $ids=I('get.ids');
        if(empty($ids)){
            $art=M('article')->where(array('aid'=>$id))->order('id desc')->find();
        }else{
            $art=M('article')->where(array('id'=>$id))->order('id desc')->find();
            $id=$art['aid'];
        }  
        $art['content']=htmlspecialchars_decode($art['content']);

        //分页

        $count = M('article')->where(array('dd'=>1))->count();// 查询满足要求的总记录数

        $pagesize =4;//每页显示条目
        $page = floor($count/$pagesize);// 总页数
        if($count/$pagesize !=0){
            $psize=$count-$pagesize*$page;
        }
        $pa= I('get.pa');
        if(empty($pa)){
           $pa=0; 
        }
        if($pa<0){
            $pa=0;
        }
        if($page<$pa+1){
            $pa=$page;
        }
        
        $this->assign('pagesize',$pagesize);
        $this->assign('page',$page);
        $this->assign('pa',$pa);
        // $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        if($pa==$page){
            $articles = M('article')->where(array('dd'=>1))->order('id desc')->limit($pa*$pagesize,$psize)->select();
        }else{
             $articles = M('article')->where(array('dd'=>1))->order('id desc')->limit($pa*$pagesize,$pagesize)->select();
        }
        //var_dump($art);
        $this->assign('articles',$articles);

        $this->assign('art',$art);

        $this->assign('id',$id);
        //输出
        $this->display();
    }

}