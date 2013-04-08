<?php
class UserAction extends Action{
    public function login(){
        if($this->_post()){
            $Form=M('user');
            $condition['user_name']=$_POST['user_name'];
            $condition['password']=md5($_POST['password']);
            if($Form->where($condition)->count()>=1){
                $_SESSION['user_name']=$_POST['user_name'];
                $url_info=session('url_info')?session('url_info'):'__APP__/Admin/Case/index';
                $this->success('管理员登陆成功', $url_info);
            }else{
                $this->error('管理员名或密码错误');
            }
        }else{
            $this->display();
        }
    }

    public function logout(){
        session('user_name', null);
        $this->success('管理员注销成功', 'login');
    }
}    
