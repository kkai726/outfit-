<?php
namespace app\index\controller;

use app\index\controller\Base;

use think\Db;

use think\Session;

use think\Controller;

class Picture extends Controller
{
    public function lst()
    {
        $user_id = input('user_id');
        $info = db("picture")->alias('p')->where("p.user_id", $user_id)->where("p.pic_status",0)->join('user u','u.user_id=p.user_id')->select();
        foreach($info as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        // dump($pic);die;
        if($info)
        {
            $this->assign('type', $pic);
            $this->assign('user_id', $user_id);
            $this->assign('info',$info);
        }
        else
        {
            $this->error('该用户尚未关注');
        }
        return $this->fetch();
    }

    public function pub()
    {
        $class=db('classify')->select();
        $this->assign('class',$class);

        if(request()->isPost()){
            $file=request()->file('pic');
            $user_id=Session::get('user_id');
            if($file) {
                $info = $file->rule('uniqid')
                    ->validate(['size' => 64000000, "ext" => 'jpg,png,gif,mp4,avi'])
                    ->move(ROOT_PATH . 'public' . DS . 'static' .DS. 'images');
                if ($info) {
                    $user_pic = $info->getFilename();
                    $data = [
                        'pic_name' => input('pic_name'),
                        'pic'=>$user_pic,
                        'pic_uptime' => date('Y-m-d H:i:s', time()),
                        'pic_desc' => input('pic_desc'),
                        'user_id' => $user_id,
                        'classify_id'=>input('classify_id'),
                    ];
                    $res = db('Picture')->insert($data);
                    if ($res) {
                        db('user')->where('user_id',$user_id)->setInc('user_score',10);//浏览量加1
                        db('user')->where('user_id',$user_id)->setInc('user_exp',10);//浏览量加1
                        $this->success('发布穿搭成功！积分+10,经验+10');

                    } else {
                        $this->error('发布穿搭失败...');
                    }
                }

            }else{
                $this->error('请发布穿搭...');
            }
        }
        return $this->fetch();
    }

    public function del()
    {
        $picture_id=input("pic_id");
        db("comment")->where("pic_id",$picture_id)->delete();
        db("collect")->where("pic_id",$picture_id)->delete();
        db("like")->where("pic_id",$picture_id)->delete();
        $res=db("picture")->where("pic_id",$picture_id)->delete();
//        dump($info);die;
        if($res){
            $this->success('删除穿搭成功！','personal/myself');
        }else{
            $this->error('删除穿搭失败！');
        }
    }//删除穿搭

    public function detail()
    {
        $user_id=Session::get('user_id');
        $pic_id=input('pic_id');
        $info=db("picture")->alias('p')->where
        ('p.pic_id',$pic_id)->join("user u","p.user_id=u.user_id")
            ->where("p.pic_id",$pic_id)->join("classify c","c.classify_id=p.classify_id")->select();
        db('picture')->where('pic_id',$pic_id)->setInc('pic_view');//浏览量加1
        action('index/Comment/lst');
        $like = db('like') -> where('pic_id',$pic_id) ->where('user_id',$user_id) ->find();
        $collect= db('collect') -> where('pic_id',$pic_id) ->where('user_id',$user_id) ->find();
        $pic = array();
        foreach($info as $k=>$v){
            $pic[]=end(explode('.',$v['pic']));
        }
        $this->assign('type', $pic);
        $this->assign('collect',$collect);
        $this->assign('like',$like);
        $this->assign('info',$info);
        return $this->fetch();
    }
}
