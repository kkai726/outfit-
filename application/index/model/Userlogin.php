<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Userlogin extends Model
{

	public function login($data){
		$user=Db::name('user')->where('user_account','=',$data['user_account'])->find();
		if($user){
		    if($user['user_status']==1){
		        return 4;
            }
			else if($user['user_password'] == md5($data['user_password'])){
			     session('user_name',$user['user_name']);
                 session('user_account',$user['user_account']);
                 session('user_country',$user['user_country']);
                 session('user_score',$user['user_score']);
                session('user_exp',$user['user_exp']);
                session('user_status',$user['user_status']);
				 session('user_id',$user['user_id']);
				 session('user_pic',$user['user_pic']);
                session('user_high',$user['user_high']);
                session('user_hair',$user['user_hair']);
                session('user_gender',$user['user_gender']);
                session('user_age',$user['user_age']);
                session('user_desc',$user['user_desc']);
                session('user_email',$user['user_email']);
				return 3; //信息正确
			}else{
				return 2; //密码错误
			}
		}else{
			return 1; //用户不存在
		}
	}

}