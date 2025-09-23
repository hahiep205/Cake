<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Product;

class AuthController extends Controller
{
    public function dashboard()
    {
        $products = Product::getProductsFromOneToFive();

        $recentProducts = Product::getLatestTwoProducts();
        
        return view('dashboard', compact('products', 'recentProducts'));
    }

    public function login()
    {
        return view('backend.auth.login');
    }

    public function logined(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {

            $sessionCode = $this->generateSessionCode();

            auth()->user()->update([
                'session_token' => $sessionCode
            ]);

            if (auth()->user()->isAdmin()) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        }
        return redirect()->back()->withErrors(['email' => 'Email or password is incorrect.']);
    }

    public function logout()
    {
        if (auth()->check()) {
            auth()->user()->destroySession();
        }

        auth()->logout();
        session()->flush();
        return redirect()->route('dashboard');
    }

    public function register()
    {
        return view('backend.auth.register');
    }

    public function registered(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user',
        ]);

        auth()->login($user);

        $sessionCode = $this->generateSessionCode();
        
        $user->update([
            'session_token' => $sessionCode
        ]);

        return redirect()->route('dashboard');
    }

    private function generateSessionCode()
    {
        return Str::random(40);
    }

    public function checkSession()
    {
        $sessionCode = session('custom_session_code');
        
        if (!$sessionCode) {
            return false;
        }
        
        return true;
    }

    public function profile()
    {
        return view('profile');
    }

    public function profile_edit()
    {
        return view('profile_edit');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

    public function cart()
    {
        return view('cart');
    }

    public function admin()
    {
        return view('backend.auth.admin');
    }

}