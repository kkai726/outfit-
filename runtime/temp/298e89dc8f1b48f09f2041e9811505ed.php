<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"/www/wwwroot/htk.iy3u6.cn/outfit/public/../application/index/view/log/edit.html";i:1573002349;s:65:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/base.html";i:1573002349;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/header.html";i:1573004003;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/footer.html";i:1573002350;}*/ ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Outfit编辑日志</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/img/icon.png">
    <!-- Google font (font-family: 'Dosis', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/plugins.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/icon/iconfont.css">
    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/style.css">
    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/index.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/custom.css">
    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/nstyle.css">
    <script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/icon/iconfont.js"></script>
    <script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/icon-delete/iconfont.js"></script>

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
                    <img src="http://htk.iy3u6.cn/outfit/public/static/user/docs/img/logo/123.png" alt="logo">
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
                        <li><a href="<?php echo url('personal/myself',['user_id'=>$vo['user_id']]); ?>"><?php echo \think\Request::instance()->session('user_name'); ?></a>
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

    

    <div class="breadcrumb-area bg-grey">
        <div class="container">
            <div class="cr-breadcrumb" aling="right">
                <ul>
                    <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                    <li>日志</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Page Conttent -->
    <main class="page-content">

        <!-- Contact Area -->
        <!-- <div class="cr-section contact-area section-padding-lg bg-white"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="google-map" id="google-map"></div> -->
                </div>
            </div>
            <div class="row section-padding-top-lg">
                <div class="col-lg-12">
                    <h4 class="small-title">
                        <span>编辑日志</span>
                    </h4>
                    <form action="" method="POST" id="contact-form" class="karigor-form">
                        <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="karigor-form-inner">
                            <div class="karigor-form-input karigor-form-input-half">
                                <input type="text" name="log_title" placeholder="标题*" value="<?php echo $vo['log_title']; ?>" required>
                            </div>
                            <div class="karigor-form-input">
                                <textarea name="log_desc" cols="30" rows="5" placeholder="正文*"><?php echo $vo['log_desc']; ?></textarea>
                            </div>
                            <div class="karigor-form-input">
                                <button type="submit" class="button">
                                    <span>完成编辑</span>
                                </button>
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!--// Contact Area -->

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

<script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/vendor/jquery-3.3.1.min.js"></script>
<script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/popper.min.js"></script>
<script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/bootstrap.min.js"></script>
<script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/plugins.js"></script>
<script src="http://htk.iy3u6.cn/outfit/public/static/user/docs/js/main.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>


</body>
</html>