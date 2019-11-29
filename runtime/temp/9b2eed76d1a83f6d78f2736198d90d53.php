<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"F:\wamp\www\outfit\public/../application/admin\view\classify\lst.html";i:1572580276;s:57:"F:\wamp\www\outfit\application\admin\view\commom\top.html";i:1572580306;s:58:"F:\wamp\www\outfit\application\admin\view\commom\left.html";i:1573176193;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>OutFit - 管理员</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/outfit/public/static/admin/docs/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .pp {
      margin-bottom: 3px;
    }
  </style>
</head>

<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header" style="background-color: black;">
  <a class="app-header__logo" style="background-color: black;" href="<?php echo url('index/index'); ?>">OutFit.</a>
  <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
    aria-label="Hide Sidebar"></a>
  <!-- Navbar Right Menu-->
  <ul class="app-nav" style="background-color: black;">
    <!-- User Menu-->
    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
          class="fa fa-user fa-lg"></i></a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
        <li><a class="dropdown-item" href="<?php echo url('index/edit'); ?>"><i class="fa fa-cog fa-lg"></i>修改密码</a></li>
        <li><a class="dropdown-item" href="<?php echo url('index/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i>退出登录</a></li>
      </ul>
    </li>
  </ul>
</header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar" style="background-color: rgb(59, 59, 59);">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
      src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?php echo \think\Request::instance()->session('admin_name'); ?></p>
      <p class="app-sidebar__user-designation">OutFit.管理员</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item" href="<?php echo url('index/index'); ?>"><i class="app-menu__icon fa fa-dashboard"></i><span
          class="app-menu__label">主页</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
          class="app-menu__icon fa fa-black-tie"></i><span class="app-menu__label">用户穿搭维护</span><i
          class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo url('picture/lst'); ?>"><i class="icon fa fa-circle-o"></i>用户穿搭列表</a></li>

      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
          class="app-menu__icon fa fa-male "></i><span class="app-menu__label">达人用户维护</span><i
          class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo url('superuser/lst'); ?>"><i class="icon fa fa-circle-o"></i>达人用户列表</a></li>

      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
          class="app-menu__icon fa Example of newspaper-o fa-newspaper-o"></i><span
          class="app-menu__label">活动信息维护</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo url('activity/lst'); ?>"><i class="icon fa fa-circle-o"></i>活动列表</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
          class="app-menu__icon fa fa-codiepie"></i><span class="app-menu__label">穿搭分类维护</span><i
          class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?php echo url('classify/lst'); ?>"><i class="icon fa fa-circle-o"></i>分类列表</a></li>

      </ul>
    </li>

    <li><a class="app-menu__item" href="<?php echo url('comment/lst'); ?>"><i class="app-menu__icon fa fa-male"></i><span 
           class="app-menu__label">用户评论维护</span></a></li>
    <li><a class="app-menu__item" href="<?php echo url('user/lst'); ?>"><i class="app-menu__icon fa fa-user-o"></i><span
          class="app-menu__label">用户信息维护</span></a></li>
    <li><a class="app-menu__item" href="<?php echo url('log/lst'); ?>"><i class="app-menu__icon fa fa-book"></i><span
          class="app-menu__label">用户日志维护</span></a></li>
    <li><a class="app-menu__item" href="<?php echo url('getmoney/lst'); ?>"><i class="app-menu__icon fa fa-money"></i><span
          class="app-menu__label">余额提现</span></a></li>




  </ul>
</aside>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> 欢迎OutFit管理员</h1>
        <p>Welcome Super System Administrator</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">分类列表</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="add"><button class="btn btn-warning" type="button"><a href="<?php echo url('classify/add'); ?>">+
              Add</a></button></div>
        <div class="add"><button class="btn btn-warning" type="button"
            style="float: right;margin-right: 800px;margin-top: -38px;"><a
              href="<?php echo url('classify/rebacklst'); ?>">+Reback</a></button></div>
        <div class="tile">
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>编号</th>
                  <th>分类名称</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $vo['classify_tag']; ?></td>
                  <td><a href="<?php echo url('classify/del',['classify_id'=>$vo['classify_id']]); ?>">删除</a>|<a
                      href="<?php echo url('classify/edit',['classify_id'=>$vo['classify_id']]); ?>">编辑</a>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Essential javascripts for application to work-->
  <script src="http://127.0.0.1/outfit/public/static/admin/docs/js/jquery-3.2.1.min.js"></script>
  <script src="http://127.0.0.1/outfit/public/static/admin/docs/js/popper.min.js"></script>
  <script src="http://127.0.0.1/outfit/public/static/admin/docs/js/bootstrap.min.js"></script>
  <script src="http://127.0.0.1/outfit/public/static/admin/docs/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="http://127.0.0.1/outfit/public/static/admin/docs/js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <!-- Data table plugin-->
  <script type="text/javascript" src="http://127.0.0.1/outfit/public/static/admin/docs/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://127.0.0.1/outfit/public/static/admin/docs/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#sampleTable').DataTable();
  </script>
  <!-- Google analytics script-->
  <script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
    }
  </script>
</body>

</html>