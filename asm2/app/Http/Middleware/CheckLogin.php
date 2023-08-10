<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // { if (Auth::check()) {
    //     // Nếu đã đăng nhập, cho phép tiếp tục xử lý yêu cầu
    //     return $next($request);
    // }

    // // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    // return redirect('/login');
    // }
    
}
