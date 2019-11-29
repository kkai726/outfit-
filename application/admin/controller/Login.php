<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;

use app\admin\model\Adminlogin;

class Login extends Controller
{
    public function login()
    {
        if(request()->isPost()){
            $admin=new Adminlogin();
            $data=input('post.');
            $num=$admin->login($data);
            if($num==3){
                $this->success('信息正确，正在为您跳转...','index/index');//返回主页
            }
            else{
                $this->error('管理员账户名或者密码错误');
            }
        }
        return $this->fetch();//返回登录页面
    }
}    




