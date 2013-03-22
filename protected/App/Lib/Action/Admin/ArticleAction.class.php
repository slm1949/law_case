<?php
class ArticleAction extends Action {

    public function index(){
        $Case = M("Case");
        $this->cases = $Case->select(); 
        $this->display();
    }

    public function read($id=0){
        $Article   =   M('Article');
        // 读取数据
        $data =   $Article->find($id);
        if($data) {
            $this->data =   $data;// 模板变量赋值
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }

    public function add(){
        $this->case_id=$_GET['id'];
        $this->display();
    }

    public function create(){
        $Article   =   D('Article');
        if($Article->create()) {
            $result =   $Article->add();
            if($result) {
                $this->success('操作成功！', '__APP__/Admin/Case/read/id/'.$_POST['case_id']);
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Case->getError());
        }
    }

    public function edit($id=0){
        $Article   =   M('Article');
        $this->article   =   $Article->find($id);
        $this->display();
    }

    public function update(){
        $Article   =   D('Article');
        if($Article->create()) {
            $result =   $Article->save();
            if($result) {
                $this->success('操作成功！', '__APP__/Admin/Case/index');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Case->getError());
        }
    }

    public function delete($id=0){
        $Article = M('Article');
        $Article->where("id=$id")->delete();

        $this->success('删除成功', '__APP__/Admin/Case/index');
    }
}
