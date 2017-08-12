<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;  
// Route::get('/',function(){  
//     return 'Hello,world!';  
// });  
// Route::get('news/:id','index/News/read');   //查询  
// Route::post('news','index/News/add');       //新增  
// Route::put('news/:id','index/News/update'); //修改  
// Route::delete('news/:id','index/News/delete'); //删除  
//Route::any('new/:id','News/read');        // 所有请求都支持的路由规则  

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

Route::get('getTodayEvents/:date','meet/index/getTodayEvents');//查询今天会议 

Route::post('getUserEvents','meet/index/getUserEvents');//查询用户所有申请记录 

Route::get('getUserID/:cnname','meet/index/getUserID');

Route::post('addEvent','meet/index/addEvent'); 

Route::post('Login','meet/index/Login');  

Route::get('usn2cnn/:username','meet/index/usn2cnn');

Route::get('delCookies','meet/index/delCookies');