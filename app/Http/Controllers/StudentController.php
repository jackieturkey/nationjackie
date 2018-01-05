<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/26
 * Time: 13:32
 */
namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

    public function test1()
    {
       // $data = DB::select('select * from student');
      // echo "<pre>";
      //  print_r($data);
      // exit();


    }


    public function query1()
    {
        $result = DB::table('student')->insert(
                ['username'=>'json','age'=>33 ]
        );

        var_dump($result);
    }


    public  function  query2()
    {
//        $num = DB::table('student')
//            ->where('userid',11)
//            ->update(['age'=>50]);
//        var_dump($num);

        //$num = DB::table('student')->increment('age');
        $num = DB::table('student')->increment('age',3);
        var_dump($num);
    }


    public function query4()
    {
        /*$bool = DB::table('student')->insert([
            ['userid' => 13,'username' => 'gailun','age' => 26],
            ['userid' => 14,'username' => 'lanbo','age' => 13],
            ['userid' => 15,'username' => 'rinue','age' => 19],
            ['userid' => 16,'username' => 'nanqiang','age' => 70]

        ]);

        var_dump($bool);  */

        //get方法

       //$students =  DB::table('student')->get();



        /*
         //first
        $students = DB::table('student')
            ->orderBy('userid','DESC')
            ->first();
        //where
        $students = DB::table('student')
            ->where('userid','>',13)
            ->get();

         * */
        //多条件查询
//        $students = DB::table('student')
//                        ->whereRaw('userid > ? and age < ? ',[13,20])
//                        ->get();

        //pluck   返回结果集中指定的字段
        $name = DB::table('student')
                       ->pluck('username');

        //lists
        $username = DB::table('student')
                        ->lists('username','userid');
        //select   指定查找
        $names = DB::table('student')
                    ->select('userid','username')
                    ->get();
        //chunk
        $data = DB::table('student')->chunk(2,function($stus){
            echo '<pre>';
            var_dump($stus);
            return  false;
        });

    }

    public function query5()
    {
        //聚合函数
        //count
        $re = DB::table('student')->count();
        echo "<pre>";
        print_r($re);
        exit();

    }

    public function orm1()
    {
        $arr = Student::all();

        $id = Student::find(13);

        // findOrFail
        echo "<pre>";
        var_dump($id);
        exit();
    }

    public function orm2()
    {
        //使用模型新增数据
//        $stu = new Student();
//
//        $stu ->username = 'zhanyuan';
//        $stu ->age = 20;
//        $bool = $stu ->save();
//        var_dump($bool);

        //使用模型create新增数据
        $student = Student::create(

                ['username' => 'amy','age' => 30]
        );

        //firstOrCreate

    }

    public function orm3()
    {

//        $student = Student::find(17);
//        $student->username = 'benjamin';
//        $bool = $student->save();
//        echo '<pre>';
//        var_dump($bool);


        //批量更新
        $bool = Student::where('userid','>',16)->update(['age' => 45]);
        var_dump($bool);


    }

    public function orm4()
    {
        //通过模型删除
//       $student = Student::find(17);
//       $bool = $student->delete();
//       var_dump($bool);

        //通过主键删除
//       $num =  Student::destory(18);
//       var_dump($num);

        //where
        $num = Student::where('userid','>',15)->delete();

        var_dump($num);
    }

    public function section1()
    {
        $array = [];
        $students = Student::get();
        $name = 'jackie';
        $arr = ['jackie','steven'];
        return view('student.section1',['name' => $name,'arr' => $arr,'students' => $students]);     //渲染模板    . 或者  /  都可以
    }

    public function urltest()
    {
        return view('student.urltest');
    }
    
    //表单篇
    public function request1( \Illuminate\Http\Request $request )
    {
        // 1.取值
            //echo $request->input('name');
            //echo $request->input('gender','未知');
        //判断有没有
        if ( $request->has('name') ) {
            echo $request->input('name');
        } else {
            echo 'no parameter';
        }

        //取url中所有参数
        $res = $request->all();
        var_dump($res);

        //2.判断请求类型

        echo $request->method();
        if ( $request->isMethod('GET') ) {
            echo 'yes';
        } else {
            echo 'no';
        }

        $res = $request->ajax();
        var_dump($res);

        $res = $request->is('student/*');
        var_dump($res);

        echo $request->url();
    }

    public function session1(\Illuminate\Http\Request $request)
    {
        //1.http   request
            //$request->session()->put('key1','value1');
            //echo  $resuqest->session()->get('key1');

        // session()
//            session()->put('key2','value2');
//            echo session()->get('key2');

        //3.Session
        //存储数据到session
            //Session::put('key3','value3');
        //获取session的值
            //echo Session::get('key3');
        //使用push 方法将值添加到session数组中

        //取出session数据并删除
//        $res = Session::pull('student','default');
//        var_dump($res);


        //取出所有的值
            /*
             *   $res = Session::all();
                 echo '<pre>';
                    print_r($res);
             * */


        //是否存在某一个值   has
        //forget   删除session中指定key的值

        //flush   清空所有session信息


        //暂存数据，第一次有 后面 就消失了
        Session::flash('key-zanshi','value-zanshi');

    }

    public function session2(\Illuminate\Http\Request $resuqest)
    {
           // echo Session::get('key-zanshi');

        return Session::get('message','暂无信息');
        //return  'session2';

    }

    public function response()
    {
        //相应json
//        $data = [
//            'errCode' => 0,
//            'errMsg' => 'success',
//            'data' => 'jackie'
//        ];
//
//        return response()->json($data);

        //重定向
        //return redirect('session2');
        //return redirect('session2')->with('message','快闪数据');

        //action

        //route

    }
}