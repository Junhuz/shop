@extends('common.common')
@section('content')
    <div class="small-window">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">修改密码</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="uName" class="col-sm-2 control-label">用户名:</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><strong>{{session('uname')}}</strong></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="old_password" class="col-sm-2 control-label" >原密码:</label>
                        <div class="col-sm-10">
                            <input id="old_password" type="password" class="form-control" name="old_password" placeholder="oldPassword" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_password" class="col-sm-2 control-label">新密码:</label>
                        <div class="col-sm-10">
                            <input id="new_password" type="password" class="form-control" name="new_password" placeholder="newPassword">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_password-confirm " class="col-sm-2 control-label">重复密码:</label>
                        <div class="col-sm-10">
                            <input id="new_password-confirm" type="password" class="form-control" name="new_password_confirmation" placeholder="passwordAgain" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input  type="button" id="submit" name="submit" value="submit" class="btn btn-success">
                            <input type="reset" value="reset" class="btn btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').on('click',function(){
            $.ajax({
                type: 'post',
                url: '{{asset('/shop/user/password_reset')}}',
                data: $("form").serialize()+"&"+"uName={{session('uname')}}",
                success: function(data) {
                   alert(data);
                },
                error:function(){
                    alert('新密码为6-12位英文字母或数字，请检查表单');
                }
            });
        });
        $(document).keypress(function(event){
            if(event.keyCode==13){
                $('#submit').click();
            }
        });
    });
</script>