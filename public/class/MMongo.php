<?php
/*
http://www.php.net/manual/zh/class.mongo.php
*/
class MMongo {
    public static $db=null;
    public static function init($host,$db_name,$options=array()){
        $mongo = new Mongo($host);
        self::$db=$mongo->selectDB($db_name);
    }

    public static function getObject(){
        return self::$db;
    }

    public static function findOne(){
        return self::$db->admin->findOne();
    }
}