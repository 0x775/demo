<?php
namespace api;
class MembersController extends \Controller {

    function index(){

        //$members=\Members::all();
        //echo json_encode($members->toArray());
        //$a=123;
    }

    function show($id){
        $this->render('wap/member_detail_index.htm');
    }

    //基本信息
    function baseInfo($id){
        $this->render('wap/member_detail_baseinfo.htm');
    }

    //家庭成员
    function family($id){
        $this->render('wap/member_detail_family.htm');
    }

    //生产生活条件
    function life($id){
        $this->render('wap/member_detail_life.htm');
    }

    //收入信息
    function shouru($id){
        $this->render('wap/member_detail_shouru.htm');
    }

    //搬迁信息
    function banqian($id){
        $this->render('wap/member_detail_banqian.htm');
    }

}


?>