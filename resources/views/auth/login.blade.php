@extends('layouts.login_master')

@section('content')
<div class="page-content login-cover">
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">
            <!-- Form đăng nhập -->
            <form class="login-form card mr-4" method="post" action="{{ route('login') }}" style="width: 45%; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); border-radius: 8px; padding: 20px; background-color: #f9f9f9;">
                @csrf
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="./global_assets/images/logo_fbu.png" width="20%" alt="">
                        <h5 class="mb-0" style="font-weight: bold; color: #007bff;">Đăng nhập vào tài khoản của bạn</h5>
                        <span class="d-block text-muted">Nhập thông tin của bạn</span>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger alert-styled-left alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <span style="font-weight: bold; color: #8B0000;">Oops!</span> {{ implode('<br>', $errors->all()) }}
                    </div>
                    @endif
                    <div class="form-group ">
                        <input type="text" class="form-control" name="identity" value="{{ old('identity') }}" placeholder="Tên đăng nhập hoặc Email" style="border-radius: 5px; border: 1px solid #ccc;">
                    </div>
                    <div class="form-group ">
                        <input required name="password" type="password" class="form-control" placeholder="{{ __('Mật khẩu') }}" style="border-radius: 5px; border: 1px solid #ccc;">
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <div class="form-check mb-0">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-input-styled" {{ old('remember') ? 'checked' : '' }} data-fouc>
                                Ghi nhớ
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}" class="ml-auto">Quên mật khẩu?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Đăng nhập <i class="icon-circle-right2 ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
