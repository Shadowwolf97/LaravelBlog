<?php namespace App\Http\Middleware;

use Closure;
use Config;

class CheckConfigured {

	/**
	 * Check if the blog has been properly configured, if not
     * redirect user to setup page.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
        header('X-Data: '.Config::get('blog.configured', false));
		if (false) {
            
			if ($request->ajax()) {
				return response('Unauthorized.', 401);
			} else {
				return redirect('/setup');
			}
		}

		return $next($request);
	}

}