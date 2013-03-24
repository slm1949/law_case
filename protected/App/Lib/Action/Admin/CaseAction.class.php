<?php
// 本类由系统自动生成，仅供测试用途
class CaseAction extends Action {

    public function index(){
        session('[start]');// 启动session，同session_start()
        if(empty($_SESSION['user_name'])){          //同$_SESSION['name']的session('name')区别
           $this->display('User:login_front');
         }
        else{
           $this->admin=$_SESSION;
           $Case = M("Case");
           $this->cases = $Case->select();
           $this->display();
        }
    }

    public function read($id=0){
        $this->verify();//权限验证
        $Case   =   M('Case');
        // 读取数据
        $data =   $Case->find($id);
        if($data) {
            $this->data =   $data;// 模板变量赋值
        }else{
            $this->error('数据错误');
        }
        $Article=   M('Article');
        $data2 =   $Article->where("case_id='$id'")->select();
        $this->data2=   $data2;// 模板变量赋值
        $this->display();
      
    }

    public function add(){
        $this->verify();//权限验证
        $this->display();
    }

    public function create(){
        $this->verify();//权限验证
        $Case   =   D('Case');
        if($Case->create()) {
            $result =   $Case->add();
            if($result) {
                $this->success('操作成功！', '__URL__/index');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Case->getError());
        }
    }

    public function edit($id=0){
        $this->verify();//权限验证
        $Case   =   M('Case');
        $this->case   =   $Case->find($id);
        $this->display();
    }

    public function update(){
        $this->verify();//权限验证
        $Case   =   D('Case');
        if($Case->create()) {
            $result =   $Case->save();
            if($result) {
                $this->success('操作成功！', '__URL__/index');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Case->getError());
        }
    }

    public function delete($id=0){
        $this->verify();//权限验证
        $Case = M('Case');
        $Case->where(array('id'=>$id))->delete();

        $this->success('删除成功', '__URL__/index');
    }
    protected function verify(){
      session('[start]');// 启动session
      if(empty($_SESSION['user_name'])){   //增加 后台管理页面的权限验证
           $this->error('你没有登陆，没有管理权限！');
      } 
    }
}
