<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class CodeMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		//user is not moderator
		if(Auth::user()->moderator == 0){
            Auth::logout();
			return redirect('auth/login')->with('status', 'Register/Login as Moderator');
		}

		return $next($request);
	}

}
