<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    public function index()
    {
        return view('license');
    }

    public function activate(Request $request)
    {
        $request->validate([
            'license_key' => 'required'
        ]);

        // 🔐 اینجا Key اصلی شما
        $validKey = "ABC-123-XYZ";

        if ($request->license_key !== $validKey) {
            return back()->with('error', 'Invalid License Key');
        }

        DB::table('licenses')->updateOrInsert(
            ['id' => 1],
            [
                'license_key' => $request->license_key,
                'is_active' => true,
                'expires_at' => now()->addYear()
            ]
        );

        return redirect('/');
    }
}
