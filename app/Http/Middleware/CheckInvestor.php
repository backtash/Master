<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckInvestor
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
        if(Auth::check())
		{
			$user=Auth::user();
			$role=$user->role;
			if($role==2)
			{
				return redirect('/home');
			}
			return $next($request);
		}
		return redirect('/home');
    }
}
