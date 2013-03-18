<?php
  class ArticleModel extends Model{
    public function read($case_id){
      $info=M('Artcle');
      $condition['case_id']=$case_id;
      $data=$info->where($condition)->order('sort')->select();
      return $data;
    }
    public function write(){
      
    }
  }
