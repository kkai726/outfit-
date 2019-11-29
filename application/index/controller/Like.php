<?php
namespace app\index\controller;

use app\clubadmin\controller\Base;

use think\Controller;
use think\Db;
use think\Session;

//点赞状态 0
class Like extends Controller
//应该有两个方法，一个是点赞，一个是取消点赞
{
    public function getlike()//点赞
    {
        $user_id=Session::get('user_id');
        if($user_id){
        $pic_id=input('pic_id');
        $data=[
            'user_id'=>$user_id,
            'pic_id'=>$pic_id,
            'like_status'=>0,//默认为0，也就是点赞即为0，检测到点赞为0，取消既从这里删除。
        ] ;
            $dolike=db('like')->insert($data);
//            die;
            if($dolike) {
//                return $this->success('点赞成功！','');
                $this->redirect("picture/detail",array("pic_id"=>$pic_id));
            }
        else
        {
            return $this->error('点赞失败！');//返回穿搭详情界面
        }
    }else{
        return $this->error('请先登录。','login/login');
    }

    }

    public function cancellike()//取消点赞
    {
//        dump(input('like_id'));die;
    $l_id=input('like_id');
    $pic_id=input('pic_id');
//    dump($l_id);die;
    $del=db('like')->where('like_id',$l_id)->delete();
    if($del)
    {
        $this->redirect("picture/detail",array("pic_id"=>$pic_id));
    }
     else
     {
             return $this->error('取消点赞失败');//返回穿搭详情页面
     }
    }
}
