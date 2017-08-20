<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $filtRoute=[
            '/shop/user/login',
            '/shop/user/register',
        ];
        $path=$request->getPathInfo();
        if(in_array($path,$filtRoute)){
            if(session('islogin')===1){
                return  redirect()->back()->with('login','请先退出登录');
            }else{
                return $next($request);
            }
        }
        if($request->session()->get('islogin')===1){
            return $next($request);
        }
        return redirect('/shop/user/login')->with(['message'=>'请先登录']);

    }
}
