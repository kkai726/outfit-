<?php
namespace app\index\controller;

use think\Controller;

use app\index\model\Userlogin;

class Register extends Controller
{
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




