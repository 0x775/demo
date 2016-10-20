<?php
//http://blog.csdn.net/black_ox/article/details/22687901

use Purekid\Mongodm\Model;
class Members extends Model{
    static $collection = "base_village";
    function __construct(){
        var_dump($GLOBALS);exit;
    }
}
?>