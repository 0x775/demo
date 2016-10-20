<?php
Route::get('/test','testController@index');

Route::group(['prefix' => '/v1'], function()
{
    //api-index
    Route::get('/index','api\ApiController@index'); 
    //用户登录
    Route::post('/user/login', 'api\UserController@userLogin');  
    //贫困户列表
    Route::get('/member/list', 'api\MembersController@index');   
    //贫困户详情
    Route::get('/member/(:any)/show', 'api\MembersController@show'); 
    //基本信息
    Route::get('/member/(:any)/baseinfo',['as'=>'member-detail-baseinfo','uses'=>'api\MembersController@baseInfo']); 
    //贫困户家庭成员
    Route::get('/member/(:any)/family', ['as'=>'member-detail-family','uses'=>'api\MembersController@family']); 
    //贫困户生活详情
    Route::get('/member/(:any)/life', ['as'=>'member-detail-life','uses'=>'api\MembersController@life']); 
    //贫困户收入信息
    Route::get('/member/(:any)/shouru',['as'=>'member-detail-shouru','uses'=>'api\MembersController@shouru']);
    //贫困搬迁信息
    Route::get('/member/(:any)/banqian', ['as'=>'member-detail-banqian','uses'=>'api\MembersController@banqian']); 


    //基本信息
    Route::get('/baseinfo', 'api\BaseInfoController@index'); 

    //通知公告
    Route::get('/notice/list', 'api\NoticeController@index');
    Route::get('/notice/(:any)/show', 'api\NoticeController@show');

    Route::get('/map', 'api\MapController@index'); //map
    Route::post('/map/point', 'api\MapController@point');   //map.point.json
});


Route::dispatch();
?>
