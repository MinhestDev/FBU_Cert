@extends('layouts.master')
@section('page_title', 'Quản lý Lớp học')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Quản lý Lớp học</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-classes" class="nav-link active" data-toggle="tab">Quản lý Lớp học</a></li>
                <li class="nav-item"><a href="#new-class" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Tạo Lớp mới</a></li>
            </ul>

            <div class="tab-content">
                    <div class="tab-pane fade show active" id="all-classes">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/T</th>
                                <th>Tên</th>
                                <th>Loại Lớp</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($my_classes as $c)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $c->name }}</td>
                                    <td>{{ $c->class_type->name }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    @if(Qs::userIsTeamSA())
                                                    {{--Chỉnh sửa--}}
                                                    <a href="{{ route('classes.edit', $c->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Chỉnh sửa</a>
                                                   @endif
                                                        @if(Qs::userIsSuperAdmin())
                                                    {{--Xóa--}}
                                                    <a id="{{ $c->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Xóa</a>
                                                    <form method="post" id="item-delete-{{ $c->id }}" action="{{ route('classes.destroy', $c->id) }}" class="hidden">@csrf @method('delete')</form>
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

                <div class="tab-pane fade" id="new-class">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info border-0 alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                                <span>Khi một lớp học được tạo, một Phần sẽ tự động được tạo ra cho lớp học đó, bạn có thể chỉnh sửa nó hoặc thêm nhiều phần cho lớp học tại <a target="_blank" href="{{ route('sections.index') }}">Quản lý Phần</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <form class="ajax-store" method="post" action="{{ route('classes.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Tên <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="Tên của Lớp">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="class_type_id" class="col-lg-3 col-form-label font-weight-semibold">Loại Lớp</label>
                                    <div class="col-lg-9">
                                        <select required data-placeholder="Chọn Loại Lớp" class="form-control select" name="class_type_id" id="class_type_id">
                                            @foreach($class_types as $ct)
                                                <option {{ old('class_type_id') == $ct->id ? 'selected' : '' }} value="{{ $ct->id }}">{{ $ct->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button id="ajax-btn" type="submit" class="btn btn-primary">Gửi biểu mẫu <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Danh sách Lớp học Kết thúc--}}

@endsection
