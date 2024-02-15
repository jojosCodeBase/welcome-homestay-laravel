<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\VisitorCount;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateVisitorCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();
        $userAgent = $request->userAgent();

        // Check if the visitor is unique
        if (!VisitorCount::where('ip_address', $ipAddress)->where('user_agent', $userAgent)->exists()) {
            VisitorCount::create([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
            ]);
        }
        return $next($request);
    }
}
