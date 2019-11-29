<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"/www/wwwroot/htk.iy3u6.cn/outfit/public/../application/index/view/index/editmyself.html";i:1573002350;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outfit完善个人信息</title>
    <!-- Bootstrap -->
    <link href="http://htk.iy3u6.cn/outfit/public/static/user/docs/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://htk.iy3u6.cn/outfit/public/static/user/docs/build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://htk.iy3u6.cn/outfit/public/static/user/docs/css/style.css">
</head>

<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <form method=post action="<?php echo url('index/doeditmyself'); ?>" enctype="multipart/form-data">
                <h1>修改个人信息</h1>

                <div>
                    <input type="text" class="form-control" name="user_name" placeholder="姓名" value="<?php echo $vo['user_name']; ?>" required="" />
                </div>
                <div>
                    <input type="radio" name="user_gender" value=0 <?php if(0 == $vo['user_gender']): ?>checked<?php endif; ?>> 男
                    <input type="radio" name="user_gender" value=1 <?php if(1 == $vo['user_gender']): ?>checked<?php endif; ?>> 女
                </div>
                <br>
                <div>
                    <input type="text" class="form-control" name="user_age" placeholder="年龄" value="<?php echo $vo['user_age']; ?>" required="" />
                </div>
                <div>
                    <input type="text" class="form-control" name="user_high" placeholder="身高" value="<?php echo $vo['user_high']; ?>" required="" />
                </div>
                <div>
                    <input type="text" class="form-control" name="user_desc" placeholder="个性签名" value="<?php echo $vo['user_desc']; ?>" required="" />
                </div>
                <div>
                    <span style="margin-left:100px;width:18px;overflow:hidden;">
                   <select name="user_hair" class="form-control" value="<?php echo $vo['user_hair']; ?>" style="width: 200px;height: 32px;margin-top: -20px"
                           onchange="this.parentNode.nextSibling.value=this.value">
                   <option value="<?php echo $vo['user_hair']; ?>"><?php echo $vo['user_hair']; ?></option>
                    <option value="短发">短发</option>
                    <option value="长发">长发</option>
                   </select>
                        </span><input name="user_hair" value="<?php echo $vo['user_hair']; ?>" type="hidden"/>
                    <!--<input type="text" class="form-control" name="user_hair" placeholder="发型" value="<?php echo $vo['user_hair']; ?>" required="" />-->
                </div>
                <div>
                    <span style="margin-left:100px;width:18px;overflow:hidden;">
                    <select name="user_country" class="form-control" value="<?php echo $vo['user_country']; ?>" style="width: 200px;height: 32px;margin-top: -20px"
                            onchange="this.parentNode.nextSibling.value=this.value">
                        <option value="<?php echo $vo['user_country']; ?>"><?php echo $vo['user_country']; ?></option>
                        <option value="中国">中国</option>
                        <option value="日本">日本</option>
                        <option value="美国">美国</option>
                        <option value="英国">英国</option>
                        <option value="韩国">韩国</option>
                        <option value="澳大利亚">澳大利亚</option>
                        <option value="德国">德国</option>
                        <option value="荷兰">荷兰</option>
                        <option value="冰岛">冰岛</option>
                        <option value="俄罗斯">俄罗斯</option>
                        <option value="马来西亚">马来西亚</option>
                    </select></span><input name="user_country" value="<?php echo $vo['user_country']; ?>" type="hidden">
                    <!--<input type="text" class="form-control" name="user_country" placeholder="国籍" value="<?php echo $vo['user_country']; ?>" required="" />-->
                </div>
                <div>
                    <input type="text" class="form-control" name="user_email" placeholder="邮箱" value="<?php echo $vo['user_email']; ?>" required="" />
                </div>
                <div>
                    <!--<input type="hidden" name="MAX_FILE_SIZE" value="2097157" value="<?php echo $u['pic']; ?>">-->
                    <input type="file" name="user_pic" id="pic" value="<?php echo $vo['user_pic']; ?>">
                </div>
                <br>
                <br>
                <div>
                    <button id="send" type="submit" class="btn btn-success">修改</button>
                    <a href="<?php echo url('Index/index'); ?>">
                    &nbsp;<button  type="button" class="btn btn-success">取消</button>
                    </a>
                </div>
                <div class="clearfix"></div>
            </form>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </section>
    </div>
</div>


