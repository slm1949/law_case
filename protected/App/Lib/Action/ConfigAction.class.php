<?php
class ConfigAction extends Action {
	public function site_info(){	
		$site=M('config');
		$sites['site_name']=$site->where('`key`="网站名称"')->getField('value');
		$sites['site_description']=$site->where("`key`='网站描述'")->getField('value');
		$sites['site_phone']=$site->where("`key`='电话'")->getField('value');
		$sites['site_email']=$site->where("`key`='email'")->getField('value');
		return $sites;
	}
}
