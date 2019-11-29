<?php
namespace app\admin\controller;

use think\Controller;
use  PHPMailer\PHPMailer\PHPMailer;
use app\admin\controller\Base;
use think\Db;
use think\Session;
use think\Request;
//数据库中加一条新的状态位，单写余额提现
//user_st
//再加一条user_num存在数据库里？
/**
     * tp5邮件
     * @param
     * @author staitc7 <static7@qq.com>
     * @return mixed
     */

class Getmoney extends Base
{
    public function lst()//列表页
    {
        $user_lst=db('user')->where('user_st!=0')->select();
        $user_count=db('user')->where('user_st!=0')->count();  
        
        // dump($user_nums);die;
        $this->assign('info',$user_lst);  
        // $this->assign('nums',$user_nums);
        // dump($user_lst);die();
        return $this->fetch();
        // return json($user_lst);
    }
    
   

    public function setemail()
    {
        $user_id=input('user_id');
        $user_st=db('user')->where('user_id',$user_id)->field('user_st')->find();
        // dump($user_st);die;
        $user_email=db('user')->where('user_id',$user_id)->field('user_email')->find();
        if($user_st['user_st']==3)
    	{
            $user_st=['user_st'=>1];
            $res=db('user')->where('user_id',$user_id)->update($user_st);
            if($res)
            { 
                sendEmail([['user_email'=>$user_email['user_email'],'content'=>'请尽快回复邮件联系管理员1124947698，进行余额提现！逾期不候！']]);
                // dump($red);die;
                return $this->success('发送邮件成功!','lst');
            }
            // else{
            //     return $this->error('已发送邮件！请等待回复！');
            // }
    	}
    	else
    	{
    		return $this->error('已发送邮件！请等待回复！');
    	}
        
    }

   public function setmoney()//
   {
        //0  未申请
        //1  发送邮件，正在等待
        //2  余额提现成功，扣除积分。
        //3  申请中
       $user_id=input('user_id');
       $data=db('user')->where('user_id',$user_id)->find();
       $user_st=db('user')->where('user_id',$user_id)->field('user_st')->find();
       $user_score=db('user')->where('user_id',$user_id)->field('user_score')->find();
       $user_num=db('user')->where('user_id',$user_id)->field('user_num')->find();
       $coo=$user_score['user_score']-$user_num['user_num'];//取得数
    //    dump($user_score);
    //    dump($user_num); 
    //    dump($coo);die();
       if($user_st)
       {
        //    dump($user_score);die;
            $data=[
                'user_st'=>2,
                'user_score'=>$coo,
            ];
            // dump($data);die();
            $res=db('user')->where('user_id',$user_id)->update($data);
            dump($res);die();
            if($res)
            {
                return $this->success('余额提现发放完毕！','lst');
            }
            else{
                return $this->error('余额提现发布失败');
            }
       }
   }
}