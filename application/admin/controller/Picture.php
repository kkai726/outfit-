<?php
namespace app\admin\controller;

use app\admin\controller\Base;

use think\Session;

use think\Controller;
//要显示评论数，发布人姓名
//连接user表和comment表

class Picture extends Base
{
    public function lst()
    {
        // $count=db('picture')->alias('p')->join('comment c','c.pic_id=p.pic_id')->count();
        // dump($count);die;
        $pic_info=db('picture')->alias('p')->join('user u','p.user_id=u.user_id')
        ->join('classify c','c.classify_id=p.classify_id')
        // ->join('comment co','co.pic_id=p.pic_id')
        ->select();
        foreach($pic_info as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        // dump($pic);die;
        $this->assign('type', $pic);
        // dump($pic_info);die();
        $this->assign('info',$pic_info);
        // $this->assign('count',$count);
        return $this->fetch();
    }

    public function detail()
    {   
        $pic_id=input('pic_id');
        $count=db('comment')->where('pic_id',$pic_id)->count();
        // dump($count);die;
        $pic_im=db('picture')->alias('p')->where('pic_id',$pic_id)->join('user u','u.user_id=p.user_id')
        ->join('classify c','c.classify_id=p.classify_id')->select();
        // dump($pic_im);die();
        foreach($pic_im as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        // dump($pic);die;
        $this->assign('type', $pic);
        $this->assign('count',$count);
        $this->assign('infm',$pic_im);
        return $this->fetch();
    }

    public function del()
    {
        $pic_id=input('pic_id');
        db('collect')->where('pic_id',$pic_id)->delete();
        db('comment')->where('pic_id',$pic_id)->delete();
        $del=db('picture')->where('pic_id',$pic_id)->delete();
        if($del)
        {   
            
            return $this->success('删除穿搭成功！','lst');
        }
        else
        {
            return $this->error('删除穿搭失败');
        }
    }

    public function comment()
    {   
        $pic_id=input('pic_id');
        // dump($pic_id);die;
        $info=db("comment")->alias('c')->join("user u","c.user_id=u.user_id")
        ->join("picture p","c.pic_id=p.pic_id")->where('p.pic_id',$pic_id)->select();
        // dump($info);die;
        foreach($info as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        // dump($pic);die;
        $this->assign('type', $pic);
        $this->assign('info',$info);
        return $this->fetch();
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

    public function checkstatus()//0为正常，1为封禁
    {
        $pic_id=input('pic_id');
        // dump($pic_id);die;
        $pic_status=db('picture')->where('pic_id',$pic_id)->field('pic_status')->find();
        // dump($pic_status);die;
        if($pic_status['pic_status']==0)
        {
            $pic_status=['pic_status'=>1];
            $res=db('picture')->where('pic_id',$pic_id)->update($pic_status);
            // dump($res);die;
            if($res)
            {
                return $this->success('您已修改穿搭状态成功！','lst');
            }
            else
            {
                return $this->error('修改状态失败');
            }

        }
        else if($pic_status['pic_status']==1)
        {
            $pic_status=['pic_status'=>0];
            $red=db('picture')->where('pic_id',$pic_id)->update($pic_status);
            if($red)
            {
                return $this->success('您已修改穿搭状态成功！','lst');
            }
            else{
                return $this->error('修改状态失败');
            }
        }
    }

    public function pulst()
    {
        $user_id=input('user_id');
        $picture=db('picture')->alias('p')->where('p.user_id',$user_id)->join('user u',"u.user_id=$user_id")->select();
     //    dump($comment);die();
        $this->assign('comment',$picture);
        return $this->fetch('lst');
    }

    // public function pudetails()
    // {
    //     $user_id=input('user_id');
    //     $picture_id=input('pic_id');
    //     $picture_info=db('picture')->alias('p')->where('p.pic_id',$picture_id)->join('user u',"p.user_id=$user_id")->find();
    //     // dump($log_info);die();
    //     $this->assign('pudetails',$picture_info);
    //     return $this->fetch('details');
    // }
}

