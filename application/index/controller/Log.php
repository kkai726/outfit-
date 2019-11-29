<?php
namespace app\index\controller;

use app\index\controller\Base;

use think\Controller;

class Log extends Controller
{
    public function lst()
    {
        $user_id=input('user_id');
        $info=db('log')->where("user_id",$user_id)->where("log_status",0)->select();
        $dwb=db('user')->where('user_id',$user_id)->select();
        if($info)
        {
            $this->assign('info',$info);
            $this->assign('dwb',$dwb);
        }
        else
        {
            $this->error('该用户尚未发布日志');
        }
        return $this->fetch();
    }//在个人主页内显示所有日志

    public function detail()
    {
        $log_id=input('log_id');
        $info=db('log')->where('log_id',$log_id)->select();
        $this->assign('inf',$info);
        return $this->fetch();
    }

    public function pub()
    {
        if(request()->isPost()){
            $user_id=session('user_id');
            $data=[
                'log_title'=>input('log_title'),
                'log_pubtime'=>date('Y-m-d H:i:s',time()),
                'log_update'=>date('Y-m-d H:i:s',time()),
                'log_desc'=>input('log_desc'),
                'user_id'=>$user_id
            ];

            $res=db('log')->insert($data);
            if($res){
                db('user')->where('user_id',$user_id)->setInc('user_score',5);//浏览量加1
                db('user')->where('user_id',$user_id)->setInc('user_exp',5);//浏览量加1
                $this->success('发布日志成功！...积分+5,经验+5');
            }else{
                $this->error('发布日志失败...');
            }
        }

        return $this->fetch();
    }//发布日志

    public function edit()
    {

        $user_id=session('user_id');
        $log_id=input('log_id');
        $info=db('log')->where('log_id',$log_id)->select();
        $this->assign('info',$info);
        //  dump($log_id);die;
        if(request()->isPost()){

            $data=[
                'log_title'=>input('log_title'),
                'log_update'=>date('Y-m-d H:i:s',time()),
                'log_desc'=>input('log_desc'),
                'user_id'=>$user_id
            ];
            $res=db('log')->where('log_id',$log_id)->update($data);
            if($res){
                $this->success('编辑日志成功！','personal/myself');
            }else{
                $this->error('编辑日志失败...');
            }
        }
        return $this->fetch();
    }//编辑修改日志

    public function del()
    {
        $log_id=input("log_id");
        $res=db("log")->where("log_id",$log_id)->delete();
//        dump($res);die;
        if($res){
            $this->success('删除日志成功！');
        }else{
            $this->error('删除日志失败！');
        }
    }//删除日志

}
