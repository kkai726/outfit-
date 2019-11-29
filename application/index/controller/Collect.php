<?php
namespace app\index\controller;

use app\clubadmin\controller\Base;

use think\Controller;
use think\Db;
use think\Session;

//收藏状态 0
class Collect extends Controller
//应该有两个方法，一个是收藏，一个是取消收藏
{
    public function lst(){
        $user_id=input('user_id');
        $info=db("collect")->alias('c')->where('c.user_id',$user_id)
            ->join('user u','u.user_id=c.user_id')->join('picture p',"p.pic_id=c.pic_id")
            ->where("p.pic_status",0)->select();
        foreach($info as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        // dump($pic);die;
        if($info)
        {
            $this->assign('type', $pic);
            $this->assign('info',$info);
        }
        else
        {
            $this->error('该用户尚未关注');
        }
        return $this->fetch();
    }

    public function getcollect()//收藏
    {
        $user_id=Session::get('user_id');
        if($user_id){
        $pic_id=input('pic_id');
        $data=[
            'user_id'=>$user_id,
            'pic_id'=>$pic_id,
           'collect_status'=>0,//默认为0，也就是点赞即为0，检测到点赞为0，取消既从这里删除。
        ] ;
        $docollect=db('collect')->insert($data);
//            die;
        if($docollect) {
            $this->redirect("picture/detail",array("pic_id"=>$pic_id));
        }
        else
        {
            return $this->error('收藏失败！');//返回穿搭详情界面
        }
    }else{
        return $this->error('请先登录。','login/login');
    }

    }

    public function cancelcollect()//取消收藏
    {
        // $user_id=Session::get('user_id');
        $pic_id=input('pic_id');
        $c_id=input('collect_id');

        $del=db('collect')->where("collect_id",$c_id)->delete();
        if($del)
            $this->redirect("picture/detail",array("pic_id"=>$pic_id));
        else
        {
            return $this->error('取消收藏失败');//返回穿搭详情页面
        }

    }

    //个人收藏列表
}
