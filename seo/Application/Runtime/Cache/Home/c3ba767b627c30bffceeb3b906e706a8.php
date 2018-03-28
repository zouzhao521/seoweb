<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <title><?php echo ($website["title"]); ?></title>
    <meta content="<?php echo ($website["key"]); ?>" name="keywords" />
    <meta name="description" content="<?php echo ($website["des"]); ?>"/>
    <script type="text/javascript" charset="utf-8" src="/seoweb/seo/Public/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/seoweb/seo/Public/js/ueditor/ueditor.all.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/seoweb/seo/Public/js/ueditor/lang/zh-cn/zh-cn.js"></script>
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/seoweb/seo/Public/style/css/style.css">
    <link rel="stylesheet" href="/seoweb/seo/Public/style/css/index.css">
</head>

<body>
    <div class="header">
        <div class="header-top">
            <a href="index.html" class="logo"><img src="/seoweb/seo/Public/images/logo.png"/></a>
        </div>
        <div class="header-nav">
            <div class="nav g-width">
                <ul class="nav-ul">
                    <li class="nav-li">
                        <a href="/seoweb/seo/index.php?s=/Home/Index">首页</a>
                    </li>
                    <li class="nav-li nav-active">
                        <a href="/seoweb/seo/index.php?s=/Home/ProductSolution">产品解决方案</a>
                    </li>
                    <li class="nav-li">
                        <a href="/seoweb/seo/index.php?s=/Home/ProductLiangdian">产品亮点</a>
                    </li>
                    <li class="nav-li">
                        <a href="/seoweb/seo/index.php?s=/Home/Savety">安全理念</a>
                    </li>
                    <li class="nav-li">
                        <a href="/seoweb/seo/index.php?s=/Home/Service">售后服务</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-main cl">
        <div class="g-width main cl">
            <div class="bg"></div>
            <div class="daohang">
                <i></i>
                <a href="/seoweb/seo/index.php?s=/Home/Index">博友彩票</a>&nbsp;&nbsp;》
                <a href="/seoweb/seo/index.php?s=/Home/ProductSolution" class="active">产品解决方案</a>
            </div>
            <div class="aside">
                <dl>
                    <dt>
                        <i></i>
                        <span>产品解决方案</span>
                    </dt>
                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd>
                        <a href="<?php echo U('ProductSolution/index',array('id'=>$vo['id']));?>" <?php if($vo['id'] == $id): ?>class='active'<?php endif; ?>>
                            <?php echo ($vo["title"]); ?>
                        </a>
                    </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
            </div>
            <div class="product-content g-module">
            <?php if(empty($id)): ?><ul>
                <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <img src="/seoweb/seo/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="">
                        <div class="desc-box">
                            <h5><?php echo ($vo["title"]); ?></h5>
                            <p><?php echo ($vo["des"]); ?></p>
                            <div class="know-more">
                                <a href="<?php echo U('ProductSolution/index',array('id'=>$vo['id'],'ids'=>'1'));?>">了解更多&nbsp;》</a>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                   <!--  <li>
                        <img src="/seoweb/seo/Public/images/icon_03.png" alt="">
                        <div class="desc-box">
                            <h5>移动APP购彩版</h5>
                            <p>测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试</p>
                            <div class="know-more">
                                <a href="javascript:;">了解更多&nbsp;》</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="/seoweb/seo/Public/images/icon_04.png" alt="">
                        <div class="desc-box">
                            <h5>彩票全网解决方案</h5>
                            <p>测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试</p>
                            <div class="know-more">
                                <a href="javascript:;">了解更多&nbsp;》</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="/seoweb/seo/Public/images/icon_05.png" alt="">
                        <div class="desc-box">
                            <h5>彩票源码开源合作</h5>
                            <p>测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试</p>
                            <div class="know-more">
                                <a href="javascript:;">了解更多&nbsp;》</a>
                            </div>
                        </div>
                    </li> -->
                </ul>
            <?php else: ?>
            <?php echo ($art["content"]); endif; ?>
            <?php if(empty($id)): ?><div class="fenye-box">
                    <a href="<?php echo U('ProductSolution/index',array('pa'=>0,'page'=>$pagesize));?>" class="firstpage-btn">首页</a>
                    <a href="<?php echo U('ProductSolution/index',array('pa'=>$pa-1,'page'=>$pagesize));?>" class="prev-btn">上一页</a>
                    <a href="<?php echo U('ProductSolution/index',array('pa'=>$pa+1,'page'=>$pagesize));?>" class="next-btn">下一页</a>
                    <a href="<?php echo U('ProductSolution/index',array('pa'=>$pagesize,'page'=>$pagesize));?>" class="lastpage-btn">尾页</a>        
                </div><?php endif; ?>
            </div>
        </div>
        <div>
        </div>
    </div>
   <div class="footer">
        <div class="footer-main cl">
            <div class="yms">友情链接：</div>
            <ul class="cl">
                <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo ($vo["link"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <p class="copy">
                深圳英迈思文化科技有限公司（虎步控股成员企业）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Copyright  2008 - 2018博友彩票系统（shaove.com.cn）All Rights Reserved
                粤ICP备09063742号 增值电信业务经营许可 电信与信息服务业务经营许可证
            </p >
        </div>
    </div>
</body>

</html>