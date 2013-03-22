<?php
  class UserAction extends Action{
    public function login(){
      $Form=M('user');
      $condition['name']=$_POST['user_name'];
      $condition['password']=$_POST['password'];
      if($Form->where($condition)->count()>=1){
       $_SESSION['user_name']=$_POST['user_name'];
       $this->success('登陆成功', '__APP__/Admin/Case/index');
      }
    }
  }    
