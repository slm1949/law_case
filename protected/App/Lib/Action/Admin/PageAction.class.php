<?php
    class PageAction extends Action {
        public function index(){
            $Page   =   M('Page');
            // 读取数据
            $Pages =   $Page->select();
            $this->pages =   $Pages;// 模板变量赋值
            $this->display();
        }
        
        public function add(){
        
        $this->display();
        }

      public function create(){

        $Page   =   D('Page');
        if($Page->create()) {
            $result =   $Page->add();
            if($result) {
                $this->success('操作成功！', '__APP__/Admin/Page/');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Page->getError());
        }
     }

    public function edit($id=0){
        $Page   =   M('Page');
        $this->page   =   $Page->find($id);
        $this->id=$_GET['id'];
        $this->display();
    }

    public function update(){
        $Page   =   D('Page');
        if($Page->create()) {
            $result =   $Page->save();
            if($result) {
                $this->success('操作成功！', '__APP__/Admin/Page/');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Page->getError());
        }
    }

    public function delete($id=0){

        $Page = M('Page');
        $Page->where("id=$id")->delete();
        $this->success('删除成功');
    }
    }
