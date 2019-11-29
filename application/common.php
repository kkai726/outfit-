<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
return
    [
        error_reporting(E_ERROR|E_WARNING|E_PARSE)
    ];
/**
 * 系统邮件发送函数
 * @param string $tomail 接收邮件者邮箱
 * @param string $name 接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body 邮件内容
 * @param string $attachment 附件列表
 * @return boolean
 * @author static7 <static7@qq.com>
 */
function sendEmail($data = [])
{
    Vendor('PHPMailer.PHPMailer');
    $mail = new PHPMailer\PHPMailer(); //实例化

    $mail->IsSMTP(); // 启用SMTP
    $mail->Host = 'smtp.qq.com'; //SMTP服务器 以QQ邮箱为例子
    $mail->Port = 465;  //邮件发送端口
    $mail->SMTPAuth = true;  //启用SMTP认证
    $mail->SMTPSecure = "ssl";   // 设置安全验证方式为ssl

    $mail->CharSet = "UTF-8"; //字符集
    $mail->Encoding = "base64"; //编码方式

    $mail->Username = '1124947698@qq.com';  //你的邮箱
    $mail->Password = 'nvrqibnqfooujbec';  //你的密码
    $mail->Subject = '余额提现验证'; //邮件标题

    $mail->From = '1124947698@qq.com';  //发件人地址（也就是你的邮箱）
    $mail->FromName ='OutFit管理员';  //发件人姓名

    if($data && is_array($data)){
        foreach ($data as $k=>$v){
            // dump($data);die;
            $mail->AddAddress($v['user_email'], "亲"); //添加收件人（地址，昵称）
            $mail->IsHTML(true); //支持html格式内容
            $mail->Body = $v['content']; //邮件主体内容
            // dump($mail);die;

            //发送成功就删除
            // if ($mail->Send()) {
            //     echo '发送成功';
            // }else{
            //     echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
            // }
              // 发送成功就删除
                if ($mail->Send()) {
                    echo '发送成功';
                }else{
                    echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
                }
        }
    }
}
