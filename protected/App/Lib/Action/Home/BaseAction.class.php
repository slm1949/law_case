<?php
class BaseAction extends Action {
    public function  _initialize(){
        $config=D('Config');
        $sites=$config->map();
        $this->assign($sites);//获取网站的配置信息
    }
 }
