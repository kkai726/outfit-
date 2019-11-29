<?php
namespace app\index\controller;

use app\index\controller\Base;

use app\index\controller\Personal;

use think\Controller;
use think\Session;

use think\Db;

class Index extends Controller
{
    public function index()
    {

        $classify=Db::name('classify')->select();
        $this->assign('classify',$classify);
        $this->getRandoutfit();
        $this->getRandactivity();
        $this->getRanduser();
        return $this->fetch();
    }//首页渲染

    public function logout(){
        session(null);
        $this->success('退出成功！','Login/login');
    }//注销

    public function getRandoutfit(){
        $num = 3;    //需要抽取的默认条数
        $pk = db('picture')->getPK();//获取主键
        $countcus = db('picture')->where('pic_status=0')->field($pk)->select();//查询数据
        $con = '';
        foreach($countcus as $v=>$val){
            $con.= $val[$pk].'|';
        }
        $array = explode("|",$con);// 拆分
        $data = [];
        foreach ($array as $v){
            if (!empty($v)){
                $data[$v]=$v;//循环健值
            };
        }
        $a=array_rand($data,$num) ;//随机数组
        $plist = db('picture')->where($pk,'in',$a)->select();
        $pic = array();
        foreach($plist as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        $this->assign('type', $pic);
        $this->assign('plist', $plist);
    }//首页推荐随机穿搭

    public function getRanduser(){
        $num = 3;    //需要抽取的默认条数
        $pk = db('user')->getPK();//获取主键
        $countcus = db('user')->where('user_status=3')->field($pk)->select();//查询数据
        $con = '';
        foreach($countcus as $v=>$val){
            $con.= $val[$pk].'|';
        }
        $array = explode("|",$con);// 拆分
        $data = [];
        foreach ($array as $v){
            if (!empty($v)){
                $data[$v]=$v;//循环健值
            };
        }
        $a=array_rand($data,$num) ;//随机数组
        $sum=count($a);
        $ulist = db('user')->where($pk,'in',$a)->select();
        $count = [];
        $outfit = [];
        for($i=0; $i<$sum; $i++){
            // dump($a[$i]);die;
            $count[]=db('follow')->where('puser_id',$a[$i])->count();
            $outfit[]=db('picture')->where('user_id',$a[$i])->count();
        }
        // dump($count);die;
        $this->assign('count', $count);
        $this->assign('outfit', $outfit);
        $this->assign('ulist', $ulist);
    }//首页推荐随机用户

    public function getRandactivity(){
        $num = 3;    //需要抽取的默认条数
        $pk = db('activity')->getPK();//获取主键
        $countcus = db('activity')->where('activity_status=0')->field($pk)->select();//查询数据
        $con = '';
        foreach($countcus as $v=>$val){
            $con.= $val[$pk].'|';
        }
        $array = explode("|",$con);// 拆分
        $data = [];
        foreach ($array as $v){
            if (!empty($v)){
                $data[$v]=$v;//循环健值
            };
        }
        $a=array_rand($data,$num) ;//随机数组
        $alist = db('activity')->where($pk,'in',$a)->where('activity_status=0')->select();
        $this->assign('alist', $alist);
    }//首页推荐随机活动

    public function edit()
    {
        $user_id=session('user_id');
        $info=db('user')->find($user_id);
        $old_pwd=(md5(input('old_password')));
        if(request()->isPost()){
            if($old_pwd == $info['user_password']){
                $data=[
                    'user_id'=>$user_id,
                ];
                if(input('new_password') == input('again_password')){
                    if(input('new_password')){
                        $data['user_password']=md5(input('new_password'));
                    }else{
                        $data['user_password']=$info['supadmin_password'];
                    }
                    $save=db('user')->update($data);
                    if($save != false){
                        $this->success('修改密码成功！','index');
                    }else{
                        $this->error('修改密码失败！');
                    }
                    return;
                }else{
                    $this->error('两次输入密码不一致！','edit');
                }
            }else{
                $this->error('请输入正确原密码！','edit');
            }

        }
//        $this->assign('info',$info);
        return $this->fetch();
    }//修改用户密码
    public function editmyself()
    {
        $user_id=session::get('user_id');
        $info=Db::name("user")->where("user_id",$user_id)->select();
        $this->assign('info',$info);
        return $this->fetch();
    }

    public function doeditmyself()
    {
        $file=request()->file('user_pic');
        $user_id=Session::get('user_id');
        $user_pic="";
        if($file){
            $info=$file->rule('uniqid')
                ->validate(['size'=>64000000,"ext"=>'jpg,png,gif'])
                ->move(ROOT_PATH .'public'.DS.'static'.DS.'images');
//            dump($info);die;
            if($info){
                $user_pic=$info->getFilename();
//                dump($user_pic);die;
                $data=[
                    'user_name'=>input('user_name'),
//                    'user_password'=>input('user_password'),
                    'user_pic'=>$user_pic,
                    'user_gender'=>input('user_gender'),
                    'user_hair'=>input('user_hair'),
                    'user_high'=>input('user_high'),
                    'user_email'=>input('user_email'),
                    'user_country'=>input('user_country'),
                    'user_age'=>input('user_age'),
                    'user_desc'=>input('user_desc'),
                ];
//                dump($data);die;

                $res=Db::name('user')->where("user_id",$user_id)->update($data);
//                dump($res);die;
                if($res){
                    $this->success('修改用户信息成功！','index');
                }else{
                    $this->error('修改用户信息失败...');
                }
            }else{
                echo $file->getError();
            }
        }else{
            $data=[
                'user_name'=>input('user_name'),
                'user_gender'=>input('user_gender'),
                'user_hair'=>input('user_hair'),
                'user_high'=>input('user_high'),
                'user_email'=>input('user_email'),
                'user_country'=>input('user_country'),
                'user_age'=>input('user_age'),
                'user_desc'=>input('user_desc'),
            ];
//            dump($data);die;
            $res=db('user')->where('user_id',$user_id)->update($data);
            if($res){
                $this->success('修改用户信息成功！','index');//返回用户主页
            }else{
                $this->error('修改用户信息失败！');
            }
        }
    }
}
