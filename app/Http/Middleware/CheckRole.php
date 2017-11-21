<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 11/21/2017
 * Time: 9:31 AM
 */

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!$request->user()->hasRole($role)) {
            // Redirect...
            return redirect('/');
        }

        return $next($request);
    }
}