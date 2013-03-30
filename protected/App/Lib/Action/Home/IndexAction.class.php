<?php
class IndexAction extends Action {
    public function index(){
      //$this->redirect('Article/index/', array('case_id'=>1));
	import('ORG.Util.Page');// 导入分页类
        $Case   =   M('Case');
	$count      = $Case->count();// 查询满足要求的总记录数
	$Page       = new Page($count,8);// 实例化分页类,传入总记录数和每页的记录数
	$show       = $Page->show();// 分页显示输出
	$this->assign('page',$show);// 赋值分页输出
	// 进行分页数据查询
        $Cases =   $Case->limit($Page->firstRow.','.$Page->listRows)->select();//读取所有案例信息
        if($Cases) {
          $this->cases =   $Cases;
        }
        else{
          $Cases['Case_name']='抱歉，没有案例';
          $this->Cases=$Cases;
       }
	      $this->display();
    }  
}
