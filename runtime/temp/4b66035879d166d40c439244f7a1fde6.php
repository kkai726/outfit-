<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/www/wwwroot/htk.iy3u6.cn/outfit/public/../application/index/view/index/edit.html";i:1573002350;}*/ ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="generator" content="Jekyll v3.8.5">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/bootstrap.css" rel="stylesheet">


		<style>

    </style>
		<link href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/signin.css" rel="stylesheet">
	</head>
	<body class="text-center">
		<form class="form-signin" method="POST" action="">
			<img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">修改密码</h1>

			<label  class="sr-only">username</label>
			<input type="text" id="old_password" class="form-control" name="old_password" placeholder="原密码" required autofocus>
			<label  class="sr-only">Password</label>
            <input type="password" id="new_password" class="form-control" name="new_password" placeholder="新密码" required>
            <label  class="sr-only">Password</label>
			<input type="password" id="again_password" class="form-control" name="again_password" placeholder="确认新密码" required>
            <button class="btn btn-lg btn-primary btn-block loginbutton" type="submit">确认修改密码</button>
            <a class="" href="<?php echo url('index/index'); ?>">
                                    <i class=""></i>取消修改</a>
		</form>
	</body>
	<script src="scripts/jquery-3.3.1.min.js"></script>
	
</html>