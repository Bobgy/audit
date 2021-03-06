<?php namespace App\Http\Middleware;

use Closure;

class AuthMiddleware {

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    $path = $request->path();
    if ($path == '/' || $path == 'login') {
      return $next($request);
    }
    if (is_null(session('user_id'))) {
      return redirect('/');
    }
    return $next($request);
  }

}
