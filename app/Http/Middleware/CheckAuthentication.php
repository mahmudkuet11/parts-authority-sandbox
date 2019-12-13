<?php

namespace App\Http\Middleware;

use App\PartsAuthority\Requests\RequestData;
use Closure;

class CheckAuthentication {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $requestData = RequestData::getFromJson($request->get('reqData'));
        
        if ($requestData->isAuthenticated()) {
            return $next($request);
        }
        
        return response()->json([
            'responseStatus' => 'Failed',
            'responseDetail' => 'Authentication Failure'
        ]);
        
    }
}
