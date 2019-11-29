<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;
//在列表里显示穿搭数，评论数，日志数，记得做
class User extends Base
{
    public function lst()//用户列表页
    {
        $user_lst=db('user')->select();
        // dump($user_lst);die;
        $this->assign('info',$user_lst);
        return $this->fetch();
        
        // return $this->fetch();
    }
    
    public function detail()//跳转到详情页面
    {
        $user_id=input('user_id');
        $user_details=db('user')->where('user_id',$user_id)->select();
        // dump($user_details);die;
        $c_count=db('comment')->alias('c')->where('c.user_id',$user_id)->count();
        $p_count=db('picture')->alias('p')->where('p.user_id',$user_id)->count();
        $l_count=db('log')->alias('l')->where('l.user_id',$user_id)->count();
        $this->assign('detail',$user_details);
        $this->assign('c_count',$c_count);
        $this->assign('p_count',$p_count);
        $this->assign('l_count',$l_count);
        return $this->fetch();
    }

    public function modify()//冻结用户
    {
        $user_id=input('user_id');
        // dump($user_id);die;
        $user_status=db('user')->where('user_id',$user_id)->field('user_status')->find();
        // dump($user_status);die;
        if($user_status['user_status']==0||$user_status['user_status']==2||$user_status['user_status']==3)
        {
            $user_statusl=['user_status'=>1];
            $res=db('user')->where("user_id",$user_id)->update($user_statusl);
            if($res)
            {
                return $this->success('冻结用户成功！','lst');//跳转到用户列表页
            }
            else{
                return $this->error('冻结用户失败!');
        }
        }
        else if($user_status['user_status']==1){
            $user_statusl=['user_status'=>0];
        
            $res=db('user')->where("user_id",$user_id)->update($user_statusl);
            if($res)
            {
                return $this->success('解封用户成功！','lst');//跳转到用户列表
            }
            else{
                return $this->error('解封用户失败!');
        }
        }
    }
    public function comment()
    {   
        $user_id=input('user_id');
        // dump($pic_id);die;
        $info=db("comment")->alias('c')->where('c.user_id',$user_id)->join('user u',"u.user_id=$user_id")->select();
        $this->assign('info',$info);
        return $this->fetch();
    }
    public function picture()
    {
        $user_id=input('user_id');
        $info=db('picture')->alias('p')->where('p.user_id',$user_id)->join('user u',"u.user_id=$user_id")
        ->join('classify c',"c.classify_id=p.classify_id")->select();
        foreach($info as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        // dump($pic);die;
        $this->assign('type', $pic);
        $this->assign('info',$info);
        return $this->fetch();
    }
    public function log()//日志列表
    {
        $user_id=input('user_id');
        $d_lst=db('log')->alias('l')->where('l.user_id',$user_id)->join('user u',"u.user_id=$user_id")->select();
        // dump($d_lst);die();
        $this->assign('info',$d_lst);
        return $this->fetch();
        // dump($d_lst);die();
    }

   
}