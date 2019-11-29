<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Adminlogin extends Model
{

	public function login($data){
		$admin=Db::name('admin')->where('admin_account','=',$data['admin_account'])->find();
		if($admin){
			if($admin['admin_password'] == md5($data['admin_password'])){
			    session('admin_name',$admin['admin_name']);
				session('admin_id',$admin['admin_id']);
				// session('admiin_pic',$user['admin_pic']);
				// session('admin_password',$admin['admin_password']);
				return 3; //信息正确
			}else{
				return 2; //密码错误
			}
		}else{
			return 1; //用户不存在
		}
	}

}