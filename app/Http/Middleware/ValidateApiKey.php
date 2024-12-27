<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;


class ValidateApiKey
{
    public function handle(Request $request, Closure $next)
    {
        // dd('die');
        $apiKey = $request->header('X-API-KEY');

        if (!$apiKey || !User::where('api_key', $apiKey)->exists()) {
            return response()->json(['error' => 'Unauthorized: Invalid API Key'], 401);
        }

        return $next($request);
    }
}
