<?php
class ArticleAction extends Action {
    public function index($id=0,$case_id=0){ 
		$config=A('Admin/Config');
		$sites=$config->site_info();
		$this->assign($sites);    //获取网站的配置信息    
		$Article   =   M('Article');
		$Case=M('Case');
		if(!empty($case_id)){
			$Articles =   $Article->where("case_id='$case_id'")->select();//读取所有文章信息
		}
		else{
			$cases=$Case->find();
			$case_id=$cases['id'];
			$Articles =   $Article->where("case_id='$case_id'")->select();//读取所有文章信息
		}
		if(!empty($id)){
	        if(!$Articles) {
				$Articles['article_name']='抱歉，没有文章';
	        }
			$Article_info =   $Article->find($id);//id=$id的文章信息
		}else{
			$Article_info =   $Article->where("case_id='$case_id'")->find();//id=$id的文章信息
		}
		$this->articles=$Articles;
		$this->article_info=$Article_info ;
		$Case = M("Case");
		$this->case_id=$case_id;
		$this->case_info=$Case->find($case_id);//读取id=case_id 的case信息
		$this->display();
    }
}
