<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"/www/wwwroot/htk.iy3u6.cn/outfit/public/../application/index/view/picture/detail.html";i:1573019179;s:65:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/base.html";i:1573002349;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/header.html";i:1573004003;s:74:"/www/wwwroot/htk.iy3u6.cn/outfit/application/index/view/common/footer.html";i:1573002350;}*/ ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Outfit穿搭</title>
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
                <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <h2><?php echo $vo['pic_name']; ?></h2>
                <ul>
                    <li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
                    <li>穿搭详情</li>
                </ul>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Page Conttent -->
        <main class="page-content">
        <!-- Portfolio Details Area -->
        <div class="cr-section portfolio-details-area section-padding-lg bg-white">
            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="container">
                <div class="portfolio-details-images">
                    <p style="text-align: center">
                        <?php if($type[$i-1] == 'jpg'|'png'|'gif'): ?>
                                <img src="http://htk.iy3u6.cn/outfit/public/static/images/<?php echo $vo['pic']; ?>"  alt="<?php echo $i; ?>">
                            <?php elseif($type[$i-1] == 'mp4'|'avi'): ?>
                                <video src="http://htk.iy3u6.cn/outfit/public/static/images/<?php echo $vo['pic']; ?>" controls="controls" width="330px" height="468.77px"></video>
                            <?php endif; ?>
                        </p>
                </div>
                <div class="row section-padding-top-sm">
                    <div class="col-lg-4">
                        <div class="portfolio-details-meta">
                            <ul>
                                <li><span class="iconfont icon-yonghu"></span><span>发布人:</span><?php echo $vo['user_name']; ?></li>
                                <li><span class="iconfont icon-rili"></span><span>发布时间:</span><?php echo $vo['pic_uptime']; ?></li>
                                <li><span class="iconfont icon-liulanliang"></span><span>浏览量:</span><?php echo $vo['pic_view']; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="portfolio-details-info">
                            <h3 class="small-title-fullwidth"><span>穿搭信息</span></h3>
                            <h5 class="portfolio-title">穿搭名:<?php echo $vo['pic_name']; ?></h5>
                            <p><?php echo $vo['pic_desc']; ?></p>
                        </div>

                                    <div class="blog-details-bottom">
                                        <div class="blog-details-tags">
                                            <h6>分类: </h6>
                                            <ul>
                                                <li><?php echo $vo['classify_tag']; ?></li>
                                            </ul>
                                            </div>
                                        <div class="blog-details-share">
                                            <h6>操作: </h6>
                                            <ul>
                                                <?php if(empty($like) != true): ?>
                                                <li><a href="<?php echo url('like/cancellike',['like_id'=>$like['like_id'],'pic_id'=>$vo['pic_id']]); ?>"><span class="iconfont icon-like-fill"></span></a></li>
                                                <?php else: ?>
                                                <li><a href="<?php echo url('like/getlike',['pic_id'=>$vo['pic_id']]); ?>"><span class="iconfont icon-like"></span></a></li>
                                                <?php endif; if(empty($collect) != true): ?>
                                                <li><a href="<?php echo url('collect/cancelcollect',['collect_id'=>$collect['collect_id'],'pic_id'=>$vo['pic_id']]); ?>"><span class="iconfont icon-shoucang"></span></a></li>
                                                <?php else: ?>
                                                <li><a href="<?php echo url('collect/getcollect',['pic_id'=>$vo['pic_id']]); ?>"><span class="iconfont icon-shoucang1"></span></a></li>
                                                <?php endif; if(\think\Request::instance()->session('user_id')==$vo['user_id']): ?>
                                                <li><a href="<?php echo url('picture/del',['pic_id'=>$vo['pic_id']]); ?>"><span class="iconfont icon-shanchu"></span></a></li>
                                                <?php else: endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                     </div>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </main>

<div class="cr-section blog-area section-padding-lg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-details">
                    <div class="commentlist section-padding-top-sm">
                        <h6 class="small-title"><?php echo $com_count; ?> 评论</h6>
                        <?php if(is_array($com) || $com instanceof \think\Collection || $com instanceof \think\Paginator): $i = 0; $__LIST__ = $com;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="single-comment">
                            <div class="single-comment-thumb">
                                <img src="http://htk.iy3u6.cn/outfit/public/static/images/<?php echo $vo['user_pic']; ?>" alt="hastech logo">
                            </div>
                            <div class="single-comment-content">
                                <div class="single-comment-content-top">
                                    <h6><a href="blog-right-sidebar.html"><?php echo $vo['user_name']; ?></a> – <?php echo $vo['comment_time']; ?></h6>
                                </div>
                                <p><?php echo $vo['comment_desc']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="blog-details-commentbox section-padding-top-sm">
                        <h6 class="small-title">请发布您的评论</h6>
                        <form action="<?php echo url('comment/add',['pic_id'=>$vo['pic_id']]); ?>" class="karigor-form">
                            <div class="karigor-form-inner">
                                <div class="karigor-form-input">
                                    <textarea id="new-review-textbox" name="comment_desc" cols="30" rows="5" placeholder="评论"></textarea>
                                </div>
                                <?php if(\think\Request::instance()->session('user_name') != ''): ?>
                                <div class="karigor-form-input">
                                    <button type="submit" class="button">
                                        <span>评论</span>
                                    </button>
                                </div>                                
                                <?php else: ?>
                                <a href="<?php echo url('login/login'); ?>"><span>登录后可评论</span></a>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    
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