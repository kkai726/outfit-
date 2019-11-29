<?php
namespace app\index\controller;

use app\index\controller\Base;

use think\Session;

use think\Controller;

class Personal extends Controller
{
    public function other()
    {
        $user_id=input('user_id');
        $auser_id=Session::get('user_id');
        $info=db("picture")->where("user_id", $user_id)->select();
        $dwb=db('user')->where('user_id',$user_id)->select();
        $pic=db("picture")->where("user_id",$user_id)->where("pic_status",0)->count();
        $comment=db("comment")->where("user_id",$user_id)->count();
        $log=db('log')->where("user_id",$user_id)->where("log_status",0)->count();
        $follow=db('follow')->where("puser_id",$user_id)->count();
        $concerned=db('follow')->where("auser_id",$user_id)->count();
        $collect=db("collect")->alias('c')->where('c.user_id',$user_id)
            ->join('user u','u.user_id=c.user_id')->join('picture p',"p.pic_id=c.pic_id")
            ->where("p.pic_status",0)->count();
        $count=[
            'pic'=>$pic,
            'log'=>$log,
            'collect'=>$collect,
            'comment'=>$comment,
            'follow'=>$follow,
            'concerned'=>$concerned,
        ];
        $follow_aa=db('follow')->where('auser_id',$auser_id)->where('puser_id',$user_id)->find();
        $this->assign('follow',$follow_aa);
        $this->assign('count',$count);
        $this->assign('dwb',$dwb);
        $this->assign("info",$info);
        return $this->fetch();
    }//个人主页内显示所有个人穿搭

    public function  myself()
    {
        $user_id=Session::get('user_id');
        $info=db("picture")->where("user_id", $user_id)->select();
        $dwb=db('user')->where('user_id',$user_id)->select();
        $pic=db("picture")->where("user_id",$user_id)->where("pic_status",0)->count();
        $comment=db("comment")->where("user_id",$user_id)->count();
        $log=db('log')->where("user_id",$user_id)->where("log_status",0)->count();
        $follow=db('follow')->where("puser_id",$user_id)->count();
        $enter=db('enter')->where("user_id",$user_id)->count();
        $concerned=db('follow')->where("auser_id",$user_id)->count();
        $collect=db("collect")->alias('c')->where('c.user_id',$user_id)
            ->join('user u','u.user_id=c.user_id')->join('picture p',"p.pic_id=c.pic_id")
            ->where("p.pic_status",0)->count();
        $count=[
            'pic'=>$pic,
            'log'=>$log,
            'collect'=>$collect,
            'comment'=>$comment,
            'follow'=>$follow,
            'concerned'=>$concerned,
            'enter'=>$enter
        ];
        $this->assign('count',$count);
        $this->assign('dw',$dwb);
        $this->assign("if",$info);
        return $this->fetch();
    }

    public function collect()
    {
        $user_id=Session::get('user_id');
//        $p_id=db('collect')->where("user_id",$user_id)->field('pic_id')->select();
//        $lists=db('picture')->where("pic_id",$p_id)->select();x
//        dump($user_id);die;
        $info=db('picture')->alias('p')->join('collect c','c.pic_id=p.pic_id')->where('c.user_id',$user_id)->select();
        $dwb=db('user')->where('user_id',$user_id)->select();
        $this->assign('dwb',$dwb);
        if($info)
        {
//            dump($lists);die();
            $this->assign('info',$info);
        }
        else
        {
            $this->error('该用户没有收藏');
        }

        return $this->fetch();
    }

    public function blog()
    {
        $user_id=Session::get('user_id');
        $info=db('log')->where("user_id",$user_id)->select();
        $dwb=db('user')->where('user_id',$user_id)->select();
        $this->assign('dwb',$dwb);
//        dump($info);die;
        $this->assign($info);
        return $this->fetch();
    }//在个人主页内显示所有日志

}