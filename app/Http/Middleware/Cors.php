<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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
        header('Access-Control-Allow-Origin: http://localhost:8081');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, Application');
        return $next($request);
    }
}


// <?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;

// class Cors
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle(Request $request, Closure $next)
//     {
//         return $next($request);
//         header('Access-Control-Allow-Origin:  http://localhost:8080');
//         header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
//         header('Access-Control-Allow-Methods:  POST, PUT');
//     }
// }
