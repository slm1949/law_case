<?php
class ArticleAction extends Action {
    public function index($id=0){
           

           $Article   =   M('Article');
           $Articles =   $Article->select();//读取所有文章信息
           if($Articles) {
             $this->articles =   $Articles;
           }
           else{
             $Articles['article_name']='抱歉，没有文章';
             $this->articles=$Articles;
           }
           $Article_info =   $Article->find($id);//id=$id的文章信息
           $this->article_info=$Article_info ;
           $Case = M("Case");
           //$this->cases = $Case->select();//读取所有案例信息
           $case_id=$Article_info['case_id'];
           $this->case_info=$Case->find($case_id);//读取id=case_id 的case信息
	   $this->display();
    }
}
