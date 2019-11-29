<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"F:\wamp\www\outfit\public/../application/admin\view\index\index.html";i:1572580321;s:57:"F:\wamp\www\outfit\application\admin\view\commom\top.html";i:1572580306;s:58:"F:\wamp\www\outfit\application\admin\view\commom\left.html";i:1573176193;}*/ ?>
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
  <!-- 公共导航栏 -->
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
    <!-- <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> 欢迎outfit管理员</h1>
          <p>Welcome Super System Administrator</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div> -->


    <div class="row" style="background-color: black; margin-top: -1%;">

      <div class="col-md-6">
        <img src="http://127.0.0.1/outfit/public/static/admin/images/ou2.png" style="width: 150%;margin-left: 50%;margin-top: 0%;">
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
  <script type="text/javascript" src="http://127.0.0.1/outfit/public/static/admin/docs/js/plugins/chart.js"></script>
  <script type="text/javascript">
    var data = {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [{
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86]
        }
      ]
    };
    var pdata = [{
        value: 300,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Complete"
      },
      {
        value: 50,
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "In-Progress"
      }
    ]

    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
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