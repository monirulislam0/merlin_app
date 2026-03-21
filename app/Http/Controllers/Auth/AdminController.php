<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vonage\Message\Shortcode\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function showChangePasswordForm()
    {
        return view('auth.admin.change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $admin = Auth::guard('admin')->user();

        // Check if current password matches
        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update password
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->route('admin.dashboard')->with('success', ['Password changed successfully!']);
    }
}
