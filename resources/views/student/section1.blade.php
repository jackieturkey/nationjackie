@extends('layouts')

@section('header')
    @parent
    header
@stop

@section('sidebar')

    sidebar
@stop

@section('content')
    content

    <!--1.模板中输出php变量-->
    {{--<p>{{$name}}</p>--}}

    <!--2.模板中调用php代码-->
    {{--<p>{{time()}}</p>--}}
    {{--<p>{{date('Y-m-d H:i:s',time())}}</p>--}}
    {{--<p>{{in_array($name,$arr)?'true':'false'}}</p>--}}
    {{--<p>{{var_dump($arr)}}</p>--}}
    {{--<p>{{isset($name) ? $name:'default'}}</p>--}}
    {{--<p>{{$name or 'default'}}</p>--}}

    <!--3.原样输出-->
    {{--<p>@{{$name}}</p>--}}

    {{--4.模板中的注释，在查看页面源代码看不到--}}

    <!--5.引入子视图-->
    {{--@include('student.commn1',['message'=>'error log'])--}}

    <br>
    @if($name == 'jackie')
        I'm jackie
    @elseif($name == 'steven')
        you are steven
    @else
        nobody
    @endif
    <br/>

    @unless($name == 'steven')      <!--相当于if的取反-->
        gougougou
    @endunless

    <br/>
    {{--@for($i=0;$i<10;$i++)--}}
       {{--<p>{{$i}}</p>--}}
    {{--@endfor--}}

    <br/>
    {{--@foreach($students as $student)--}}
        {{--<p>{{$student->username}}</p>--}}
    {{--@endforeach--}}
    <br>
    {{--@forelse($array as $val)--}}
        {{--<p>{{$val->username}}</p>--}}
    {{--@empty--}}
        {{--<p>null</p>--}}
    {{--@endforelse--}}
    <br>
    <a href="{{ url('url') }}">url()</a>
    <br>
    <br>
    <a href="{{ action('StudentController@urltest') }}">action</a>
    <br>
    <br>
    <a href="{{ route('url') }}">route</a>
    <br>
    
@stop