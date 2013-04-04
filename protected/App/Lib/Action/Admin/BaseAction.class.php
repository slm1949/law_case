<?php
class BaseAction extends Action {
    public function  _initialize(){
        $this->verify();
    }

    protected function verify(){
        session('[start]');// 启动session
        if(empty($_SESSION['user_name'])){   //增加 后台管理页面的权限验证
            session('url_info', __SELF__);
            $this->error('你没有登陆，没有管理权限！','__APP__/Admin/User/login');
        }
    }
 }
