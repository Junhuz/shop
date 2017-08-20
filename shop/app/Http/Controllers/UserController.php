<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use \Hash;
use \Session;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    //用户登录
    public function login(Request $request){
        if($request->isMethod('post')){
            $name=$request->input('name');
            $password=$request->input('password');
            if($res=User::where('name',$name)->first()){
                if(Hash::check($password,$res->password)){
                    $data=json_decode(json_encode(DB::table('personal_infos')->where('name',$name)->first()),true);
                    session($data);
                    session(['islogin'=>1,'uname'=>$name,'create'=>$res->created_at]);
                    return redirect('shop/user/home');
                }else{
                    return redirect()->back()->with('message','账号密码不匹配')->withInput($request->all());
                }

            }else{
                return redirect()->back()->with('message','该账号还没有注册')->withInput($request->all());
            }

        }
        return view('user.login');
    }
    //用户注册
    public function register(Request $request){
        if($request->isMethod('get')){
            return view('user.register');
        }elseif($request->isMethod('post')){
            $data=$request->input();
            $rules=[
                'name' => 'required|alpha_num|max:12|min:4|unique:users',
                'email' => 'required|string|email|max:50|unique:users',
                'password' => 'required|alpha_num|between:6,12|confirmed',
            ];
            $errors=[
                'required'=>':attribute 必填',
                'min'=>':attribute 长度太短',
                'max'=>':attribute 长度太长',
                'unique'=>':attribute 该邮箱已经注册',
                'confirmed'=>'两次输入的:attribute 不一致',
                'email'=>'必须是:attribute 地址',
                'alpha'=>'必须为字母',
                'alpha_num'=>'必须为字母或数字'
            ];
            $filed=[
                'name'=>'账号',
                'email'=>'邮箱',
                'password'=>'密码'];
            $validator=\Validator::make(
                $data,$rules,$errors,$filed
            );
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if(User::create(['name'=>$request->input('name'),'email'=>$request->input('email'),'password'=>bcrypt($request->input('password'))])){
                return redirect('shop/user/login')->with('message','恭喜你注册成功，请登录');
            }else{
                return redirect()->back()->with('message','不明错误');
            };
        }
    }


    public function logout(){
        session()->flush();
        setcookie(session_name(),'',time()-3600);
        return redirect('/shop/user/login');
    }


    public function lucky(Request $request){
        if($request->isMethod('get')){
            return view('shop.lucky');
        }elseif($request->isMethod('post')){
            //首先要验证用户是否登录，验证用户是否具有抽奖资格，验证库存
            $score=mt_rand(1,10000)*0.0001; 	//包括1和10000
            //概率
            $lucky1=0.01;	//一等奖概率
            $lucky2=0.02;	//二等奖概率
            $lucky3=0.05;	//三等奖概率
            $lucky4=0.1;	//四等奖概率
            $lucky5=0.2;	//五等奖概率
            $lucky6=0.3;	//六等奖概率
            $lucky7=0.01;	//七等奖概率
            $lucky8=0.03;	//八等奖概率
            $lucky9=0.05;	//九等奖概率
            //概率范围
            $range1=$lucky1;
            $range2=$lucky1+$lucky2;
            $range3=$lucky1+$lucky2+$lucky3;
            $range4=$lucky1+$lucky2+$lucky3+$lucky4;
            $range5=$lucky1+$lucky2+$lucky3+$lucky4+$lucky5;
            $range6=$lucky1+$lucky2+$lucky3+$lucky4+$lucky5+$lucky6;
            $range7=$lucky1+$lucky2+$lucky3+$lucky4+$lucky5+$lucky6+$lucky7;
            $range8=$lucky1+$lucky2+$lucky3+$lucky4+$lucky5+$lucky6+$lucky7+$lucky8;
            $range9=$lucky1+$lucky2+$lucky3+$lucky4+$lucky5+$lucky6+$lucky7+$lucky8+$lucky9;

            switch($score){
                //获0等奖
                case $score>$range9:
                    $lucky='prize0';
                    break;
                //获9等奖
                case $score>$range8:
                    $lucky='prize9';
                    break;
                //获8等奖
                case $score>$range7:
                    $lucky='prize8';
                    break;
                //获7等奖
                case $score>$range6:
                    $lucky='prize7';
                    break;
                //获6等奖
                case $score>$range5:
                    $lucky='prize6';
                    break;
                //获5等奖
                case $score>$range4:
                    $lucky='prize5';
                    break;
                //获4等奖
                case $score>$range3:
                    $lucky='prize4';
                    break;
                //获3等奖
                case $score>$range2:
                    $lucky='prize3';
                    break;
                //获2等奖
                case $score>$range1:
                    $lucky='prize2';
                    break;
                //获1等奖
                case $score<=$range1:
                    $lucky='prize1';
                    break;
            }
            return json_encode(['lucky'=>$lucky,'code'=>1,]);
        }
    }
    //个人资料
    public function personal(){
        return view('user.personal');

    }
    //设置个人资料
    public function personalInfoSet(Request $request){

        if($request->isMethod('post')){
            //数组形式
            $data=$request->all();
            $name=session('uname');
            $email=$request->get('email');
            $nick_name=$request->get('nick_name');
            $sex=in_array($request->get('sex'),['男','女'])?$request->get('sex'):'未知';
            $personal_web=$request->get('web');
            $address=$request->get('address');
            $describe=$request->get('describe');
            $experience=111;
            /*$dsn = 'mysql:dbname=shop;host=127.0.0.1';
            $user = 'root';
            $password = '#Chuqv9580';
            $pdo=new PDO($dsn,$user,$password);
            $sth=$pdo->prepare();*/
            $arr=['name','email','nick_name','sex','personal_web','address','describe','experience'];
            if(DB::table('personal_infos')->where('name',$name)->first()){
                if(DB::table('personal_infos')->where('name',$name)->update(compact($arr))>=1){
                    session(compact($arr));
                    return "update个人资料成功!";
                }else{
                    return '没有更新新内容';
                }
            }else{
                if(DB::table('personal_infos')->insert(compact($arr))){
                    session(compact($arr));
                    return 'create个人资料成功';
                }else{
                    return 'create失败';
                }
            }
        }else{
            return view('user.personal_info_set');
        }
    }
    //修改密码
    public function passwordReset(Request $request){
        if($request->isMethod('post')){
            //数组形式
            $roles=[
                'uName'=>'required|exists:users,name',
                'old_password'=>'required|alpha_num',
                'new_password'=>'required|alpha_num|between:6,12|confirmed',
            ];
            $this->validate($request,$roles);
            $oldData=User::where('name',$request->get('uName'))->first();
            if(Hash::check($request->get('old_password'),$oldData->password)){
                if(User::where('name',$request->get('uName'))->update(['password'=>bcrypt($request->get('new_password'))])){
                    return '修改成功';
                }else{
                    return '系统出错，请联系管理员';
                }

            }else{
                return "原密码有误";
            }

        }else{
            return view('user.password_reset');
        }
    }
    //用户头像
    public function personalIcon(Request $request){
        if($request->isMethod('post')){
            if($file=$request->file('icon')){
                $name=session('name');
                if($file->isValid()){
                    if(in_array( strtolower($file->extension()),['jpeg','jpg','gif','gpeg','png'])){
                        $icon= $file->store('icon');
                        if(DB::table('personal_infos')->where('name',$name)->first()){
                            DB::table('personal_infos')->where('name',$name)->update(['personal_icon'=>$icon]);
                            session(['personal_icon'=>$icon]);
                            return redirect()->back()->with('message','上传成功');
                        }else{
                            DB::table('personal_infos')->insert(['name'=>$name,'personal_icon'=>$icon]);
                            session(['personal_icon'=>$icon]);
                            return redirect()->back()->with('message','上传成功');
                        }
                    }else{
                        return redirect()->back()->with('message','上传的文件不合法');
                    }

                }else{
                    return redirect()->back()->with('message','上传失败');
                }
            }else{
                return redirect()->back()->with('message','请选择上传的文件');
            }

        }
        else{
            return view('user.personal_icon');
        }
    }



}
