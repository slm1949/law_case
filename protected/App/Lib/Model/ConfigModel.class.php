<?php
class ConfigModel extends Model{
    public function map(){
        $configs = $this->select();
        $map = array();
        foreach($configs as $config){
            $map[$config['key']]=$config['value'];
        }
        return $map;
    }
}
