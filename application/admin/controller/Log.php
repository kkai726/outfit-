<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;
//搜索
//删除
//搜索日志违规内容
//更改日志状态

class log extends Base
{
    public function lst()//列表
    {
        $d_lst=db('log')->alias('l')->join('user u','l.user_id=u.user_id')->select();
        //  dump($d_lst);die();
        $this->assign('info',$d_lst);
        return $this->fetch();
        // dump($d_lst);die();
    }
    public function detail()//跳转到详情页面
    {
        $daily_id=input('log_id');
        $daily_info=db('log')->alias('l')->where('log_id',$daily_id)->join('user u','l.user_id=u.user_id')->select();
        $this->assign('dai',$daily_info);
        return $this->fetch();
    }
    public function del()//删除日志
    {  
        $daily_id=input('log_id');
        $del=db('log')->where('log_id',$daily_id)->delete();
        if($del)
        {
            return $this->success('删除日志成功！');
        }
        else
        {
            return $this->error('删除日志失败');
        }
    }

    public function checkstatus()//改变日志状态 
    {
        $daily_id=input('log_id');
        $daily_status=db('log')->where('log_id',$daily_id)->field('log_status')->find();
        if($daily_status['log_status']==0)
        {
            $daily_statusl=['log_status'=>1];
            
            $res=db('log')->where("log_id",$daily_id)->update($daily_statusl);
            if($res)
            {
                return $this->success('您已经冻结日志成功','lst');//跳转到用户列表页
            }
            else{
                return $this->error('您冻结日志失败!');
        }
        }
       elseif($daily_status['log_status']==1)
       {
           $daily_statusr=['log_status'=>0];

           $rel=db('log')->where("log_id",$daily_id)->update($daily_statusr);
           if($rel)
           {
               return $this->success('您已解封日志成功','lst');
           }
          else{
               return $this->error('您解封日志失败');
           }
       }
    }
    
    public function cllst()
    {
        $user_id=input('user_id');
        $log=db('log')->alias('l')->where('l.user_id',$user_id)->join('user u',"u.user_id=$user_id")->select();
     //    dump($comment);die();
        $this->assign('comment',$log);
        return $this->fetch('lst');
    }

    public function cldetails()
    {
        $user_id=input('user_id');
        $log_id=input('log_id');
        $log_info=db('log')->alias('l')->where('log_id',$log_id)->join('user u',"l.user_id=$user_id")->find();
        // dump($log_info);die();
        $this->assign('log',$log_info);
        return $this->fetch('details');
    }

}