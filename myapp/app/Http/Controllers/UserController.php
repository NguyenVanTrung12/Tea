<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'desc')->paginate(5);
        return view("admin.user.index", compact('user'));
    }

    public function create()
    {
        return view("admin.user.create");
    }

    // Store a newly created user in storage
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
        ], [
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'name.string' => 'Tên người dùng phải là chuỗi ký tự.',
            'name.max' => 'Tên người dùng không được vượt quá :max ký tự.',

            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Địa chỉ email không được vượt quá :max ký tự.',
            'email.unique' => 'Địa chỉ email đã được sử dụng.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Mã hóa mật khẩu
        ]);

        return redirect()->route('user.index')->with('success', 'Thêm người dùng thành công!');
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    // Update the specified user in storage


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id), // Bỏ qua kiểm tra unique cho email hiện tại
            ],
            'password' => 'nullable|string|min:6',
        ], [
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'name.string' => 'Tên người dùng phải là chuỗi ký tự.',
            'name.max' => 'Tên người dùng không được vượt quá :max ký tự.',

            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Địa chỉ email không được vượt quá :max ký tự.',
            'email.unique' => 'Địa chỉ email đã được sử dụng.',

            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'Cập nhật người dùng thành công!');
    }
    // Remove the specified user from storage
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Xóa người dùng thành công!');
    }
}
