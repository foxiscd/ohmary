<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShareView
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        View::share('app', [
            'path' => [
                'asset' => asset(''),
            ]
        ]);

        return $next($request);
    }
}
