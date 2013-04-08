<?php
class UserAction extends BaseAction{
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

    public function change_pass(){
        $this->display();
    }

    public function update_pass(){
        $user=M('User');
        $key=$user->where(array('user_name' => $_POST['user_name_old'],'password' => md5($_POST['password_old'])))->getField('id');
        if(!$key){
            $this->error('用户名或密码错误');
        }else{
            if($_POST['password']==$_POST['password_repeat']){
                $user_info['user_name']=$_POST['user_name'];
                $user_info['password']=md5($_POST['password']);
                $user->where(array('id' => $key))->save($user_info);
                $this->success('用户名密码修改成功');
            }else{
                $this->error('两次输入的新密码不一致');
            }
        }
    }
}    
