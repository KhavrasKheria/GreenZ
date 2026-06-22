@extends('layouts.client')

@section('title', 'Đăng ký')
@section('breadcrumb', 'Đăng ký')
@section('content')
    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Đăng ký <br>Tài khoản của bạn</h1>
                        <p>Hãy tạo tài khoản để trải nghiệm mua sắm thực phẩm tươi ngon, nhanh chóng và tiện lợi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form action="{{ route('post-register') }}" class="ltn__form-box contact-form-box" method="POST"
                            id="register-form">
                            @csrf
                            <input type="text" name="name" placeholder="Họ và tên" value="{{ old('name') }}"
                                required oninvalid="this.setCustomValidity('Nhập họ và tên')"
                                oninput="this.setCustomValidity('')">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required
                                oninvalid="this.setCustomValidity('Nhập email')" oninput="this.setCustomValidity('')">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" name="password" placeholder="Mật khẩu" required
                                oninvalid="this.setCustomValidity('Nhập mật khẩu')" oninput="this.setCustomValidity('')">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required
                                oninvalid="this.setCustomValidity('Xác nhận mật khẩu')"
                                oninput="this.setCustomValidity('')">
                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label class="checkbox-inline">
                                <input type="checkbox" name="Checkbox1" value="1"
                                    {{ old('Checkbox1') ? 'checked' : '' }} required
                                    oninvalid="this.setCustomValidity('Vui lòng đồng ý với chính sách xử lý dữ liệu cá nhân.')"
                                    oninput="this.setCustomValidity('')">
                                Tôi đồng ý để GreenZ xử lý dữ liệu cá nhân của tôi nhằm gửi các tài liệu
                                tiếp thị cá nhân hóa theo biểu mẫu đồng ý và chính sách bảo mật.
                            </label>
                            @error('Checkbox1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label class="checkbox-inline">
                                <input type="checkbox" name="Checkbox2" value="1"
                                    {{ old('Checkbox2') ? 'checked' : '' }} required
                                    oninvalid="this.setCustomValidity('Vui lòng đồng ý với điều khoản và chính sách bảo mật.')"
                                    oninput="this.setCustomValidity('')">
                                Bằng cách nhấp vào "tạo tài khoản", tôi đồng ý với chính sách bảo mật.
                            </label>
                            @error('Checkbox2')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">TẠO
                                    TÀI KHOẢN</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                            <p>Bằng việc tạo tài khoản, bạn đồng ý với:</p>
                            <p><a href="#">ĐIỀU KHOẢN & ĐIỀU KIỆN &nbsp; &nbsp; | &nbsp; &nbsp; CHÍNH SÁCH BẢO MẬT</a>
                            </p>
                            <div class="go-to-btn mt-50">
                                <a href="{{ route('login') }}">BẠN ĐÃ CÓ TÀI KHOẢN ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->
@endsection
