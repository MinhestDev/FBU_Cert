@extends('layouts.master')
@section('page_title', 'Quản lý Người dùng')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Quản lý Người dùng</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#new-user" class="nav-link active" data-toggle="tab">Tạo Người dùng mới</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Quản lý Người dùng</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach($user_types as $ut)
                            <a href="#ut-{{ Qs::hash($ut->id) }}" class="dropdown-item" data-toggle="tab">{{ $ut->name }}s</a>
                        @endforeach
                    </div>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="new-user">
                    <form method="post" enctype="multipart/form-data" class="wizard-form steps-validation ajax-store" action="{{ route('users.store') }}" data-fouc>
                        @csrf
                    <h6>Dữ liệu Cá nhân</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="user_type"> Chọn Loại Người dùng: <span class="text-danger">*</span></label>
                                        <select required data-placeholder="Chọn Loại Người dùng" class="form-control select" name="user_type" id="user_type">
                                @foreach($user_types as $ut)
                                    <option value="{{ Qs::hash($ut->id) }}">{{ $ut->name }}</option>
                                @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tên đầy đủ: <span class="text-danger">*</span></label>
                                        <input value="{{ old('name') }}" required type="text" name="name" placeholder="Tên đầy đủ" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Địa chỉ: <span class="text-danger">*</span></label>
                                        <input value="{{ old('address') }}" class="form-control" placeholder="Địa chỉ" name="address" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email: </label>
                                        <input value="{{ old('email') }}" type="email" name="email" class="form-control" placeholder="email@của bạn.com">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tên người dùng: </label>
                                        <input value="{{ old('username') }}" type="text" name="username" class="form-control" placeholder="Tên người dùng">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Điện thoại:</label>
                                        <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" placeholder="+2341234567" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Điện thoại cố định:</label>
                                        <input value="{{ old('phone2') }}" type="text" name="phone2" class="form-control" placeholder="+2341234567" >
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày làm việc:</label>
                                        <input autocomplete="off" name="emp_date" value="{{ old('emp_date') }}" type="text" class="form-control date-pick" placeholder="Chọn ngày...">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="password">Mật khẩu: </label>
                                        <input id="password" type="password" name="password" class="form-control"  >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="gender">Giới tính: <span class="text-danger">*</span></label>
                                        <select class="select form-control" id="gender" name="gender" required data-fouc data-placeholder="Chọn..">
                                            <option value=""></option>
                                            <option {{ (old('gender') == 'Nam') ? 'selected' : '' }} value="Nam">Nam</option>
                                            <option {{ (old('gender') == 'Nữ') ? 'selected' : '' }} value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nal_id">Quốc tịch: <span class="text-danger">*</span></label>
                                        <select data-placeholder="Chọn..." required name="nal_id" id="nal_id" class="select-search form-control">
                                            <option value=""></option>
                                            @foreach($nationals as $nal)
                                                <option {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{ $nal->id }}">{{ $nal->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                {{--Tỉnh/Thành phố--}}
                                <div class="col-md-4">
                                    <label for="state_id">Tỉnh/Thành phố: <span class="text-danger">*</span></label>
                                    <select onchange="getLGA(this.value)" required data-placeholder="Chọn.." class="select-search form-control" name="state_id" id="state_id">
                                        <option value=""></option>
                                        @foreach($states as $st)
                                            <option {{ (old('state_id') == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--Quận/Huyện--}}
                                <div class="col-md-4">
                                    <label for="lga_id">Quận/Huyện: <span class="text-danger">*</span></label>
                                    <select required data-placeholder="Chọn Tỉnh Trước" class="select-search form-control" name="lga_id" id="lga_id">
                                        <option value=""></option>
                                    </select>
                                </div>
                                {{--Nhóm máu--}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bg_id">Nhóm máu: </label>
                                        <select class="select form-control" id="bg_id" name="bg_id" data-fouc data-placeholder="Chọn..">
                                            <option value=""></option>
                                            @foreach($blood_groups as $bg)
                                                <option {{ (old('bg_id') == $bg->id ? 'selected' : '') }} value="{{ $bg->id }}">{{ $bg->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                {{--Ảnh Passport--}}
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

                @foreach($user_types as $ut)
                    <div class="tab-pane fade" id="ut-{{Qs::hash($ut->id)}}">                         <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/T</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Tên người dùng</th>
                                <th>Điện thoại</th>
                                <th>Email</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users->where('user_type', $ut->title) as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $u->photo }}" alt="photo"></td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->username }}</td>
                                    <td>{{ $u->phone }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    {{--Xem Hồ sơ--}}
                                                    <a href="{{ route('users.show', Qs::hash($u->id)) }}" class="dropdown-item"><i class="icon-eye"></i> Xem Hồ sơ</a>
                                                    {{--Chỉnh sửa--}}
                                                    <a href="{{ route('users.edit', Qs::hash($u->id)) }}" class="dropdown-item"><i class="icon-pencil"></i> Chỉnh sửa</a>
                                                @if(Qs::userIsSuperAdmin())

                                                        <a href="{{ route('users.reset_pass', Qs::hash($u->id)) }}" class="dropdown-item"><i class="icon-lock"></i> Đặt lại mật khẩu</a>
                                                        {{--Xóa--}}
                                                        <a id="{{ Qs::hash($u->id) }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Xóa</a>
                                                        <form method="post" id="item-delete-{{ Qs::hash($u->id) }}" action="{{ route('users.destroy', Qs::hash($u->id)) }}" class="hidden">@csrf @method('delete')</form>
                                                @endif

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{--Danh sách Sinh viên Kết thúc--}}

@endsection
