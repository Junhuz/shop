@extends('common.common')
@section('content')
    <div  class="clearfix" style="width:100% ; background-color: antiquewhite;">
        <div class="col-md-3" style="padding-top: 10px" >
            <img src="{{asset(session('personal_icon')?session('personal_icon'):'img/zixfr6xyi1BG5HI8OtV5yR0sngyFSpXAOkUbmH88.png')}}" class="img-responsive img-rounded"  >
        </div>
        <div class="col-md-9" style="overflow: hidden">
            <table class="table table-default table-condensed " width="100%" >
                <tr class="h5"><td>账号：{{ session('name') }}</td><td>个人网站：{{session('personal_web')}}</td></tr>
                <tr class="h5"><td>昵称：{{session('nick_name')}}</td><td>加入时间：{{session('create')}}</td></tr>
                <tr class="h5"><td>城市：{{session('address')}} </td><td>性别：{{session('sex')}}</td></tr>
                <tr class="h5"><td>经验值：{{session('experience')}}</td></tr>
            </table>
        </div>
    </div>

    <div class="personal-history">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="panel-title h3">Panel title</p>
                <small><ins>发表于2017-8-18</ins></small>
            </div>
            <div class="panel-body">
                “行（row）”必须包含在 .container （固定宽度）或 .container-fluid （100% 宽度）中，以便为其赋予合适的排列（aligment）和内补（padding）。
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="panel-title h3">Panel title</p>
            </div>
            <div class="panel-body">
                通过“行（row）”在水平方向创建一组“列（column）”。
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="panel-title h3">Panel title</p>
            </div>
            <div class="panel-body">
                如果一“行（row）”中包含了的“列（column）”大于 12，多余的“列（column）”所在的元素将被作为一个整体另起一行排列
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <p class="panel-title h3">Panel title</p>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div>
@endsection