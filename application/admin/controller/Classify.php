<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;
//标签
//增 删 改 查
//标签我觉得可以做软删除，因为一共也没几个标签
//先写软删，然后再写一个恢复列表，就不用真的删除
//为0是正常的，为1为删除
//记得在数据表里添加状态位
class Classify extends Base
{
    public function lst()//列表
    {
       $cl_lst=db('classify')->where('classify_status=0')->select();
    //    dump($cl_lst);die();
       $this->assign('info',$cl_lst);
        return $this->fetch();
        // dump($d_lst);die();
    }

    public function del()//删除标签，是软删除。之后再写一个恢复改变状态位
    {  
        $c_id=input('classify_id');
    //     $res=db('classify')->where('classify_id',$c_id)->delete();
    //    if($res){
    //         return $this->success('您已经删除标签成功！','lst');//跳转到用户列表页
    //         }else{
    //             return $this->error('您删除标签失败!');
    //     }
        $c_status=['classify_status'=>1];
        $res=db('classify')->where('classify_id',$c_id)->update($c_status);
        if($res)
        {
            return $this->success('您已删除标签成功','lst');
        }
        else{
            return $this->error('删除失败！');
        }
    }

    public function rebacklst()//恢复列表
    {
        $cr_lst=db('classify')->where('classify_status=1')->select();
        // dump($cr_lst);die;
        $this->assign('crst',$cr_lst);
        return $this->fetch();
    }
    public function doreback()//恢复标签
    {
        $c_id=input('classify_id');
        $c_status=db('classify')->where('classify_id',$c_id)->field('classify_status')->find();
        if($c_status['classify_status']==1)
        {
            $c_statusr=['classify_status'=>0];
            
            $res=db('classify')->where("classify_id",$c_id)->update($c_statusr);
            if($res)
            {
                return $this->success('您已经恢复标签成功','lst');//跳转到用户列表页
            }
            else{
                return $this->error('您恢复标签失败!');
        }
        }
    }

    // public function add()//添加页面
    // {
    //     return $this->fetch();
    // }

    public function add()//添加的方法
    {
        $classify_tag=input('classify_tag');
        $classify_info=db('classify')->where('classify_tag',$classify_tag)->select();
        if (request()->isPost())
        {
            $data = [
                'classify_tag'=>$classify_tag,
                // 'classify_status'=>0,
                // 'create_time' =>time(),
            ];
        //    dump($data);die();
       
        if($classify_info==NULL&&$classify_tag!=NULL)
        {
             $res=Db::name('classify')->insert($data);
                // dump($res);die;
                if($res){
                return $this->success('添加成功！','lst');
                }
            }
        else if($classify_info!=NULL){
                return $this->error('添加失败,您所添加的标签与曾有的标签重复');
        }
        else if($classify_tag==NULL)
        {
               return $this->error('添加失败，您没有填写标签!');
        }
        
        }
        return $this->fetch();
    }


    public function edit()//改动页面
    {
        $c_id=input('classify_id');
        $c_info=db('classify')->where('classify_id',$c_id)->select();
        $this->assign('info',$c_info);
        return $this->fetch();
    }
    public function doedit()//改动方法
    {
        $c_id=input('classify_id');
        // dump($c_id);die;
        // $c_info=db('classify')->where('classify_id',$c_id)->find();
        $data=[
            'classify_tag'=>input('classify_tag'),
        ];
        // dump($data);die;
        $res=db('classify')->where('classify_id',$c_id)->update($data);
        // dump($res);die;
            if($res)
            {
                return $this->success('更新分类成功！','lst');
            }
            else
            {
                return $this->error('请正确填写分类名称！');
            }
    }

}