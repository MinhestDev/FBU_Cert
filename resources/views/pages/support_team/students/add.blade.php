@extends('layouts.master')
@section('page_title', 'Nhập học sinh')
@section('content')
    <div class="card">
        <div class="card-header bg-white header-elements-inline">
            <h6 class="card-title">Vui lòng điền vào biểu mẫu dưới đây để nhập một học sinh mới</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <form id="ajax-reg" method="post" enctype="multipart/form-data" class="wizard-form steps-validation" action="{{ route('students.store') }}" data-fouc>
            @csrf
            <h6>Thông tin cá nhân</h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Họ và tên: <span class="text-danger">*</span></label>
                            <input value="{{ old('name') }}" required type="text" name="name" placeholder="Họ và tên đầy đủ" class="form-control">
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
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Địa chỉ Email">
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
                            <label>Điện thoại:</label>
                            <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" placeholder="" >
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Điện thoại di động:</label>
                            <input value="{{ old('phone2') }}" type="text" name="phone2" class="form-control" placeholder="" >
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày sinh:</label>
                            <input name="dob" value="{{ old('dob') }}" type="text" class="form-control date-pick" placeholder="Chọn ngày...">
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

                    <div class="col-md-3">
                        <label for="state_id">Tỉnh/Thành phố: <span class="text-danger">*</span></label>
                        <select onchange="getLGA(this.value)" required data-placeholder="Chọn.." class="select-search form-control" name="state_id" id="state_id">
                            <option value=""></option>
                            @foreach($states as $st)
                                <option {{ (old('state_id') == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="lga_id">Quận/Huyện: <span class="text-danger">*</span></label>
                        <select required data-placeholder="Chọn Tỉnh trước" class="select-search form-control" name="lga_id" id="lga_id">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bg_id">Nhóm máu: </label>
                            <select class="select form-control" id="bg_id" name="bg_id" data-fouc data-placeholder="Chọn..">
                                <option value=""></option>
                                @foreach(App\Models\BloodGroup::all() as $bg)
                                    <option {{ (old('bg_id') == $bg->id ? 'selected' : '') }} value="{{ $bg->id }}">{{ $bg->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block">Tải ảnh đại diện lên:</label>
                            <input value="{{ old('photo') }}" accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc>
                            <span class="form-text text-muted">Định dạng hình ảnh được chấp nhận: jpeg, png. Dung lượng tối đa 2Mb</span>
                        </div>
                    </div>
                </div>

            </fieldset>

            <h6>Thông tin học sinh</h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="my_class_id">Lớp học: <span class="text-danger">*</span></label>
                            <select onchange="getClassSections(this.value)" data-placeholder="Chọn..." required name="my_class_id" id="my_class_id" class="select-search form-control">
                                <option value=""></option>
                                @foreach($my_classes as $c)
                                    <option {{ (old('my_class_id') == $c->id ? 'selected' : '') }} value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                            </select>
                    </div>
                        </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="section_id">Phần: <span class="text-danger">*</span></label>
                            <select data-placeholder="Chọn lớp trước" required name="section_id" id="section_id" class="select-search form-control">
                                <option {{ (old('section_id')) ? 'selected' : '' }} value="{{ old('section_id') }}">{{ (old('section_id')) ? 'Đã chọn' : '' }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="my_parent_id">Phụ huynh: </label>
                            <select data-placeholder="Chọn..."  name="my_parent_id" id="my_parent_id" class="select-search form-control">
                                <option  value=""></option>
                                @foreach($parents as $p)
                                    <option {{ (old('my_parent_id') == Qs::hash($p->id)) ? 'selected' : '' }} value="{{ Qs::hash($p->id) }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="year_admitted">Năm nhập học: <span class="text-danger">*</span></label>
                            <select data-placeholder="Chọn..." required name="year_admitted" id="year_admitted" class="select-search form-control">
                                <option value=""></option>
                                @for($y=date('Y', strtotime('- 10 years')); $y<=date('Y'); $y++)
                                    <option {{ (old('year_admitted') == $y) ? 'selected' : '' }} value="{{ $y }}">{{ $y }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label for="dorm_id">Ký túc xá: </label>
                        <select data-placeholder="Chọn..."  name="dorm_id" id="dorm_id" class="select-search form-control">
                            <option value=""></option>
                            @foreach($dorms as $d)
                                <option {{ (old('dorm_id') == $d->id) ? 'selected' : '' }} value="{{ $d->id }}">{{ $d->name }}</option>
                                @endforeach
                        </select>

                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Số phòng ký túc xá:</label>
                            <input type="text" name="dorm_room_no" placeholder="Số phòng ký túc xá" class="form-control" value="{{ old('dorm_room_no') }}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nhà thể thao:</label>
                            <input type="text" name="house" placeholder="Nhà thể thao" class="form-control" value="{{ old('house') }}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Số hiệu nhập học:</label>
                            <input type="text" name="adm_no" placeholder="Số hiệu nhập học" class="form-control" value="{{ old('adm_no') }}">
                        </div>
                    </div>
                </div>
            </fieldset>

        </form>
    </div>
@endsection
