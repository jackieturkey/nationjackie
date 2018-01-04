<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/26
 * Time: 15:42
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //指定表名
    protected $table = 'student';

    //指定 userid
    protected $primaryKey = 'userid';

    //指定批量赋值的字段

    protected $fillable =  ['username','age'];

    //指定不允许批量赋值的字段
    protected  $guarded = [];

    //保存unix时间戳
    protected function asDateTime($val)
    {
        return $val;
    }


}