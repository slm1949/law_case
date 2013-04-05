<?php
class ContactAction extends BaseAction {

    public function index(){
        $contact=M('Contact');
        $this->contacts=$contact->select();
        $this->display();
    }
}
