<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vonage\Message\Shortcode\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function AdminLoginForm()
    {
        // Artisan::call('cache:clear');
        // Artisan::call("config:clear");
        // Artisan::call("view:clear");
        //  Artisan::call("route:clear");
        // Artisan::call("key:generate");
        return view('auth.admin.login');
    }

    public function AdminLogin(Request $request)
    {
        $credential = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credential, $request->filled('remember'))) {
            return redirect()->route('admin.dashboard');
        } else {
            throw ValidationException::withMessages([
                'email' => 'Invalid email or password'
            ]);
        }
    }
    public function AdminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login.form'));
    }
}
