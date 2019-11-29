<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:68:"F:\wamp\www\outfit\public/../application/index\view\picture\lst.html";i:1573022482;s:51:"F:\wamp\www\outfit\application\index\view\base.html";i:1572566728;s:60:"F:\wamp\www\outfit\application\index\view\common\header.html";i:1573001841;s:64:"F:\wamp\www\outfit\application\index\view\common\pagination.html";i:1572672165;s:60:"F:\wamp\www\outfit\application\index\view\common\footer.html";i:1571194952;}*/ ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Outfit穿搭</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://127.0.0.1/outfit/public/static/user/docs/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="http://127.0.0.1/outfit/public/static/user/docs/img/icon.png">
    <!-- Google font (font-family: 'Dosis', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="http://127.0.0.1/outfit/public/static/user/docs/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/outfit/public/static/user/docs/css/plugins.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="http://127.0.0.1/outfit/public/static/user/docs/css/icon/iconfont.css">
    <link rel="stylesheet" href="http://127.0.0.1/outfit/public/static/user/docs/style.css">
    <link rel="stylesheet" href="http://127.0.0.1/outfit/public/static/user/docs/css/index.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="http://127.0.0.1/outfit/public/static/user/docs/css/custom.css">
    <link rel="stylesheet" href="http://127.0.0.1/outfit/public/static/user/docs/css/nstyle.css">
    <script src="http://127.0.0.1/outfit/public/static/user/docs/js/icon/iconfont.js"></script>
    <script src="http://127.0.0.1/outfit/public/static/user/docs/js/icon-delete/iconfont.js"></script>

</head>
<body>
<!-- Add your site or application content here -->
<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    
<header class="header sticky-header">
    <div class="container">
        <div class="header-inner d-none d-lg-flex">
            <div class="header-logo">
                <a href="<?php echo url('Index/index'); ?>">
                    <img src="http://127.0.0.1/outfit/public/static/user/docs/img/logo/123.png" alt="logo">
                </a>
            </div>
            <div class="header-navigation">
                <button class="header-navigation-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <?php if(\think\Request::instance()->session('user_name') != ''): ?>
                <nav class="main-navigation">
                    <ul>
                        <li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('Log/pub'); ?>">发布日志</a></li>
                        <li><a href="<?php echo url('Activity/lst'); ?>">参加活动</a></li>
                        <li><a href="<?php echo url('Picture/pub'); ?>">发布穿搭</a></li>
                        <li><a href="index.html"><?php echo \think\Request::instance()->session('user_name'); ?></a>
                            <ul>
                                <li><a href="<?php echo url('personal/myself',['user_id'=>$vo['user_id']]); ?>">个人主页</a></li>
                                <li><a href="<?php echo url('index/editmyself',['user_id'=>$vo['user_id']]); ?>">修改信息</a></li>
                                <li><a href="<?php echo url('index/edit',['user_id'=>$vo['user_id']]); ?>">修改密码</a></li>
                                <li><a href="<?php echo url('Index/logout'); ?>">注销</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <?php else: ?>
                <nav class="main-navigation">
                    <ul>
                        <li><a href="<?php echo url('Index/index'); ?>">主页</a></li>
                        <li><a href="<?php echo url('login/login'); ?>">登录</a></li>
                        <li><a href="<?php echo url('register/register'); ?>">注册</a></li>
                    </ul>
                </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

    
<main class="page-content">
    <div class="cr-section blog-area section-padding-lg">
        <div class="container">
            <div class="row justify-content-center">
                <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <article class="blog-item">                        
                        <header class="blog-item-header">
                            <?php if($type[$i-1] == 'jpg'|'png'|'gif'): ?>
                                <img src="http://127.0.0.1/outfit/public/static/images/<?php echo $vo['pic']; ?>"  alt="<?php echo $i; ?>">
                            <?php elseif($type[$i-1] == 'mp4'|'avi'): ?>
                                <video src="http://127.0.0.1/outfit/public/static/images/<?php echo $vo['pic']; ?>" controls="controls" width="330px" height="440.77px"></video>
                            <?php endif; ?>
                                <a href="<?php echo url('picture/detail',['pic_id'=>$vo['pic_id']]); ?>"> 
                                </a>
                        </header>
                        <div class="blog-item-body">
                            <h6 class="blog-item-title"><a href="<?php echo url('Picture/detail',['pic_id'=>$vo['pic_id']]); ?>"><?php echo $vo['pic_desc']; ?></a></h6>
                        </div>
                        <footer class="blog-item-footer">
                            <ul class="blog-item-meta">
                                <li><span class="iconfont icon-yonghu"></span>By <a href="<?php echo url('personal/other',['user_id'=>$vo['user_id']]); ?>"><?php echo $vo['user_name']; ?></a></li>
                                <li><span class="iconfont icon-rili"></span><?php echo $vo['pic_uptime']; ?></li>
                                <li><span class="iconfont icon-liulanliang"></span><?php echo $vo['pic_view']; ?></a></li>
                            </ul>
                        </footer>
                    </article>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="cr-pagination mt-4 text-center">
    <ul>
    </ul>
</div>
        </div>
    </div>
</main>


    
<footer class="footer-area bg-white">
<div class="container">
    <ul class="footer-inner">
        <li>Neusoft Information University,Da Lian, China</li>
        <li>+012 345 6789</li>
        <li>123456@example.com</li>
        <li>Copyright &copy; 版权归小组所有</li>
    </ul>
</div>
</footer>

    <!--// Footer Area -->
</div>
<!--// Wrapper -->
<!-- Js Files -->

<script src="http://127.0.0.1/outfit/public/static/user/docs/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="http://127.0.0.1/outfit/public/static/user/docs/js/vendor/jquery-3.3.1.min.js"></script>
<script src="http://127.0.0.1/outfit/public/static/user/docs/js/popper.min.js"></script>
<script src="http://127.0.0.1/outfit/public/static/user/docs/js/bootstrap.min.js"></script>
<script src="http://127.0.0.1/outfit/public/static/user/docs/js/plugins.js"></script>
<script src="http://127.0.0.1/outfit/public/static/user/docs/js/main.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>


</body>
</html>