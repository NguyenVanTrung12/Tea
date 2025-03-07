<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Trang chủ admin
    public function index()
    {
        return view('admin.index');
    }

    // Hiển thị form đăng nhập
    public function login()
    {
        return view('admin.login');
    }

    public function check_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Kiểm tra đăng nhập với tài khoản cố định
        if ($credentials['email'] === 'canh19012k5@gmail.com' && $credentials['password'] === '12345678') {
            $user = User::firstOrCreate(
                ['email' => 'canh19012k5@gmail.com'],
                ['name' => 'Admin Cố Định', 'password' => bcrypt('12345678')]
            );
            Auth::login($user);
            return redirect()->route('admin.index')->with('success', 'Đăng nhập thành công bằng tài khoản cố định!');
        }

        // Kiểm tra đăng nhập với tài khoản trong database
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index')->with('success', 'Đăng nhập thành công bằng tài khoản đã đăng ký!');
        }

        return redirect()->route('login')->withErrors(['login' => 'Email hoặc mật khẩu không đúng!'])->withInput();
    }
    // Hiển thị form đăng ký
    public function register()
    {
        return view('admin.register');
    }

    // Xử lý đăng ký tài khoản mới
    public function check_register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $data = $request->only('name', 'email');
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    // Đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Đã đăng xuất thành công!');
    }
}