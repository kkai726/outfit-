<?php
namespace app\index\controller;

use app\index\controller\Base;


use think\Controller;

class Comment extends Controller
{
    public function lst()
    {
        $picture_id=input('pic_id');
        // dump($picture_id);die;
        $info=db("comment")->alias('c')->join("user u","c.user_id=u.user_id")
            ->join("picture p","c.pic_id=p.pic_id")->where('p.pic_id',$picture_id)->select();
        $count=db('comment')->where('pic_id',$picture_id)->count();
        // dump($count);die;
        $this->assign('com_count',$count);
        $this->assign('com',$info);
//            dump($info);die;
        // return $this->fetch();
    }//一个穿搭内所有评论

    public function del()
    {
        $comment_id=input("comment_id");
        $res=db("comment")->where("comment_id",$comment_id)->delete();
//        dump($info);die;
        if($res){
            $this->success('删除评论成功！','lst');
        }else{
            $this->error('删除评论失败...');
        }
    }//删除个人评论

    public function add()
    {
        $pic_id=input('pic_id');
//        $user_id=input('user_id');
        // dump($pic_id);die;
        $user_id=session('user_id');
        $data=[
            'comment_desc'=>input('comment_desc'),
            'comment_time'=>date('Y-m-d H:i:s',time()),
            'pic_id'=>$pic_id,
            'user_id'=>$user_id
        ];
        $res=db('comment')->insert($data);
        if($res){
            db('user')->where('user_id',$user_id)->setInc('user_score',3);//浏览量加1
            db('user')->where('user_id',$user_id)->setInc('user_exp',3);//浏览量加1
            $this->success('评论成功...积分+3,经验+3','lst');
        }else{
            $this->error('评论失败...');
        }
    }//发布评论信息
}