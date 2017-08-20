@extends('common.common')
@section('content')
    <div class="small-window">
        <div class="panel panel-default">
            <label class="panel-heading">管理员登录</label>
            <div class="panel-body">
                <form action="" method="post">
                    <input type="hidden" name="_token" value="{{  csrf_token()  }}" >
                    <div class="form-group">
                        <label >管理员账号</label>
                        <input type="text" name="adminName"  placeholder="name" class="form-control">
                        <span class="trip show" >请填写账号</span>
                    </div>
                    <div class="form-group">
                        <label >管理员密码</label>
                        <input type="text" name="adminPassword"  placeholder="password" class="form-control">
                        <span class=" trip show" >请填写密码</span>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
    </div>
@endsection