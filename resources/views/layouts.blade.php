<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel5-@yield('title')</title>
</head>
<style>
    .header{
        width:1000px;
        height:150px;
        margin:0 auto;
        background: ghostwhite;
        border: 1px solid;
    }
    .main{
        width:1000px;
        height:300px;
        margin:0 auto;
        margin-top: 15px;
        clear:both;
    }
    .main .sidebar{
        float: left;
        width:20%;
        height:inherit;
        background: ghostwhite;
        border: 1px solid;
    }
    .main .content{
        float: right;
        width:75%;
        height:inherit;
        background: ghostwhite;
        border: 1px solid;
    }
    .footer{
        width:1000px;
        height:300px;
        margin:0 auto;
        margin-top: 15px;
        background: ghostwhite;
        border: 1px solid;
    }
</style>
<body>
<div class="header">
    @section('header')
    头部
    @show
</div>
<div class="main">
    <div class="sidebar">
        @section('sidebar')
        侧边栏
        @show
    </div>
    <div class="content">
        @yield('content','主要内容区域')
        主要内容区域
    </div>
</div>
<div class="footer">
    @section('footer')
    底部
    @show
</div>
</body>
</html>