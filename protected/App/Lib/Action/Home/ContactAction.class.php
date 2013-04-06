<?php
class ContactAction extends BaseAction {

    public function index(){
        $this->display();
    }

    public function create(){
        $Contact   =   D('Contact');
        var_dump($Contact);
        if($Contact->create()) {   // 根据表单提交的POST数据创建数据对象
            $result =   $Contact->add();
            if($result) {
                $this->success('你的留言已提交成功，我们或将与你联系');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Contact->getError());
        }
    }
}
