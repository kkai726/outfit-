<?php
namespace app\index\controller;

use app\clubadmin\controller\Base;

use think\Controller;
use think\Db;
use think\Session;

class Befollow extends Controller
//关注功能
//关注和取消关注。通过user_id和follow表来判断。
{
    public function dofollow(){
//p是被关注，a是关注
//a是本人，p是粉丝
        // $user_aid=Session::get('user_id');
        // if($user_aid){
        // $user_pid=input('user_id');
        // $data=
        // [
        //     'auser_id'=>$user_aid,
        //     'puser_id'=>$user_pid,
        //     'follow_status'=>0,//状态位，为0前端显示已关注，然后再点击，即为删除操作。
        // ];
        // if($user_aid!=$user_pid&&$user_aid!=NULL)
        // {
        //     $dofollow=db("follow")->insert($data);
        //     if($dofollow)
        //     {
        //         $this->redirect("personal/other",array("user_id"=>$user_pid));
        //     //    return  $this->success('您已成功关注该用户！');//返回的页面
        //     }
        //     else{
        //        return  $this->error('关注失败！');
        //     }
        // }
        // }else{
        // return $this->error('请先登录。','login/login');
        //      }
        
        // dump($dofollow);die();
        $auser_id=Session::get('user_id');
        if($auser_id){
        $puser_id=input('user_id');
        if($puser_id!=$auser_id)
        {
            $data=[
            'auser_id'=>$auser_id,
            'puser_id'=>$puser_id,
            // 'like_status'=>0,//默认为0，也就是点赞即为0，检测到点赞为0，取消既从这里删除。
        ] ;
            $dofollow=db('follow')->insert($data);
//            die;
            if($dofollow) {
               return $this->success('关注成功!');
                // $this->redirect("personal/other",array("user_id"=>$puser_id));
            }
          else
        {
            return $this->error('关注失败！');
        }
        }
        else if($puser_id==$auser_id)
        {
            return $this->error('关注操作失败！');
        }
        
    }else{
        return $this->error('请先登录。','login/login');
    }

    }
    public function delfollow()
    {
        $user_id=input('user_id');
        $follow_id=db('follow')->where('puser_id',$user_id)->field('follow_id')->find();
        $res=db('follow')->where("follow_id",$follow_id['follow_id'])->delete();
        if($res){
            $this->success('取消关注成功！');//路径
        }else{
            $this->error('取消关注失败...');
        }
    }
}

