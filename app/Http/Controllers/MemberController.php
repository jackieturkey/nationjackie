<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/26
 * Time: 10:23
 */
namespace  App\Http\Controllers;

class MemberController extends  Controller
{

    public  function info($id)
    {
        return Member::getMember();

//      return route('memberinfo');
//        return  'member-info-id-'.$id;
//        return view('member-info');
//        return view('member/info',[
//            'name' => 'Jackie',
//            'age' => 18
//        ]);

    }
}