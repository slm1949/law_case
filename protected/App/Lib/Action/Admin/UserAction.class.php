<?php
  class UserAction extends Action{
    public function login(){
      $Form=M('user');
      $condition['user_name']=$_POST['user_name'];
      $condition['password']=$_POST['password'];
      if($Form->where($condition)->count()>=1){
         session('[start]');
         $_SESSION['user_name']=$_POST['user_name'];
         $this->success('管理员登陆成功', '__APP__/Admin/Case/index');
      }
      else{
        $this->error('管理员名或密码错误');
      }
    }
    public function logout(){
         session('[start]');
         session('user_name',null);
         $this->success('管理员注销成功', '__APP__/Admin/Case/index');
    }
  }    
