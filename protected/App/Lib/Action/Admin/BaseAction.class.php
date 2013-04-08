<?php
class BaseAction extends Action {
    public function  _initialize(){
        if(MODULE_NAME!='User'){
            $this->assign(MODULE_NAME.'_active','class="active"');//获得当前模块的名，并激活当前模块对应的导航栏
            $this->verify();
        }else{
            $this->assign(ACTION_NAME.'_active','class="active"');//获得当前模块的名，并激活当前模块对应的导航栏
        }
        if(!empty($_SESSION['user_name'])){
            if(ACTION_NAME=='change_pass'){
                $this->assign('change_password','<li class="active"><a href="__APP__/Admin/User/change_pass">修改密码</a></li>');
            }else{
                $this->assign('change_password','<li><a href="__APP__/Admin/User/change_pass">修改密码</a></li>');
            }
        }
    }

    protected function verify(){
        session('[start]');// 启动session
        if(empty($_SESSION['user_name'])){   //增加 后台管理页面的权限验证
            session('url_info', __SELF__);
            $this->error('你没有登陆，没有管理权限！','__APP__/Admin/User/login');
        }
    }
 }
