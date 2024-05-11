@extends('layouts.master')
@section('page_title', 'Chỉnh sửa Ký túc xá - '.$dorm->name)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Chỉnh sửa Ký túc xá</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-update" data-reload="#page-header" method="post" action="{{ route('dorms.update', $dorm->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Tên <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="{{ $dorm->name }}" required type="text" class="form-control" placeholder="Tên Ký túc xá">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Mô tả</label>
                            <div class="col-lg-9">
                                <input name="description" value="{{ $dorm->description }}"  type="text" class="form-control" placeholder="Mô tả về Ký túc xá">
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

    {{--Chỉnh sửa Ký túc xá Kết thúc--}}

@endsection
