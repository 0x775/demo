<?php
namespace api;
class ApiController extends \Controller {
    function index(){
        //$all=Users::list();
        //print_r($all);exit;
        $domain = "http://192.168.1.198/v1";
        $result=array(
            "domain"=>$domain,
            "base_info_url"=> $domain."/baseinfo",
            "notice_list_url"=> $domain."/notice/list",
            "notice_detail_url"=> $domain."/notice/{id}/show",
            "map_url"=> $domain."/map"


            );
        echo json_encode($result);
    }
}


?>