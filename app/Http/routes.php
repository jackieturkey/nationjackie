<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//基础路由
//Route::get('/', function () {
//    return view('welcome');
//});
////基础路由
//Route::get('basic1',function (){
//    return 'hello world';
//});

//Route::get('basic',function(){
//    return 'Hello World';
//});
//
//Route::post('basepost',function(){
//   return 'basepost';
//});
//
//
//Route::match(['get','post'],'multi',function(){
//    return 'multi';
//});
//
//Route::any('name',function(){
//    return 'name';
//});


//Route::get('user/{id}',function($id){
//    return 'user-'.$id;
//});
//
//Route::get('user/{name?}',function($name){
//    return 'user-'.$name;
//});



    //路由别名
//    Route::get('user/member-center',['as'=>'center',function(){
//        return route('center');
//    }]);

//    //路由群组
//    Route::group(['prefix'=>'member',function() {
//            Route::get('user/center',['as'=>'center',function() {
//                return route('center');
//            }]);
//
//            Route::any('multi',function() {
//                return 'member-multi';
//            });
//    }]);









    //控制器和路由关联

//    Route::get('member/info','MemberController@info');
//      Route::get('member/info',
//          [
//              'uses'=>'MemberController@info',
//              'as'  => 'memberinfo'
//
//      ]);

    Route::any('member/{id}',['uses' => 'MemberController@info' ])
                ->where('id','[0-9]+');
    Route::any('test1',['uses' => 'StudentController@test1' ]);
    Route::any('query1',['uses' => 'StudentController@query1' ]);
    Route::any('query2',['uses' => 'StudentController@query2' ]);
    Route::any('query4',['uses' => 'StudentController@query4' ]);
    Route::any('query5',['uses' => 'StudentController@query5' ]);
    Route::any('orm1',['uses' => 'StudentController@orm1' ]);
    Route::any('orm2',['uses' => 'StudentController@orm2' ]);
    Route::any('orm3',['uses' => 'StudentController@orm3' ]);
    Route::any('orm4',['uses' => 'StudentController@orm4' ]);
    Route::any('section1',['uses' => 'StudentController@section1' ]);
    Route::any('urltest',['as'=>'url','uses' => 'StudentController@urltest' ]);
    Route::any('student/request1',['uses' => 'StudentController@request1']);

    Route::group(['middleware' => ['web']],function() {
        Route::any('session1',['as'=>'url','uses' => 'StudentController@session1' ]);
        Route::any('session2',['as'=>'url','uses' => 'StudentController@session2' ]);
    });
    Route::any('response',['as'=>'url','uses' => 'StudentController@response' ]);


















////多请求定义数组路由
//Route::match(['get','post'],'multi',function (){
//    return 'multi';
//});
////多请求任意路由
//Route::any('anyone',function(){
//    return 'this is anyone';
//});
//
////路由参数,可以利用正则去匹配路由
//Route::get('user/{id}',function($name = null) {
//    return 'user'.$name;
//});

//路由别名
//Route::get('user/center',['as' => 'center'],function(){
//    return route('center');
//});


//路由群组
//Route::get(['group' => 'member' ],function(){
//        Route::get('basic1',function (){
//            return 'hello world';
//        Route::match(['get','post'],'multi',function (){
//            return 'multi';
//});


//路由中输出视图
//Route::get('view',function(){
//    return view('welcome');
//});

//关联控制器与路由
    //方法1
    //Route::get('member/info','MemberController@info');

    //方法2
    //Route::get('member/info',['uses' => 'MemberController@info']);

//起别名
//Route::get('member/info',['uses' => 'MemberController@info',
//    'as' =>'memberinfo'
//]);


//传参数
//Route::get('member/{id}',['uses' => 'MemberController@info'])
//->where('id','[0-9]+');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//
//Route::group(['middleware' => ['web']], function () {
//    //
//});
