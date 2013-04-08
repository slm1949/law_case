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
		//当key对应的字段不存在时，自动增加
		if(!$site-> where('`key`="site_name"')->find()){
			$data['key']='site_name';
			$site->add($data);
		}
		if(!$site-> where('`key`="site_description"')->find()){
			$data['key']='site_description';
			$site->add($data);
		}
		if(!$site-> where('`key`="site_phone"')->find()){
			$data['key']='site_phone';
			$site->add($data);
		}
		if(!$site-> where('`key`="site_email"')->find()){
			$data['key']='site_site_email';
			$site->add($data);
		}
		if(!$site-> where('`key`="site_address"')->find()){
			$data['key']='site_address';
			$site->add($data);
		}
		if(!$site-> where('`key`="site_explanation"')->find()){
			$data['key']='site_explanation';
			$site->add($data);
		}
		//修改网站的信息
		$site-> where('`key`="site_name"')->setField('value',"$_POST[site_name]");
		$site-> where('`key`="site_description"')->setField('value',"$_POST[site_description]");
		$site-> where('`key`="site_phone"')->setField('value',"$_POST[site_phone]");
		$site-> where('`key`="site_email"')->setField('value',"$_POST[site_email]");
		$site-> where('`key`="site_address"')->setField('value',"$_POST[site_address]");
		$site-> where('`key`="site_explanation"')->setField('value',"$_POST[site_explanation]");	
		$this->success('修改网站信息成功');
	}
}
