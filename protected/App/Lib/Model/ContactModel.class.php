<?php
class ContactModel extends Model{
   // 定义自动验证
    protected $_validate    =   array(
        array('name', 'require', '名称必须填写'),
        array('phone', 'require', '电话号码必须填写'),
        array('email', 'require', '邮箱必须填写'),
        array('message', 'require', '留言必须填写'),
        array('email', 'email', '邮箱格式不对'),
    );

    // 定义自动完成
    protected $_auto    =   array(
        array('time', 'get_client_time', 1, 'callback'),
    );

    public function get_client_time(){
        return date("Y-m-d H:i:s");
    }
}
