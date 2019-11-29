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
class Change extends Controller
//应该有两个方法，一个是申请
{
    //申请达人页面的信息
    public function apply()
    {
        $user_id=Session::get('user_id');
        $user_info=db('user')->where('user_id',$user_id)->select();
        $this->assign('info',$user_info);
        return $this->view->fetch('Change/apply');//申请达人的页面路径

    }
    //申请达人功能
    public function getchange()
    {
        $user_id=Session::get('user_id');
//        dump($user_id);die;
        $user_score=db('user')->where('user_id',$user_id)->find();
//        dump($user_score);die;
//        $user_status=db('user')->where('user_id',$user_id)->field('user_status')->find();
        if($user_score['user_score']<100)
        {
            return $this->error('您的积分不足或者账号异常,不能提现！');//跳转到申请达人页面
        }
        else
        {
//            $user_status=['user_status'=>2];
            $money=floor($user_score['user_score']/10);
            $msg='请及时查收邮箱，与客服人员取得联系，您已经成功申请提现';
            $mmsg=$msg.":".$money;
            $user_score['user_score']=$user_score['user_score']%10;
            $user_score['user_num']+=$money;
            // dump($user_score);die;
            $user_score['user_st']=3;
//            dump($user_score);die;
            $res=db('user')->where("user_id",$user_id)->update($user_score);
            if($res)
            {
                return $this->success($mmsg);//跳转到个人主页
            }
            else{
                return $this->error('提现失败!');
            }
        }
    }
}
