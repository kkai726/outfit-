<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize(){
        if(!session('admin_name')){
            $this->error('请先登录系统！','login/login');//返回登录页面
        }
    }
}