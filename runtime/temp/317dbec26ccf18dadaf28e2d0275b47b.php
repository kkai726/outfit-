<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"/www/wwwroot/htk.iy3u6.cn/outfit/public/../application/index/view/activity/detail.html";i:1573299241;s:65:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/base.html";i:1573002349;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/header.html";i:1573004003;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/footer.html";i:1573002350;}*/ ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Outfit报名</title>
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

    
<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <div class="breadcrumb-area bg-grey">

        <div class="container">
            <div class="cr-breadcrumb">

                <h2><?php echo $vo['activity_name']; ?></h2>
                <ul>
                    <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                    <li><a href="<?php echo url('activity/lst'); ?>">最新活动</a></li>
                    <li><?php echo $vo['activity_name']; ?></li>
                </ul>

            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
    <!-- Page Conttent -->
    <main class="page-content">
        <!-- Blog Area -->
        <div class="cr-section blog-area section-padding-lg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-details">

                            <article class="blog-item sticky">

                                <div class="blog-item-header">

                                    <img src="http://htk.iy3u6.cn/outfit/public/static/images/<?php echo $vo['activity_post']; ?>" alt="blog thumb" style="width:500px;height:500px">

                                </div>
                                <div class="blog-item-footer">
                                    <ul class="blog-item-meta">

                                        <li><i class="fa fa-user-o"></i>By <a href="blog.html"><?php echo $vo['admin_name']; ?></a></li>
                                        <li><i class="fa fa-calendar-o"></i><?php echo $vo['activity_pubtime']; ?></li>

                                        <!-- <li><i class="fa fa-comments-o"></i><a href="#">3 Comments</a></li> -->
                                    </ul>
                                </div>
                                <div class="blog-item-body">
                                    <h3 class="blog-item-title">活动详情</h3>
                                    <p><?php echo $vo['activity_desc']; ?></p>

                                </div>
                            </article>
                            <div class="karigor-form-input">
                                <?php if(empty($enter) != true): ?>
                                <h4 class="small-title">
                                    <span>您已报名该活动！</span>
                                </h4>
                                <a href="<?php echo url('activity/del',['enter_id'=>$enter['enter_id']]); ?>"><button type="submit" class="button">
                                            <span>取消报名</span>
                                </button></a>
                                    </div>
                                </button></a>
                                <?php else: ?>
                                <div class="col-lg-12">
                                    <h4 class="small-title">
                                        <span>活动报名</span>
                                    </h4>
                                    <form action="" method="POST" id="contact-form" class="karigor-form" enctype="multipart/form-data">
                                        <input type="hidden" name="activity_id" value="<?php echo $vo['activity_id']; ?>">
                                        <a>报名人:<span><?php echo \think\Request::instance()->session('user_name'); ?></span></a>
                                        <div class="karigor-form-inner" >

                                            <div class="karigor-form-input karigor-form-input-half">
                                                <input type="text" name="enter_email" placeholder="报名邮箱*" required>
                                            </div>
                                            </div>
                                        <div class="karigor-form-inner" >

                                            <input type="file" accept="image/*" name="enter_pic" id="file" style="width:200px;height:50px;float:left;padding-top:10px;margin-top:10px">
                                             <?php if(\think\Request::instance()->session('user_name') != ''): ?>
                                            <div class="karigor-form-input">
                                                <button type="submit" class="button">
                                                    <span>报名</span>
                                                </button>
                                            </div>
                                            <?php else: ?>
                                                <a href="<?php echo url('login/login'); ?>"><span>登录后可报名</span></a>
                                             <?php endif; ?>
                                        </div>
                                    </form>

                                    <p class="form-message"></p>

                                </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Blog Area -->
    </main>
<?php endforeach; endif; else: echo "" ;endif; ?>


    
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