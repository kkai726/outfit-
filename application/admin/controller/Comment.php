<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;
//评论
//删 查 列表
class Comment extends Base
{
   public function lst()
   {
       $com=db('comment')->alias('c')->join('user u','c.user_id=u.user_id')
       ->join('picture p','p.pic_id=c.pic_id')->select();
        //   dump($com);die();
        foreach($com as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        // dump($pic);die;
        $this->assign('type', $pic);
       $this->assign('info',$com);
    //    dump($com);die();
       return $this->fetch();
   }
   public function del()
   {
       $com_id=input('comment_id');
       $del=db('comment')->where('comment_id',$com_id)->delete();
       if($del)
       {
           return $this->success('删除评论成功！','lst');
       }
       else{
            return $this->error('删除评论失败！');
       }
       return $this->fetch('lst');
   }

   public function cmodify(){
        $comment_id=input('comment_id');
        $info=db("comment")->where('comment_id',$comment_id)->find();
        if($info['comment_status']==0){
            $data=['comment_status'=>1];
        }else{
            $data=['comment_status'=>0];
        }
        $res=db('comment')->where('comment_id',$comment_id)->update($data);
        if($res){
            $this->success('修改评论状态成功！','lst');
        }else{
            $this->error('修改评论状态失败...');
        }
    }
   public function culst()
   {
       $user_id=input('user_id');
       $comment=db('comment')->alias('c')->where('c.user_id',$user_id)->join('user u',"u.user_id=$user_id")->select();
       dump($comment);die();
       $this->assign('comment',$comment);
       return $this->fetch('lst');
   }
}