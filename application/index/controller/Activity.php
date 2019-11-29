<?php
namespace app\index\controller;

use think\Controller;

use think\Db;

use think\Session;

class Activity extends Controller
{
    public function lst()
    {
        $info=Db::name("activity")->select();
        $this->assign('info',$info);
        return $this->fetch();
    }
    public function detail()
    {
        $activity_id=input('activity_id');
        $user_id=Session::get('user_id');
        $enter = db('enter') -> where('activity_id',$activity_id) ->where('user_id',$user_id) ->find();
//        dump($enter);die;
        $info=Db::name("activity")->alias('a')->where
        ('a.activity_id',$activity_id)->join("admin ad","a.admin_id=ad.admin_id")
            ->where(' a.activity_id',$activity_id)->select();
        $this->assign('info',$info);
        $this->assign('enter',$enter);


            if(request()->isPost()){
                $file=request()->file('enter_pic');
//                dump(input('enter_email'));die;
                $user_id=Session::get('user_id');
                if($file) {
                    $info = $file->rule('uniqid')
                        ->validate(['size' => 64000000, "ext" => 'jpg,png,gif'])
                        ->move(ROOT_PATH . 'public' . DS . 'static' .DS.'images');
                    if ($info) {
                        $enter_pic = $info->getFilename();
                        $data = [
                            'enter_email'=>input('enter_email'),
                            'activity_id'=>input('activity_id'),
                            'enter_pic'=>$enter_pic,
                            'enter_time' => date('Y-m-d H:i:s', time()),
                            'user_id' => $user_id,
                        ];
                        $res = db('Enter')->insert($data);
                        if ($res) {
                            db('user')->where('user_id',$user_id)->setInc('user_score',20);//
                            db('user')->where('user_id',$user_id)->setInc('user_exp',20);//浏览量加1
                            $this->success('参加活动成功！...积分+20,经验+20');
                        } else {
                            $this->error('参加活动失败...');
                        }
                    }

                }else{
                    $this->error('请发布穿搭...');
                }
            }
            return $this->fetch();

    }

    public function del()//取消报名
    {
        $enter_id=input("enter_id");
        $user_id=Session::get('user_id');
        $res=db("enter")->where("enter_id",$enter_id)->delete();
//        dump($info);die;
        if($res){
            db('user')->where('user_id',$user_id)->setDec('user_score',20);//
            db('user')->where('user_id',$user_id)->setDec('user_exp',20);//浏览量加1
            $this->success('取消报名成功！...积分-20,经验-20','lst');
        }else{
            $this->error('取消报名失败！');
        }
    }//删除穿搭
}




