@extends('layouts.master')
@section('page_title', 'Chỉnh sửa Người dùng')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Chỉnh sửa Chi tiết Người dùng</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" class="wizard-form steps-validation ajax-update" action="{{ route('users.update', Qs::hash($user->id)) }}" data-fouc>
                @csrf @method('PUT')
                <h6>Dữ liệu Cá nhân</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="user_type"> Chọn Người dùng: <span class="text-danger">*</span></label>
                                <select disabled="disabled" class="form-control select" id="user_type">
                                    <option value="">{{ strtoupper($user->user_type) }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tên đầy đủ: <span class="text-danger">*</span></label>
                                <input value="{{ $user->name }}" required type="text" name="name" placeholder="Tên đầy đủ" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Địa chỉ: <span class="text-danger">*</span></label>
                                <input value="{{ $user->address }}" class="form-control" placeholder="Địa chỉ" name="address" type="text" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email: </label>
                                <input value="{{ $user->email }}" type="email" name="email" class="form-control" placeholder="email@của bạn.com">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Điện thoại:</label>
                                <input value="{{ $user->phone }}" type="text" name="phone" class="form-control" placeholder="" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Điện thoại cố định:</label>
                                <input value="{{ $user->phone2 }}" type="text" name="phone2" class="form-control" placeholder="" >
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        @if(in_array($user->user_type, Qs::getStaff()))
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ngày vào làm:</label>
                                    <input autocomplete="off" name="emp_date" value="{{ $user->staff->first()->emp_date ?? '' }}" type="text" class="form-control date-pick" placeholder="Chọn ngày...">
                                </div>
                            </div>
                        @endif

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender">Giới tính: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="gender" name="gender" required data-fouc data-placeholder="Chọn..">
                                    <option value=""></option>
                                    <option {{ ($user->gender == 'Nam') ? 'selected' : '' }} value="Nam">Nam</option>
                                    <option {{ ($user->gender == 'Nữ') ? 'selected' : '' }} value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nal_id">Quốc gia: <span class="text-danger">*</span></label>
                                <select data-placeholder="Chọn..." required name="nal_id" id="nal_id" class="select-search form-control">
                                    <option value=""></option>
                                    @foreach($nationals as $nal)
                                        <option {{ ($user->nal_id == $nal->id) ? 'selected' : '' }} value="{{ $nal->id }}">{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="state_id">Tỉnh/Thành phố: <span class="text-danger">*</span></label>
                            <select onchange="getLGA(this.value)" required data-placeholder="Chọn.." class="select-search form-control" name="state_id" id="state_id">
                                <option value=""></option>
                                @foreach($states as $st)
                                    <option {{ ($user->state_id == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="lga_id">Quận/Huyện: <span class="text-danger">*</span></label>
                            <select required data-placeholder="Chọn Tỉnh Trước" class="select-search form-control" name="lga_id" id="lga_id">
                                <option value="{{ $user->lga_id ?? '' }}">{{ $user->lga->name ?? '' }}</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bg_id">Nhóm máu: </label>
                                <select class="select form-control" id="bg_id" name="bg_id" data-fouc data-placeholder="Chọn..">
                                    <option value=""></option>
                                    @foreach($blood_groups as $bg)
                                        <option {{ ($user->bg_id == $bg->id ? 'selected' : '') }} value="{{ $bg->id }}">{{ $bg->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    {{--Passport--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Tải Ảnh Passport lên:</label>
                                <input value="{{ old('photo') }}" accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Ảnh chấp nhận: jpeg, png. Kích thước tệp tối đa 2Mb</span>
                            </div>
                        </div>
                    </div>

                </fieldset>



            </form>
        </div>

    </div>
@endsection
