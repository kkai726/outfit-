<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\controller\Base;

use think\Db;
use think\Session;

//先要从数据库获取原来的密码，然后输入新的密码，再输入一遍验证，然后提交更新。
//返回页面应该是重新返回登录页面
//
//
class Password extends Base
{//修改密码
    public function password()
    {
        $admin_id=Session::get('admin_id');
        $info=db('admin')->find($admin_id);
        $old_pwd=(md5(input('old_password')));
        if(request()->isPost()){
            if($old_pwd == $info['admin_password']){
                $data=[
                    'admin_id'=>$admin_id,
                ];
                if(input('new_password') == input('again_password')){
                    if(input('new_password')){
                        $data['admin_password']=md5(input('new_password'));
                    }else{
                        $data['admin_password']=$info['admin_password'];
                    }
                    $save=db('admin')->update($data);
                        if($save!= false){
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
}    









