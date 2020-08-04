<?php

namespace App\Http\Middleware;

use Closure;

// class HelloMiddleware
// {
//    public function handle($request, Closure $next)
//    {
//        $data = [
//            ['name'=>'taro', 'mail'=>'taro@yamada'],
//            ['name'=>'hanako', 'mail'=>'hanako@flower'],
//            ['name'=>'sachiko', 'mail'=>'sachico@happy'],
//        ];
//        $request->merge(['data'=>$data]);
//        return $next($request);
//    }
// }
class HelloMiddleware
{
   public function handle($request, Closure $next)
   {
       $response = $next($request);
       $content = $response->content();

       $pattern = '/<middleware>(.*)<\/middleware>/i';
       $replace = '<a href="http://$1">$1</a>';
       $content = preg_replace($pattern, $replace, $content);

       $response->setContent($content);
       return $response;
   }
}