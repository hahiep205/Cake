<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Product;

class AuthController extends Controller
{

    /*
    *** Gọi 2 func để hiển thị data cake lên web mỗi khi mở dashboard.
    */
    public function dashboard()
    {
        $products = Product::getProductsFromOneToFive();

        $recentProducts = Product::getLatestTwoProducts();
        
        return view('dashboard', compact('products', 'recentProducts'));
    }

    /*
    *** Func trả về page login
    */
    public function login()
    {
        return view('backend.auth.login');
    }

    /*
    *** Func check account và tạo session ròi redirect tới route với role tương ứng.
    */
    public function logined(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {

            $sessionCode = $this->generateSessionCode();

            auth()->user()->update([
                'session_token' => $sessionCode
            ]);

            if (auth()->user()->isAdmin()) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('dashboard');
            }
        }
        return redirect()->back()->withErrors(['email' => 'Email or password is incorrect.']);
    }

    /*
    *** Func logout, xóa session token khi logout.
    */
    public function logout()
    {
        if (auth()->check()) {
            auth()->user()->destroySession();
        }

        auth()->logout();
        session()->flush();
        return redirect()->route('dashboard');
    }

    /*
    *** Func trả về page register.
    */
    public function register()
    {
        return view('backend.auth.register');
    }

    /*
    *** Func tạo account rồi tự động login, tạo session, redirect tới dashboard. 
    */
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

    /*
    *** Func tạo session, dùng khi login.
    */
    private function generateSessionCode()
    {
        return Str::random(40);
    }

    /*
    *** Func check xem session có valid ko.
    */
    public function checkSession()
    {
        $sessionCode = session('custom_session_code');
        
        if (!$sessionCode) {
            return false;
        }
        
        return true;
    }

    /*
    *** Func return trang profile.
    */
    public function profile()
    {
        return view('profile');
    }

    /*
    *** Function return profile edit.
    */
    public function profile_edit()
    {
        return view('profile_edit');
    }

    /*
    *** Func update info cho user.
    */
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

    /*
    *** Func trả về trang cart.
    */
    public function cart()
    {
        return view('cart');
    }

    /*
    *** Func return admin.
    */
    public function admin()
    {
        return view('backend.auth.admin');
    }

}