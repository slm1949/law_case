<?php
class IndexAction extends Action {
    public function index(){
      $this->redirect('Article/index/', array('case_id'=>1));

      //  $Case   =   M('Case');
      //  $Cases =   $Case->select();//读取所有案例信息
      //  if($Cases) {
      //    $this->cases =   $Cases;
      //  }
      //  else{
      //    $Cases['Case_name']='抱歉，没有案例';
      //    $this->Cases=$Cases;
      // }
/*           $Case_info =   $Case->find($id);//id=$id的文章信息
       $this->Case_info=$Case_info ;
       $Case = M("Case");
       //$this->cases = $Case->select();//读取所有案例信息
       $case_id=$Case_info['case_id'];
       $this->case_info=$Case->find($case_id);//读取id=case_id 的case信息 */
	     // $this->display();
    }  
}
