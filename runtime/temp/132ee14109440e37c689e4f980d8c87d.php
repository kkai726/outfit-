<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"F:\wamp\www\outfit\public/../application/index\view\index\index.html";i:1573023004;s:51:"F:\wamp\www\outfit\application\index\view\base.html";i:1573002348;s:60:"F:\wamp\www\outfit\application\index\view\common\header.html";i:1573004002;s:60:"F:\wamp\www\outfit\application\index\view\common\footer.html";i:1573002350;}*/ ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Outfit首页</title>
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

    
		<!-- Hero Area -->
		<div class="hero-area bg-white">
			<div class="container">
				<div class="hero-area-inner">
					<div class="hero-area-text">
						<h1>
							你好， <br>
							这里是OutFit
						</h1>
						<h5>一个可以让你改变自身形象，成为潮流达人，找到最合适的穿搭的网站</h5>
						<!-- <a href="about.html" class="readmore">ABOUT ME</a> -->
					</div>
					<div class="hero-area-image">
						<img src="http://127.0.0.1/outfit/public/static/user/docs/img/slider/slider-image-1.png" alt="man mask">
					</div>
					
				</div>
			</div>
		</div>
		<!--// Hero Area -->

		<!-- Page Conttent -->
<main class="page-content">

	<!-- Portfolios Ara -->
	<div class="cr-section services-area section-padding-bottom-lg bg-white">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="section-title text-center"style="margin-top: 20px;">
						<h2>推荐穿搭</h2>
						<p>为您选出最适合您的穿搭风格</p>
					</div>
				</div>
			</div>
			<div class="row portfolios-wrapper portfolios-zoom-button-holder">
				<?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<div class="col-lg-4 col-md-6 col-12 portfolio-item portfolio-filter-graphic portfolio-filter-design">
					<div class="portfolio">
						
						<div class="portfolio-image">
							<?php if($type[$i-1] == 'jpg'|'png'|'gif'): ?>							
							<img src="http://127.0.0.1/outfit/public/static/images/<?php echo $vo['pic']; ?>" alt="portfolio image" height="500px" width="450px">
							<?php elseif($type[$i-1] == 'mp4'|'avi'): ?>
							<video src="http://127.0.0.1/outfit/public/static/images/<?php echo $vo['pic']; ?>" controls="controls" width="375px" height="491.11px">
							<?php endif; ?>
						</div>
						<?php if($type[$i-1] == 'jpg'|'png'|'gif'): ?>
						<div class="portfolio-content">
							<a href="http://127.0.0.1/outfit/public/static/images/<?php echo $vo['pic']; ?>" class="portfolio-zoom-button"></a>
							<h5><a href="<?php echo url('Picture/detail',['pic_id'=>$vo['pic_id']]); ?>">查看详情</a></h5>
							<!-- <h6><a href="portfolio.html">收藏</a></h6> -->
						</div>
						<?php endif; ?>
						<a href="<?php echo url('Picture/detail',['pic_id'=>$vo['pic_id']]); ?>">
						<footer class="blog-item-footer">
							<ul class="blog-item-meta">
								<li><span class="iconfont icon-rili"></span><?php echo $vo['pic_uptime']; ?></li>
								<li><span class="iconfont icon-yonghu"></span><?php echo $vo['pic_name']; ?></li>
                                <li><span class="iconfont icon-liulanliang"></span><?php echo $vo['pic_view']; ?></li>
							</ul>
						</footer>
					</a>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<!-- <p style="text-align: center"><img style="margin-top: 100px" src="http://127.0.0.1/outfit/public/static/user/docs/photo/6.jpg" width="70px" height="50px"></p> -->
		<p style="text-align: right"></P><div class="icon-refresh"></div></p>
	</div>

	<div class="cr-section services-area section-padding-bottom-lg bg-white">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="section-title text-center">
						<h2>推荐达人</h2>
						<p>为您选出最适合您的穿搭风格和指引者</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php if(is_array($ulist) || $ulist instanceof \think\Collection || $ulist instanceof \think\Paginator): $i = 0; $__LIST__ = $ulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- Single Service -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="service text-center">
						<div  class="pp">
							<a href="<?php echo url('personal/other',['user_id'=>$vo['user_id']]); ?>">
							<img src="http://127.0.0.1/outfit/public/static/images/<?php echo $vo['user_pic']; ?>"  width="300px" height="300px"></a>
						</div>
						<h5><?php echo $vo['user_name']; ?></h5>
						<p>-<?php echo $vo['user_desc']; ?>-</p>
						<div class="aa" style="color:darkseagreen"> <p><a href="<?php echo url('follow/lst',['user_id'=>$vo['user_id']]); ?>">粉丝  <?php echo $count[$i-1]; ?></a> |
							<a href="<?php echo url('picture/lst',['user_id'=>$vo['user_id']]); ?>">穿搭   <?php echo $outfit[$i-1]; ?></a></p></div>
					</div>
				</div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<!-- <p style="text-align: center"><img style="margin-top: 100px" src="http://127.0.0.1/outfit/public/static/user/docs/photo/6.jpg" width="70px" height="50px"></p> -->
		<p style="text-align: right"></P><div class="icon-refresh"></div></p>
	</div>

	<!--// Service Area -->
	<div class="cr-section services-area section-padding-bottom-lg bg-white">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="section-title text-center">
						<h2>最新活动</h2>
						<p>为您带来最棒的资讯与福利！</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php if(is_array($alist) || $alist instanceof \think\Collection || $alist instanceof \think\Paginator): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="service text-center">
						<img src="http://127.0.0.1/outfit/public/static/images/<?php echo $vo['activity_post']; ?>" width="300px" height="300px">
						<h5><?php echo $vo['activity_name']; ?></h5>
						<p>-<?php echo $vo['activity_desc']; ?>-</p>
						<div class="aa">
							<a style="color: #808080" href="<?php echo url('activity/detail',['activity_id'=>$vo['activity_id']]); ?>"> 活动报名</a></div>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<!-- <p style="text-align: center"><img style="margin-top: 100px" src="http://127.0.0.1/outfit/public/static/user/docs/photo/6.jpg" width="70px" height="50px"></p> -->
		<p style="text-align: right"></P><div class="icon-refresh"></div></p>
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