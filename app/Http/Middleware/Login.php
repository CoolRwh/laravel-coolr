<?php

namespace App\Http\Middleware;

use Closure;

class Login
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
        $webUrl = $request->route()->getActionName();
        $rule = ['App\Http\Controllers\Admin\IndexController@welcome','App\Http\Controllers\Admin\IndexController@index'];

        if (!in_array($webUrl,$rule)){
           return redirect('http://log.shiqing.com');
        }
        return $next($request);
    }
}
