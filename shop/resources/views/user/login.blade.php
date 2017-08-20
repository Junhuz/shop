@extends('common.common')
@section('content')
    <div class="small-window">
        <div class="panel panel-default">
            <label class="panel-heading">用户登录</label>
            <div class="panel-body">
                <form action="" method="post">
                    <input type="hidden" name="_token" value="{{  csrf_token()  }}" >
                    <span class="trip">{{session('message')?session('message'):''}}</span>
                    <div class="form-group">
                        <label >用户账号</label>
                        <input type="text" name="name"  placeholder="name" class="form-control" value="{{old('name')}}" required autofocus>
                        <span class="trip" >{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group">
                        <label >用户密码</label>
                        <input type="password" name="password"  placeholder="password" class="form-control" required>
                        <span class="trip" >{{$errors->first('password')}}</span>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
    </div>
@endsection