<?php
class ArticleModel extends Model{
   // 定义自动验证
    protected $_validate    =   array(
        array('articlename','require','名称必须填写'),
    );

    // 定义自动完成
    protected $_auto    =   array(
        array('create_time', 'get_client_time' , 1, 'callback'),
        array('modify_time', 'get_client_time' , 2, 'callback'),
    );
    public function get_client_time(){
        return date("Y-m-d H:i:s");
    }
}
