<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/26
 * Time: 13:32
 */
namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;

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


}