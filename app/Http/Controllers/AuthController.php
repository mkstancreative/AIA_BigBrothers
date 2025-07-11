<?php

namespace App\Http\Controllers;

// use App\Models\Admins;

use App\Models\Admins;
use App\Models\Blog;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function createHome(){
        $totalMembers = Member::count();
        $approved = Member::where('status', 'Approved')->count();
        $pending = Member::where('status', 'pending')->count();
        $blog = Blog::count();
        return view('pages.home', compact('totalMembers', 'approved', 'pending', 'blog'));
    }
    public function createLogin(){
        return view("pages.login");
    }

    public function storeAdmin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $validated = $request->only('email', 'password');
    
        if(Auth::guard('admin')->attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route('dashboard')
            ->with('success', 'Login Successfully');
        }
    
        return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
    }

    public function createChangePassword(){
        return view("pages.change-password");
    }
    public function storeChangePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:7|confirmed',
        ]);
    
        $admin = Auth::guard('admin')->user();
    
       
        if (!($admin instanceof \App\Models\Admins)) {
            return back()->withErrors(['auth' => 'Invalid admin instance.']);
        }
    
        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->withErrors(['old_password' => 'Old password is incorrect.']);
        }
    
        $admin->password = Hash::make($request->new_password);
        $admin->save();
    
        return back()->with('success', 'Password changed successfully.');
    }
    
    


    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
        
    }
}
