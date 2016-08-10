<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function login(){
        if(isset($_SESSION['username'])){
            $this->redirect('Index/index');
        }
        else{
            if($_SERVER['REQUEST_METHOD']=='POST') {
                //提交登陆数据
                $data['username'] = I('post.username');
                $data['password'] = I('post.password');
                $user = M('user')->where($data)->find();
                if ($user==null) {
                    $this->error('用户不存在或者密码错误');
                } else {
                    $_SESSION = $user;
                    $this->redirect('Index/index');
                }
            }else{
                //普通访问
                $this->display();
            }
        }


    }


    public function logout(){
        session_destroy();
        $this->success('注销成功，并跳转到前台',U('Home/Index/index'));
    }

    public function readDB(){
        $user=M('user')->select();
        dump($user);
        die;
    }

}