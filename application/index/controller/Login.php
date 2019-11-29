<?php
namespace app\index\controller;

use think\Controller;

use app\index\model\Userlogin;

class Login extends Controller
{
    public function login()
    {
        if(request()->isPost()){
            $user=new Userlogin();
            $data=input('post.');
            $num=$user->login($data);
            if($num==3){
                $this->success('信息正确，正在为您跳转...','Index/index');
            }
            else if($num==4){
                $this->error('用户被冻结，不能登录..');
            }
            else{
                $this->error('用户名或者密码错误');
            }

        }
        return $this->fetch('login');
    }
    public function register()
    {
        if (request()->isPost())
        {
            $data = [
                'user_name' =>input('user_name'),
                'user_account' =>input('user_account'),
                'user_password' =>md5(input('user_password')),
                'user_email' =>input('user_email'),
                'user_status'=>0,
                // 'create_time' =>time(),

            ];
//            dump($data);die();
            $red=db('user')->find();

            if($data['user_name']!=NULL&&$red['user_account']!=$data['user_account'])
            {
                $res=db('user')->insert($data);
                if($res)
                {
                    return $this->success('注册成功，正在为您跳转','Login/login');
                }

            }
            else
            {
                return $this->error('注册失败');
            }
        }
        return $this->fetch('register');
    }
}    




