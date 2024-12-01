<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeacherAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(auth('teacher')->check()) {
            if(isset(Auth()->user()->status) && Auth()->user()->status == 1) {
            
                return $next($request);
            }else {
                Auth()->logout();
                return redirect()->route('login.show','teacher')->with(['error' => 'عذرا لايمكنك تسجيل الدخول حتى تتم الموافقة على طلبك']);
            }
        }
        }

        
    }

