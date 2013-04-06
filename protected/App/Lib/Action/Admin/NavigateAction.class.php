<?php
class NavigateAction extends BaseAction {
	public function index(){
	    $navigate=D('Navigate');
		$navigates=$navigate->order('sort')->select();
		$this->assign('navigates',$navigates);
		$this->display();
	}

    public function create(){
        $Navigate   =   D('Navigate');
        if($Navigate->create()) {
            $navigates =   $Navigate->add();
            if($navigates) {
                $this->success('导航添加成功！');
            }else{
                $this->error('导航添加错误！');
            }
        }else{
            $this->error($Navigate->getError());
        }
    }

    public function edit($id=0){
        $Navigate   =   M('Navigate');
        $this->Navigate   =   $Navigate->find($id);
        $this->display();
    }

    public function update(){
        $Navigate   =   D('Navigate');
        if($Navigate->create()) {
            $navigates =   $Navigate->save();
            if($navigates) {
                $this->success('操作成功！', '__APP__/Admin/Navigate');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Navigate->getError());
        }
    }

    public function delete($id=0){
        $Navigate = M('Navigate');
        $Navigate->where("id=$id")->delete();
        $this->success('删除成功');
    }
}
