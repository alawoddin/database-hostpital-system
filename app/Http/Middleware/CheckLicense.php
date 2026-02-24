<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckLicense
{
    public function handle(Request $request, Closure $next)
    {
        $license = DB::table('licenses')->where('is_active', true)->first();

        if (!$license && !$request->is('license') && !$request->is('license/*')) {
            return redirect('/license');
        }

        if ($license && $license->expires_at && now()->gt($license->expires_at)) {
            abort(403, 'License Expired');
        }

        return $next($request);
    }
}
