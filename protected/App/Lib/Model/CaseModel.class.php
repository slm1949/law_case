<?php
  class CaseModel extends Model{
    public function read(){
      $info=M('Case');
      $data=$info->where('1')->order('create_time')->select();
      return $data;
    }
    public function write(){
      
    }
  }
