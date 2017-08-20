@extends('common.common')
@section('content')
    <div class="small-window">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">设置个人资料</h3>
            </div>
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post">
                    <input type="hidden" name="_token" value="{{  csrf_token()  }}" >
                    <div class="form-group">
                        <label class="col-sm-2 control-label">uName</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><strong>{{ session('uname') }}</strong></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">email</label>
                        <div class="col-sm-10">
                            <input type="email"  class="form-control" name="email" placeholder="email" value="{{ session('email')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">nickName</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nick_name" placeholder="nickName Max:12" value="{{ session('nick_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">sex</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sex" placeholder="男或女" value="{{ session('sex') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">web</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="web" placeholder="web" value="{{session('personal_web')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" placeholder="address" value="{{ session('address') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">describe</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="describe" placeholder="city of china" >{{session('describe')}}</textarea>
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

            /*var num=5;
            setTimeout(function (num){
                document.write(num);
            },1000);*/
            $.ajax({
                type: 'post',
                url: '{{asset('/shop/user/personal_set')}}',
                data: $("form").serialize(),
                success: function(data){
                    alert(data);
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){
                    alert('请稍后再试');
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