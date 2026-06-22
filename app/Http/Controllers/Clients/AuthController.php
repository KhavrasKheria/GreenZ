<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('clients.pages.register');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'  => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed'
            ],
            [
                'name.required' => 'Tên là bắt buộc',
                'email.required' => 'Email là bắt buộc',
                'email.unique' => 'Email này đã được sử dụng.',
                'password.required' => 'Mật khẩu là bắt buộc.',
                'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
                'password.confirmed' => 'Mật khẩu nhập lại không khớp.'
            ]
        );
        //Check if email exists
        $existingUser = User::where(column: 'email', operator: $request->email)->first();

        if ($existingUser) {
            if ($existingUser->isPending()) {
                toastr()->error('Tài khoản đã được đăng ký và đang đợi kích hoạt');
                return redirect()->route('register');
            }


            return redirect()->route(route: 'register');
        }
        //Create token active
        $token = Str::random(length: 64);

        $user = User::create(attributes: [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(value: $request->password),
            'status' => 'Pending',
            'role_id' => 3,
            'activation_token' => $token,
        ]);

        Mail::to(users: $user->email)->send(mailable: new ActivationMail($user, $token));


        toastr()->success('Đăng ký tài khoản thành công. Vui lòng kiểm tra email của bạn để kích hoạt tài khoản.');
        return redirect()->route('login');
    }
    public function activate($token)
    {
        $user = User::where(column: 'activation_token', operator: $token)->first();

        if ($user) {
            $user->status = 'active';
            $user->activation_token = null;
            $user->save();
            toastr()->success('Kích hoạt tài khoản thành công');
            return redirect()->route('login');
        }

        toastr()->error('Token không hợp lệ hoặc đã hết hạn.');
        return redirect()->back();
    }

    public function showLoginForm()
    {
        return view('clients.pages.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);

        //Check login information
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'active'])) {
            if (in_array(Auth::user()->role->name, ['customer'])) {
                $request->session()->regenerate();
                toastr()->success('Đăng nhập thành công');
                return redirect()->route('home');
            }
        } else {
            Auth::logout();
            toastr()->warning('Bạn không có quyền truy cập vào tài khoản này.');
            return redirect()->back();
        }
        toastr()->error('Thông tin đăng nhập không chính xác hoặc tài khoản chưa kích hoạt.');
        return redirect()->back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        toastr()->success('Đăng xuất thành công');
        return redirect()->route('login');
    }
}
