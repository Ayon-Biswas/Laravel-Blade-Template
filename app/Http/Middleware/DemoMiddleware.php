<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class DemoMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        //$request->headers->add(['email'=>'ayonshirsho@gmail.com']); //adding additional property to request header
        //$request->headers->replace(['email'=>'ayonshirsho@gmail.com']); //replacing property of request header
        $request->headers->remove('email'); //removing property of request header. Only needs key( in this case "email" )
         return $next($request);   
        
        
    }
}
