<?php 
namespace App\Middleware;
 
class TokenMiddleware
{
    public function __invoke($request, $response, $next)
    {
        // header('WWW-Authenticate: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJwcmVjaW91c19ha2FoIiwiaWF0IjoxNTkwNDQxNjMyLCJleHAiOjE1OTA0NTEyMDB9.-xO4Rix8W68O38V1mwnj2Xsy2gXF-NIAHraSbTeCL2w');
        // $request->withHeader('Authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJwcmVjaW91c19ha2FoIiwiaWF0IjoxNTkwNDQxNjMyLCJleHAiOjE1OTA0NTEyMDB9.-xO4Rix8W68O38V1mwnj2Xsy2gXF-NIAHraSbTeCL2w');
        // $request->query('token', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJwcmVjaW91c19ha2FoIiwiaWF0IjoxNTkwNDQxNjMyLCJleHAiOjE1OTA0NTEyMDB9.-xO4Rix8W68O38V1mwnj2Xsy2gXF-NIAHraSbTeCL2w');
        // header('Location: '.$request->here.'/?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJwcmVjaW91c19ha2FoIiwiaWF0IjoxNTkwNDQxNjMyLCJleHAiOjE1OTA0NTEyMDB9.-xO4Rix8W68O38V1mwnj2Xsy2gXF-NIAHraSbTeCL2w');
        return $next($request, $response);
    }
}