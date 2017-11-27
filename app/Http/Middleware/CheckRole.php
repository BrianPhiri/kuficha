<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 11/21/2017
 * Time: 9:31 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->role->name === 'Administrator') {
            return $next($request);
        }
        else {
            return redirect('/');
        }
    }
}