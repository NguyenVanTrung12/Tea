<?php

namespace App\Http\Controllers;

use App\Models\Confix;
use Illuminate\Http\Request;

class ConfixController extends Controller
{


    public function edit()
    {
        $confix = Confix::findOrFail(1);
        return view('admin.config.edit', compact(var_name: 'confix'));
    }

    public function update(Request $request, Confix $confix)
    {
        $confix = Confix::find(1);
        $request->validate([
            'mail1' => 'required|email|max:255',
            'contact' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'hotline' => 'required|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
            'address' => 'required|string|max:500',
        ], [
            'mail1.required' => 'Vui lòng nhập địa chỉ email.',
            'mail1.email' => 'Địa chỉ email không hợp lệ.',
            'mail1.max' => 'Địa chỉ email không được vượt quá :max ký tự.',

            'contact.required' => 'Vui lòng nhập thông tin liên hệ.',
            'contact.string' => 'Thông tin liên hệ phải là chuỗi ký tự.',
            'contact.max' => 'Thông tin liên hệ không được vượt quá :max ký tự.',

            'title.required' => 'Vui lòng nhập tiêu đề.',
            'title.string' => 'Tiêu đề phải là chuỗi ký tự.',
            'title.max' => 'Tiêu đề không được vượt quá :max ký tự.',

            'description.required' => 'Vui lòng nhập mô tả.',
            'description.string' => 'Mô tả phải là chuỗi ký tự.',

            'hotline.required' => 'Vui lòng nhập số hotline.',
            'hotline.regex' => 'Số hotline không hợp lệ. Vui lòng nhập đúng định dạng số điện thoại.',

            'address.required' => 'Vui lòng nhập địa chỉ.',
            'address.string' => 'Địa chỉ phải là chuỗi ký tự.',
            'address.max' => 'Địa chỉ không được vượt quá :max ký tự.',
        ]);

        $confix->update($request->all());

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }


}