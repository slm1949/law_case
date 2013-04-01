<?php
class ConfigAction extends Action {
	public function index(){
		$sites=$this->site_info();
		$this->assign($sites);
		$this->display();
	}	
	public function update(){
		$site=M('config');
		$site-> where('`key`="site_name"')->setField('value',"$_POST[site_name]");
		$site-> where('`key`="site_description"')->setField('value',"$_POST[site_description]");
		$site-> where('`key`="phone"')->setField('value',"$_POST[site_phone]");
		$site-> where('`key`="email"')->setField('value',"$_POST[site_email]");
		$this->success('修改网站信息成功');
	}	
	public function site_info(){	
		$site=M('config');
		$sites['site_name']=$site->where('`key`="site_name"')->getField('value');
		$sites['site_description']=$site->where("`key`='site_description'")->getField('value');
		$sites['site_phone']=$site->where("`key`='phone'")->getField('value');
		$sites['site_email']=$site->where("`key`='email'")->getField('value');
		return $sites;
	}
}
