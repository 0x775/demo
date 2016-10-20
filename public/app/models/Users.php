<?php
class Users extends Models{
    public $collection = 'city';
    
    public function listss(){
        $a=$this->db->admin->find();
        var_dump($a);
    }
}
?>