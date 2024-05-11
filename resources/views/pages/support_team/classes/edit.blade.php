@extends('layouts.master')
@section('page_title', 'Chỉnh sửa Lớp học - '.$c->name)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Chỉnh sửa Lớp học</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-update" data-reload="#page-header" method="post" action="{{ route('classes.update', $c->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Tên <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="{{ $c->name }}" required type="text" class="form-control" placeholder="Tên của Lớp">
                            </div>
                        </div>

                      {{--
                      <div class="form-group row">
                            <label for="teacher_id" class="col-lg-3 col-form-label font-weight-semibold">Giáo viên</label>
                            <div class="col-lg-9">
                                <select data-placeholder="Chọn Giáo viên" class="form-control select-search" name="teacher_id" id="teacher_id">
                                    <option value=""></option>
                                    @foreach($teachers as $t)
                                        <option {{ $c->teacher_id == $t->id ? 'selected' : '' }} value="{{ Qs::hash($t->id) }}">{{ $t->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                      --}}

                        <div class="form-group row">
                            <label for="class_type_id" class="col-lg-3 col-form-label font-weight-semibold">Loại Lớp</label>
                            <div class="col-lg-9">
                                <input class="form-control" disabled="disabled" value="{{ $c->class_type->name }}" title="Loại Lớp" type="text">
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

    {{--Chỉnh sửa Lớp học Kết thúc--}}

@endsection
