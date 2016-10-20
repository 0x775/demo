<?php
namespace api;
class MapController extends \Controller {
    function index(){
        $this->render('wap/map.htm');
    }

    function point(){
        $array=array(
            array(
                "address"=>"189亩",
                "averprice"=>"5600",
                "href"=>"http://192.168.1.198:8000/admin/base/family",
                "img"=>"http://www.onfun.net/disimg/attach/uploadfile/traffic/2011-03-25/20110325031045_393_160x120.jpg",
                "mid"=>"61",
                "protype"=>"120人",
                "sales"=>"2",
                "tel"=>"张大贵",
                "title"=>"竹溪县鄂坪梓桐垭村",
                "x"=>"109.668934",
                "y"=>"32.338892"
                ),
            array(
                "address"=>"325亩",
                "averprice"=>"7116",
                "href"=>"http://192.168.1.198:8000/admin/base/family",
                "img"=>"http://www.onfun.net/disimg/attach/uploadfile/traffic/2011-03-25/20110325031045_393_160x120.jpg",
                "mid"=>"61",
                "protype"=>"120人",
                "sales"=>"2",
                "tel"=>"光头强",
                "title"=>"城关镇温泉沟村",
                "x"=>"109.737348",
                "y"=>"32.35939"
                )

            );
        echo json_encode($array);
    }
}


?>