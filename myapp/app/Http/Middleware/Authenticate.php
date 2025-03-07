<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Chuyển hướng tới trang login nếu chưa đăng nhập
     */
    protected function redirectTo($request): ?string
    {
        // Chuyển hướng đúng tới route 'admin.login'
        return $request->expectsJson() ? null : route('login');
    }
}

