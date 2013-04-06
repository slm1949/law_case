<?php
class BaseAction extends Action {
    public function  _initialize(){
        $config=D('Config');
        $sites=$config->map();
        $this->assign($sites);//获取网站的配置信息
        $navigate=D('Navigate');
		$navigates=$navigate->order('sort')->select();
		$this->assign('navigates',$navigates);
    }
 }
