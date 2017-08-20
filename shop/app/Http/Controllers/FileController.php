<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function upImg(Request $request){
        if($request->isMethod('get')){
            return view('file.upimg');
        }
        else{
            $file=$request->file('image');
            if($file->isValid()){
                //$OriginalFileName=$file->getClientOriginalName();
                //$OriginalFileExt=$file->getClientOriginalExtension();
                echo $file->store('img');
            }else{
                echo '上传未成功';
            }
        }
    }
}
