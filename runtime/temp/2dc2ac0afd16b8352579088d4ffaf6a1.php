<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"/www/wwwroot/htk.iy3u6.cn/outfit/public/../application/index/view/personal/other.html";i:1573002349;s:65:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/base.html";i:1573002349;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/header.html";i:1573004003;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/footer.html";i:1573002350;}*/ ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Outfit个人</title>
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
        <div class="cr-breadcrumb">
            <div id="user_header" class="clearfix">
                <div id="user_sub">
                    <div class="image">
                        <?php if(is_array($dwb) || $dwb instanceof \think\Collection || $dwb instanceof \think\Paginator): $i = 0; $__LIST__ = $dwb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <p class="img"><img src="http://htk.iy3u6.cn/outfit/public/static/images/<?php echo $vo['user_pic']; ?>" width="148" height="148"></p>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <?php if(empty($follow) != true): ?>
                    <div class="btn_follow">
                        <p class="btn"><a href="<?php echo url('Befollow/delfollow',['user_id'=>$vo['user_id']]); ?>" class="icon_font over"><span class="txt">取消关注</span></a></p>
                    </div>
                    <?php else: ?>
                    <div class="btn_follow">
                        <p class="btn"><a href="<?php echo url('Befollow/dofollow',['user_id'=>$vo['user_id']]); ?>" class="icon_font over"><span class="txt">关注</span></a></p>
                        <!-- 关注 -->
                        <input type="hidden" id="follow_user" value="RTLTZNQHUYVQQNCK">
                        <input type="hidden" id="follow_account" value="RTLTZNQH20190912094508050">
                    </div>
                    <?php endif; ?>
                </div>

                <div id="user_main">
                    <section class="intro">
                        <?php if(is_array($dwb) || $dwb instanceof \think\Collection || $dwb instanceof \think\Paginator): $i = 0; $__LIST__ = $dwb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <h1 class="name"><?php echo $vo['user_name']; ?>的个人主页<span class="user_type_ico big icon_font wearista"></span></h1>
                        <div class="meta clearfix">

                            <ul class="info clearfix">

                                <li>@<?php echo $vo['user_name']; ?></li>

                                <li><?php if($vo['user_gender']==0): ?>男<?php else: ?>女<?php endif; ?></li>

                                <li><?php echo $vo['user_high']; ?></li>

                                <li><?php echo $vo['user_hair']; ?></li>

                                <li><?php echo $vo['user_country']; ?></li>
                            </ul>
                        </div>
                    </section>
                    <section class="profile">
                        <p class="txt" data-moretxt="查看更多個人資料" data-closetxt="關閉"><?php echo $vo['user_desc']; ?></p>
                    </section>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div id="gbl_body" class="clearfix" style="margin-bottom: 5%;">
    <div id="user_menu">
        <nav class="clearfix">
            <div class="main">
                <ul class="clearfix">
                    <li class="current">
                        <a href="<?php echo url('Picture/lst',['user_id'=>$vo['user_id']]); ?>">-<?php echo $count['pic']; ?>-<span>穿搭</span></a></li>
                    <li><a href="<?php echo url('Log/lst',['user_id'=>$vo['user_id']]); ?>">-<?php echo $count['log']; ?>-<span>日志</span></a></li>
                </ul>
            </div>
            <div class="sub">
                <ul class="clearfix">
                    <li><a href="<?php echo url('Follow/lst',['user_id'=>$vo['user_id']]); ?>">-<?php echo $count['follow']; ?>-<span>粉丝</span></a></li>
                    <li><a href="<?php echo url('Concerned/lst',['user_id'=>$vo['user_id']]); ?>">-<?php echo $count['concerned']; ?>-<span>关注</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- 个人简介 -->
</br>


    
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