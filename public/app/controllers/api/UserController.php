<?php
namespace api;
class UserController extends \BaseController {
    function userLogin(){
        //var_dump($_POST);
        $result=array('retcode'=>'200','result'=>array("username"=>'zhangsan',"uid"=>'12301','token'=>'fb45yojDH1Utbi8LwUh'));

        echo json_encode($result);
    }
}


?>