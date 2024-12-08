<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EssaiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,?string $name=null,int $age): Response
    {
        /* if($request->path()==="/") {
            dump("okok");
        }
 */     

       /*  dump('okok',$name,$age); */

        return $next($request);
    }
}
