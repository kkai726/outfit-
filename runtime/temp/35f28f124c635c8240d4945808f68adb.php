<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"F:\wamp\www\outfit\public/../application/admin\view\login\login.html";i:1572580335;}*/ ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="http://htk.iy3u6.cn/outfit/public/static/admin/docs/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>OutFit - 管理员登录</title>
</head>

<body>
  <section class="material-half-bg">
    <div class="cover" style="background-color:rgba(44, 44, 44, 0.952) ;"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1>OutFit.</h1>
    </div>
    <div class="login-box">
      <form class="login-form" action="" method="post">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>登 录</h3>
        <div class="form-group">
          <label class="control-label">用户账号</label>
          <input class="form-control" type="text" placeholder="账号" name="admin_account" autofocus>
        </div>
        <div class="form-group">
          <label class="control-label">密码</label>
          <input class="form-control" type="password" placeholder="密码" name="admin_password">
        </div>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block" style="background-color: rgb(44, 44, 44);border-color: black;"><i
              class="fa fa-sign-in fa-lg fa-fw"></i>登 录</button>
        </div>
      </form>
      <form class="forget-form" action="index.html">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>忘记密码 ?</h3>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
        </div>
        <div class="form-group mt-3">
          <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to
              Login</a></p>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="http://htk.iy3u6.cn/outfit/public/static/admin/docs/js/jquery-3.2.1.min.js"></script>
  <script src="http://htk.iy3u6.cn/outfit/public/static/admin/docs/js/popper.min.js"></script>
  <script src="http://htk.iy3u6.cn/outfit/public/static/admin/docs/js/bootstrap.min.js"></script>
  <script src="http://htk.iy3u6.cn/outfit/public/static/admin/docs/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="http://htk.iy3u6.cn/outfit/public/static/admin/docs/js/plugins/pace.min.js"></script>
  <script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function () {
      $('.login-box').toggleClass('flipped');
      return false;
    });
  </script>
</body>

</html>