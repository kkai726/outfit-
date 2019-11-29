<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"/www/wwwroot/htk.iy3u6.cn/outfit/public/../application/index/view/superuser/lst.html";i:1573002349;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/header.html";i:1573004003;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/footer.html";i:1573002350;}*/ ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Outfit申请达人</title>
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
<style>

    .container > div {
        margin-bottom:20px;
    }
    .progress {
        height:20px;
        background:#ebebeb;
        border-left:1px solid transparent;
        border-right:1px solid transparent;
        border-radius:10px;
    }
    .progress > span {
        position:relative;
        float:left;
        margin:0 -1px;
        min-width:30px;
        height:18px;
        line-height:16px;
        text-align:right;
        background:#cccccc;
        border:1px solid;
        border-color:#bfbfbf #b3b3b3 #9e9e9e;
        border-radius:10px;
        background-image:-webkit-linear-gradient(top,#f0f0f0 0%,#dbdbdb 70%,#cccccc 100%);
        background-image:-moz-linear-gradient(top,#f0f0f0 0%,#dbdbdb 70%,#cccccc 100%);
        background-image:-o-linear-gradient(top,#f0f0f0 0%,#dbdbdb 70%,#cccccc 100%);
        background-image:linear-gradient(to bottom,#f0f0f0 0%,#dbdbdb 70%,#cccccc 100%);
        -webkit-box-shadow:inset 0 1px rgba(255,255,255,0.3),0 1px 2px rgba(0,0,0,0.2);
        box-shadow:inset 0 1px rgba(255,255,255,0.3),0 1px 2px rgba(0,0,0,0.2);
    }
    .progress > span > span {
        padding:0 8px;
        font-size:11px;
        font-weight:bold;
        color:#404040;
        color:rgba(0,0,0,0.7);
        text-shadow:0 1px rgba(255,255,255,0.4);
    }
    .progress > span:before {
        content:'';
        position:absolute;
        top:0;
        bottom:0;
        left:0;
        right:0;
        z-index:1;
        height:18px;
        background:url("../img/progress.png") 0 0 repeat-x;
        border-radius:10px;
    }
    .progress .green {
        background:#85c440;
        border-color:#78b337 #6ba031 #568128;
        background-image:-webkit-linear-gradient(top,#b7dc8e 0%,#99ce5f 70%,#85c440 100%);
        background-image:-moz-linear-gradient(top,#b7dc8e 0%,#99ce5f 70%,#85c440 100%);
        background-image:-o-linear-gradient(top,#b7dc8e 0%,#99ce5f 70%,#85c440 100%);
        background-image:linear-gradient(to bottom,#b7dc8e 0%,#99ce5f 70%,#85c440 100%);
    }
    .progress .red {
        background:#db3a27;
        border-color:#c73321 #b12d1e #8e2418;
        background-image:-webkit-linear-gradient(top,#ea8a7e 0%,#e15a4a 70%,#db3a27 100%);
        background-image:-moz-linear-gradient(top,#ea8a7e 0%,#e15a4a 70%,#db3a27 100%);
        background-image:-o-linear-gradient(top,#ea8a7e 0%,#e15a4a 70%,#db3a27 100%);
        background-image:linear-gradient(to bottom,#ea8a7e 0%,#e15a4a 70%,#db3a27 100%);
    }
    .progress .orange {
        background:#f2b63c;
        border-color:#f0ad24 #eba310 #c5880d;
        background-image:-webkit-linear-gradient(top,#f8da9c 0%,#f5c462 70%,#f2b63c 100%);
        background-image:-moz-linear-gradient(top,#f8da9c 0%,#f5c462 70%,#f2b63c 100%);
        background-image:-o-linear-gradient(top,#f8da9c 0%,#f5c462 70%,#f2b63c 100%);
        background-image:linear-gradient(to bottom,#f8da9c 0%,#f5c462 70%,#f2b63c 100%);
    }
    .progress .blue {
        background:#5aaadb;
        border-color:#459fd6 #3094d2 #277db2;
        background-image:-webkit-linear-gradient(top,#aed5ed 0%,#7bbbe2 70%,#5aaadb 100%);
        background-image:-moz-linear-gradient(top,#aed5ed 0%,#7bbbe2 70%,#5aaadb 100%);
        background-image:-o-linear-gradient(top,#aed5ed 0%,#7bbbe2 70%,#5aaadb 100%);
        background-image:linear-gradient(to bottom,#aed5ed 0%,#7bbbe2 70%,#5aaadb 100%);
    }

</style>
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">申请达人</a></li>
                    <li><?php echo \think\Request::instance()->session('user_name'); ?></li>
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

                            <div class="blog-item-body">
                                <h3 class="blog-item-title">申请详情</h3>
                                <span style="font-size: 25px;">等级制度：经验在0到100级别定为level 1，以此类推经验每增加100，等级上升，封顶5级。</span>
                                <p>达人规则</p>
                                <p>1.如若等级大于等于level 2，即可获得申请达人资格。</p>
                                <p>2.申请达人成功后，等待人工审核，对当前该账号的言论，日志，穿搭进行审核，审核预计在2—3个工作日给予答复。</p>
                                <p>3.申请达人成功后即可获得达人标识等多项权益，达人等级越高解锁特权越多哦！</p>
                               <p>3.参加活动+20经验，发布穿搭+10经验，发布日志+5经验，发布评论+3经验。</p>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="small-title">
                                    <span>经验详情</span>
                                </h4>
                                    <a>经验:<span><?php echo $vo['user_exp']; ?></span></a>
                                    <div class="karigor-form-inner" >
                                        <section class="container">
                                            <?php if(($vo['user_exp'] < 200 ) AND ($vo['user_exp'] >= 0 )): ?>
                                            <div class="progress">
                                                <span class="red" style="width: 20%;"><span>level 1</span></span>
                                            </div>
                                            <?php endif; if(($vo['user_exp'] < 500 ) AND ($vo['user_exp'] >= 200 )): ?>
                                            <div class="progress">
                                                <span class="blue" style="width: 40%;"><span>level 2</span></span>
                                            </div>
                                            <?php endif; if(($vo['user_exp'] < 800 ) AND ($vo['user_exp'] >= 500 )): ?>
                                            <div class="progress">
                                                <span class="orange" style="width: 60%;"><span>level 3</span></span>
                                            </div>
                                            <?php endif; if(($vo['user_exp'] < 1200 ) AND ($vo['user_exp'] >= 800 )): ?>
                                            <div class="progress">
                                                <span style="width: 80%;"><span>level 4</span></span>
                                            </div>
                                            <?php endif; if($vo['user_exp'] >= 1200): ?>
                                            <div class="progress">
                                                <span class="green" style="width: 100%;"><span>level 5</span></span>
                                            </div>
                                            <?php endif; ?>
                                        </section>
                                    </div>
                                <?php if(\think\Session::get('user_status') == 2): else: ?>
                                    <div class="karigor-form-inner" style="margin: 0 auto;">
                                        <div class="karigor-form-input">
                                            <a class="button" href="<?php echo url('Superuser/setsuper'); ?>" data-content="申请达人">
                                                <span>申请达人</span>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <p class="form-message"></p>
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