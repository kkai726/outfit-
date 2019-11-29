<?php
namespace app\index\controller;

use app\clubadmin\controller\Base;

use think\Controller;
use think\Session;
//p是被关注，a是关注
//a是本人，p是粉丝
//这里本人是粉丝。
//个人主页的关注列表和关注详情，也就是被关注的那个人的详情。
class Follow extends Controller
{
    public function lst(){
        $user_id=input('user_id');
        $info=db('follow')->alias('f')->join("user u","f.auser_id=u.user_id")->where('f.puser_id',$user_id)->select();
        if($info)
     {
        $this->assign('info',$info);
     }
     else
     {
        $this->error('该用户尚未有粉丝');
     }
        return $this->fetch();
        
    }
    public function details()
    {
        // $user_id=Session::get['user_id'];
        // $follow_p=db("follow")->alias('f')->where("f.auser_id",$user_id)->field('puser_id')->select();
        // $details=db("user")->alias('u')->where("$follow_p",u.user_id)->select();//调用的用户详情查出来，所有的数据
        // // $this->success('Follow/user');//用户主页的名字瞎写的《，到时候要改
        // //跳转所关注的人的用户主页
        // // dump($details);die();
        // $this->assign('jon',$details);
        // return $this->fetch();
    }
}

