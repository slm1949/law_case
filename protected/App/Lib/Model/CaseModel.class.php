<?php
class CaseModel extends Model{
   // 定义自动验证
    protected $_validate    =   array(
        array('name','require','名称必须填写'),
    );

    // 定义自动完成
    protected $_auto    =   array(
        array('create_time', 'time' , 1, 'function'),
        array('modify_time', 'time' , 2, 'function'),
    );
}