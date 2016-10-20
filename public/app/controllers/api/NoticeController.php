<?php
namespace api;
class NoticeController extends \Controller {

    function index(){
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        $page = isset($_GET['page']) ? ($_GET['page']) : 1;
        $skip=0;
        if($page!=1) $skip=($page-1)*20;

        $this->loadDB();
        $query=array();
        $cursor=$this->db->article->find($query)->limit(20)->skip($skip);

        $result=array(); 
        foreach ($cursor as $id => $value) { 
            $data=array("id"=>$id,"title"=>$value['title'],"inputtime"=>$value['inputtime']); 
            array_push($result,$data);  
        } 
        echo json_encode(array("retcode"=>"200","list"=>$result));
    }

    function show($id){
        $this->loadDB();
        $detail = $this->db->article->findOne(array("_id"=>new \MongoId("$id")));
        $this->render('wap/notice_detail.htm',array("detail"=>$detail));
    }
}

?>