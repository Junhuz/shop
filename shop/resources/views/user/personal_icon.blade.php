@extends('common.common')
@section('content')
    <div class="small-window">
        <div class="panel panel-default">
            <label class="panel-heading">上传头像</label>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden"  name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label class="col-md-2 control-label">选择头像</label>
                        <div class="col-md-10" >
                            <input type="file" class="btn btn-default btn-block" name="icon" placeholder="Image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-info">开始上传</button>
                    <p class="text-center trip">{{session('message')}}</p>

                </form>
            </div>
        </div>
    </div>
@endsection