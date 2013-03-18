<?php
// 本类由系统自动生成，仅供测试用途
class CaseAction extends Action {

    public function index(){
        $Case = M("Case");
        $this->cases = $Case->select(); 
        $this->display();
    }

    public function read($id=0){
        $Case   =   M('Case');
        // 读取数据
        $data =   $Case->find($id);
        if($data) {
            $this->data =   $data;// 模板变量赋值
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }

    public function add(){
        $this->display();
    }

    public function create(){
        $Case   =   D('Case');
        if($Case->create()) {
            $result =   $Case->add();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Case->getError());
        }
    }

    public function edit($id=0){
        $Case   =   M('Case');
        $this->case   =   $Case->find($id);
        $this->display();
    }

    public function update(){
        $Case   =   D('Case');
        if($Case->create()) {
            $result =   $Case->save();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Case->getError());
        }
    }

    public function delete($id=0){
        $Case = M('Case');
        $Case->delete($id);

        $this->redirect('Case/index');
    }
}