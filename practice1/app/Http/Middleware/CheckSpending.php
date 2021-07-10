<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSpending
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->spending < 0){
            return redirect("checkspending");
        }
        return $next($request);
    }
}
