<?php
class ConfigAction extends BaseAction {
	public function index(){
	    $config=D('Config');
		$sites=$config->map();
		$this->assign($sites);
		$this->display();
	}

	public function update(){
		$site=M('config');
		$site-> where('`key`="site_name"')->setField('value',"$_POST[site_name]");
		$site-> where('`key`="site_description"')->setField('value',"$_POST[site_description]");
		$site-> where('`key`="site_phone"')->setField('value',"$_POST[site_phone]");
		$site-> where('`key`="site_email"')->setField('value',"$_POST[site_email]");
		$this->success('修改网站信息成功');
	}
}
