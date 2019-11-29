<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;
//增删改查
//活动详情里应该有每个
class Activity extends Base
{
   public function lst()//活动列表  前台判断活动状态
   {
       $act=db('activity')->alias('a')->join('admin ad','ad.admin_id=a.admin_id')->select();
    //    dump($act);die;
       $this->assign('info',$act);
       return $this->fetch();
   }

   public function detail()//活动详情
   {
        $act_id=input('activity_id');
        $act_info=db('activity')->alias('a')->where('a.activity_id',$act_id)->join('admin ad','ad.admin_id=a.admin_id')->select();
        $act_num=db('enter')->alias('e')->where('e.activity_id',$act_id)->join('user u','e.user_id=u.user_id')
        ->field('u.user_id')->count();
        // dump($act_info);die;
        //活动的报名人数
        $this->assign('num',$act_num);
        // dump($act_num);die();
        $this->assign('info',$act_info);
        return $this->fetch();

   }
   public function del()//删除活动  0为预备中,1为进行中,2为已结束
   {
        $act_id=input('activity_id');
        $act_status=db('activity')->where('activity_id',$act_id)->field('activity_status')->find();
        if($act_status['activity_status']==0)
        {
            $del=db('activity')->where('activity_id',$act_id)->delete();
        if($del)
        {
            return $this->success('删除活动成功！','lst');
        }
        else
        {
            return $this->error('删除活动失败！');
        }
        }
        else if($act_status['activity_status']==1)
        {
            return $this->error('活动进行中，无法删除活动！');
        }
        
        // dump($del);die;
        return $this->fetch('lst');
   }
   public function add()//添加逻辑 添加时默认活动状态为0，预备中
   {
    //    dump('123');die;
    if(request()->isPost()){
        $file = request()->file('activity_post');
        if($file){
            $info = $file->rule('uniqid')
                ->validate(['size'=>64000000,'ext'=>'jpg,png,gif'])
                ->move(ROOT_PATH . 'public' . DS . 'static'. DS .'images');
            if($info){
                $activity_post=$info->getFilename();
            }
            else{
                echo $file->getError();
            }
        }else{
            $this->error('请选择活动图片！');
        }
        $admin_id=Session::get('admin_id');
        $data=[
            'activity_status'=>0,
            'activity_name'=>input('activity_name'),
            'activity_score'=>input('activity_score'),
            'activity_desc'=>input('activity_desc'),
            'activity_startime'=>input('activity_startime'),
            'activity_endtime'=>input('activity_endtime'),
            'activity_pubtime'=>date('Y-m-d H:i:s',time()),
            'activity_post'=>$activity_post,
            'admin_id'=>$admin_id,
        ];
        $res=db('activity')->insert($data);
        if($res){
            $this->success('添加活动成功！','lst');
        }else{
            $this->error('添加活动失败...');
        }
       
    }
     return $this->fetch();
   }
   public function edit()//更新页面
   {
        $act_id=input('activity_id');
        $act_inf=db('activity')->where('activity_id',$act_id)->select();
        // dump($act_inf);die;
        $this->assign('info',$act_inf);
        return $this->fetch();
   }
   public function doedit()//更新逻辑 参照约键写就好
   {
    $activity_id=input('activity_id');
    $admin_id=Session::get('admin_id');
    if(request()->isPost()){
        $file = request()->file('activity_pic');
        if($file){
            $info = $file->rule('uniqid')
                ->validate(['size'=>64000000,'ext'=>'jpg,png,gif'])
                ->move(ROOT_PATH . 'public' . DS . 'static'. DS .'images');
            if($info){
                $activity_post=$info->getFilename();
                $data=[
                    'activity_status'=>0,
                    'activity_name'=>input('activity_name'),
                    'activity_score'=>input('activity_score'),
                    'activity_desc'=>input('activity_desc'),
                     'activity_startime'=>input('activity_startime'),
                    'activity_endtime'=>input('activity_endtime'),
                    'activity_pubtime'=>date('Y-m-d H:i:s',time()),
                    'activity_post'=>$activity_post,
                    'admin_id'=>$admin_id,
                ];
                $res=db('activity')->where('activity_id',$activity_id)->update($data);
                if($res){
                    $this->success('修改活动信息成功！','lst');
                }else{
                    $this->error('修改活动信息失败...');
                }
            }else{
                echo $file->getError();
            }
        }else{
            $data=[
                'activity_status'=>0,
                'activity_name'=>input('activity_name'),
                'activity_score'=>input('activity_score'),
                'activity_desc'=>input('activity_desc'),
                'activity_startime'=>input('activity_startime'),
                'activity_endtime'=>input('activity_endtime'),
                'activity_pubtime'=>date('Y-m-d H:i:s',time()),
                // 'activity_post'=>$activity_post,
                'admin_id'=>$admin_id,
            ];
            $res=db('activity')->where('activity_id',$activity_id)->update($data);
            if($res){
                $this->success('修改活动信息成功！','lst');
            }else{
                $this->error('修改活动信息失败...');
            }
        }
    }
   }
   public function checkstatus()//更改状态，0为预备中，1为进行中，2为已结束. 此时预备状态改成进行，并且可以把进行改成预备
   {
       $act_id=input('activity_id');
       $act_status=db('activity')->where('activity_id',$act_id)->field('activity_status')->find();
       if($act_status['activity_status']==0)
       {
            $act_status=['activity_status'=>1];
            $res=db('activity')->where('activity_id',$act_id)->update($act_status);
            if($res)
            {
                return $this->success('发布活动成功！','lst');
            }
            else{
                return $this->error('发布活动失败！');
            }
       }
       else if($act_status['activity_status']==1)
       {
            $act_status=['activity_status'=>2];
            $red=db('activity')->where('activity_id',$act_id)->update($act_status);
            if($red)
            {
                return $this->success('更改活动状态成功！','lst');
            }
            else
            {
                return $this->error('更改活动状态失败！');
            }
       }
    //    return $this->fetch();
   }

   public function enter()
    {
        $activity_id=input('activity_id');
        $info=Db::name("enter")->alias('e')->join("user u","e.user_id=u.user_id")
        ->join("activity a","e.activity_id=a.activity_id")->where('a.activity_id',$activity_id)->select();
        // dump($info);die;
        $this->assign('info',$info);
        return $this->fetch();
    }
//    public function checkstatusr()//更改状态从1到2，也可以从2到11，但不可从2到0
//    {
//        $act_id=input('activity_id');
//        $act_status=db('activity')->where('activity_id',$act_id)->field('activity_status')->find();
//        if($act_status==1)
//        {
//             $act_status=['activity_status'=>2];
//             $res=db('activity')->where('activity_id',$act_id)->update($act_status);
//             if($res)
//             {
//                 return $this->success('您已更改活动状态成功！','');
//             }
//             else{
//                 return $this->error('您更改活动状态失败！');
//             }
//        }
//        else if($act_status==2)
//        {
//             $act_status=['activity_status'=>1];
//             $red=db('activity')->where('activity_id',$act_id)->update($act_status);
//             if($red)
//             {
//                 return $this->success('您已更改活动状态成功！','');
//             }
//             else
//             {
//                 return $this->error('您更改活动状态失败！');
//             }
//        }
//        return $this->fetch('lst');
//    }
}