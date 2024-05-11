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

            <!-- Form tìm kiếm chứng chỉ -->
            <div class="search-form card" style="width: 45%; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); border-radius: 8px; padding: 20px; background-color: #f9f9f9;">
                <div class="card-body">
                    <img src="./global_assets/images/searching.png" style="width:20%; margin-left: 230px" alt="">
                    <h5 class="mb-3" style="text-align: center; font-size: 20px; font-weight: bold; color: #007bff; margin-bottom: 20px;">Tìm kiếm văn bằng chứng chỉ</h5>
                    <form method="GET" action="/tim-kiem">
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="certificate-number" style="display: block; margin-bottom: 5px; font-weight: bold;">Số hiệu văn bằng chứng chỉ:</label>
                            <input type="text" id="certificate-number" name="certificate-number" class="form-control" placeholder="Nhập số hiệu văn bằng chứng chỉ" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="certificate-type" style="display: block; margin-bottom: 5px; font-weight: bold;">Loại văn bằng chứng chỉ:</label>
                            <select id="certificate-type" name="certificate-type" class="form-control" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                                <option value="">Chọn loại văn bằng chứng chỉ</option>
                                <option value="tieng-anh">Chứng chỉ Tiếng Anh</option>
                                <option value="tot-nghiep">Chứng chỉ tốt nghiệp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #007bff; color: #fff; padding: 10px; border-radius: 5px; border: none;">Tìm kiếm <i class="icon-circle-right2 ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
