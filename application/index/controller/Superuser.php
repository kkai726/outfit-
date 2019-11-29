<?php
namespace app\index\controller;

use app\clubadmin\controller\Base;

use think\Controller;
use think\Db;
use think\Session;

//user_status状态：
//0  普通用户
//1  封禁，冻结
//2  申请中
//3  成为达人
class Superuser extends Controller
//应该有两个方法，一个是申请
{
    //申请达人页面的信息
    public function lst()
    {
        $user_id=Session::get('user_id');
        $user_info=db('user')->where('user_id',$user_id)->select();
        $this->assign('info',$user_info);
        return $this->fetch();//申请达人的页面路径

    }
    //申请达人功能
    public function setsuper()
    {
        $user_id=Session::get('user_id');
//        dump($user_id);die;
        $user_exp=db('user')->where('user_id',$user_id)->field('user_exp')->find();
//        dump($user_exp);die;
        $user_status=db('user')->where('user_id',$user_id)->field('user_status')->find();
        if($user_exp['user_exp']<100&&$user_status['user_status']==0||$user_status['user_status']==1)
        {
            return $this->error('您的积分不足或者账号异常,不能申请达人！');//跳转到申请达人页面
        }
        else
        {
            $user_status=['user_status'=>2];
            $res=db('user')->where("user_id",$user_id)->update($user_status);
            if($res)
            {
                return $this->success('您已经申请成功！请重新登录..','login/login');//跳转到个人主页
            }
            else{
                return $this->error('申请达人失败!');
            }
        }
    }


}
