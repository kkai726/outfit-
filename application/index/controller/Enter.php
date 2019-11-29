<?php
namespace app\index\controller;

use app\index\controller\Base;

use think\Db;

use think\Session;

use think\Controller;

class Enter extends Controller
{
    public function lst()
    {
        $user_id = input('user_id');
        $info = db("picture")->where("user_id", $user_id)->where("pic_status",0)->select();
        if($info)
        {
            $this->assign('user_id', $user_id);
            $this->assign('info',$info);
        }
        else
        {
            $this->error('该用户尚未关注');
        }
        return $this->fetch();
    }


    public function del()
    {
        $picture_id=input("pic_id");
        $res=db("picture")->where("pic_id",$picture_id)->delete();
//        dump($info);die;
        if($res){
            $this->success('删除穿搭成功！',lst);
        }else{
            $this->error('删除穿搭失败！');
        }
    }//删除穿搭

//    public function detail()
//    {
//        $user_id=Session::get('user_id');
//        $enter_id=input("enter_id");
//        $info=db("enter")->alias('e')->where
//        ('e.user_id',$user_id)->join("user u","e.user_id=u.user_id")
//            ->->select();
//        db('enter')->where('enter_id',$enter_id)->setInc('enter_view');//浏览量加1
//        action('index/Comment/lst');
//        $like = db('like') -> where('enter_id',$enter_id) ->where('user_id',$user_id) ->find();
//        $collect= db('collect') -> where('pic_id',$pic_id) ->where('user_id',$user_id) ->find();
//        $this->assign('collect',$collect);
//        $this->assign('like',$like);
//        $this->assign('info',$info);
//        return $this->fetch();
//    }
}
