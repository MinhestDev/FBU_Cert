@extends('layouts.master')
@section('page_title', 'Quản lý Kỳ thi')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Quản lý Kỳ thi</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-exams" class="nav-link active" data-toggle="tab">Quản lý Kỳ thi</a></li>
                <li class="nav-item"><a href="#new-exam" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Thêm Kỳ thi</a></li>
            </ul>

            <div class="tab-content">
                    <div class="tab-pane fade show active" id="all-exams">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>Số thứ tự</th>
                                <th>Tên</th>
                                <th>Kỳ</th>
                                <th>Kỳ học</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exams as $ex)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ex->name }}</td>
                                    <td>{{ 'Kỳ '.$ex->term }}</td>
                                    <td>{{ $ex->year }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    @if(Qs::userIsTeamSA())
                                                    {{--Sửa--}}
                                                    <a href="{{ route('exams.edit', $ex->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Sửa</a>
                                                   @endif
                                                    @if(Qs::userIsSuperAdmin())
                                                    {{--Xóa--}}
                                                    <a id="{{ $ex->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Xóa</a>
                                                    <form method="post" id="item-delete-{{ $ex->id }}" action="{{ route('exams.destroy', $ex->id) }}" class="hidden">@csrf @method('delete')</form>
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

                <div class="tab-pane fade" id="new-exam">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info border-0 alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                                <span>Bạn đang tạo một Kỳ thi cho Kỳ học hiện tại <strong>{{ Qs::getSetting('current_session') }}</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="{{ route('exams.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Tên <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="Tên của Kỳ thi">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="term" class="col-lg-3 col-form-label font-weight-semibold">Kỳ</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Chọn Kỳ" class="form-control select-search" name="term" id="term">
                                            <option {{ old('term') == 1 ? 'selected' : '' }} value="1">Kỳ 1</option>
                                            <option {{ old('term') == 2 ? 'selected' : '' }} value="2">Kỳ 2</option>
                                            <option {{ old('term') == 3 ? 'selected' : '' }} value="3">Kỳ 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Gửi biểu mẫu <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Kết thúc danh sách Kỳ thi--}}

@endsection
