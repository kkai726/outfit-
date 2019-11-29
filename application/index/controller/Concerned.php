<?php
namespace app\index\controller;

use app\clubadmin\controller\Base;

use think\Controller;
use think\Session;

class Concerned extends Controller
//粉丝列表，粉丝详情。
//p是被关注者，a是关注者
//a是本人，p是粉丝
{
    public function lst(){
            $user_id=input('user_id');
            $info=db('follow')->alias('f')->join("user u","f.puser_id=u.user_id")->where('f.auser_id',$user_id)->select();
            if($info)
            {
                $this->assign('info',$info);
            }
            else
            {
                $this->error('该用户尚未关注');
            }
            return $this->fetch();
        }

    public function details()
    {
        // $user_id=session('user_id');
        // $follow_p=db("follow")->alias('f')->where('f.auser_id',$user_id)->field('puser_id')->select();
        
        // // return json($details);
        // //二表链接
        // $user_info=db('user')->alias('u')->
        // $this->assign('jon',$user_info);
        // return $this->fetch();
        // // dump($details);die();
    }
    //这个逻辑应该是通过该用户的用户id跳转到用户的单独页面。
    //也就是用户详情。
}

