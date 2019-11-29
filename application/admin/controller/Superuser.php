<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;

class Superuser extends Base
{
    public function lst()//列表页
    {
        $user_lst=db('user')->where('user_status=2')->select();
        // dump($user_lst);die;
        $this->assign('info',$user_lst);
        return $this->fetch();
        // dump($user_lst);die();
        // return json($user_lst);
    }

   public function checkstatusr()//通过成为达人
   {
       $user_id=input('user_id');
       $user_status=db('user')->where('user_id',$user_id)->field('user_status')->find();
       if($user_status['user_status']==2)
        {
            $user_statusr=['user_status'=>3];
            
            $res=db('user')->where("user_id",$user_id)->update($user_statusr);
            if($res)
            {
                return $this->success('您已经审核用户成功！','lst');//跳转到用户列表页
            }
            else{
                return $this->error('审核用户失败!');
        }
        }
   }
   public function checkstatusl()//不通过还是普通用户
   {
    $user_id=input('user_id');
    $user_status=db('user')->where('user_id',$user_id)->field('user_status')->find();
    if($user_status['user_status']==2)
     {
         $user_statusl=['user_status'=>0];
         
         $res=db('user')->where("user_id",$user_id)->update($user_statusl);
         if($res)
         {
             return $this->success('您已经审核用户成功！','lst');//跳转到用户列表页
         }
         else{
             return $this->error('审核用户失败!');
     }
     }
   }
   //如果不满足其他的一些条件，比如有封禁状态，那么就不能成为达人
}