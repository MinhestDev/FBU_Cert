@extends('layouts.master')
@section('page_title', 'Mã PIN Kỳ Thi')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Mã PIN Kỳ Thi</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#valid-pins" class="nav-link active" data-toggle="tab">Mã PIN Hợp Lệ</a></li>
                <li class="nav-item"><a href="#used-pins" class="nav-link" data-toggle="tab"> Mã PIN Đã Sử Dụng</a></li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane fade show active" id="valid-pins">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center alert alert-info border-0 alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                                <span>Có <strong>{{ $pin_count }}</strong> mã PIN hợp lệ chưa được sử dụng</span>
                            </div>
                        </div>
                    </div>

                    @foreach($valid_pins->chunk(4) as $chunk)
                        <div class="row">
                            @foreach($chunk as $vp)
                                <div class="col-md-3">{{ $vp->code }}</div>
                            @endforeach
                        </div>
                    @endforeach

                </div>

                {{--Mã PIN Đã Sử Dụng--}}
                <div class="tab-pane fade" id="used-pins">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info border-0 alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                                <div class="text-center">  <span>Tổng cộng có <strong>{{ $used_pins->count() }}</strong> mã PIN đã được sử dụng và có thể không còn hợp lệ nữa </span>

                                    <a id="used-pins" onclick="confirmDelete(this.id)" href="#" class="btn btn-danger btn-sm ml-2"><i class="icon-trash mr-1"></i> Xóa TẤT CẢ Mã PIN Đã Sử Dụng</a>
                                    <form method="post" id="item-delete-used-pins" action="{{ route('pins.destroy', 'used-pins') }}" class="hidden">@csrf @method('delete')</form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table datatable-button-html5-columns">
                                <thead>
                                <tr>
                                    <th>S/T</th>
                                    <th>Mã PIN</th>
                                    <th>Người Sử Dụng</th>
                                    <th>Loại Người Dùng</th>
                                    <th>Được Sử Dụng Cho Học Sinh</th>
                                    <th>Ngày Sử Dụng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($used_pins as $up)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $up->code }}</td>
                                        <td><a href="{{ $up->user->user_type == 'student' ? route('students.show', Qs::hash(Qs::getSRByUserID($up->user->id)->id)) : route('users.show', Qs::hash($up->user->id)) }}">{{ $up->user->name }}</a></td>
                                        <td>{{ $up->user->user_type }}</td>
                                        <td><a href="{{ route('students.show', Qs::hash(Qs::getSRByUserID($up->student->id)->id))  }}">{{ $up->student->name }}</a></td>
                                        <td>{{ $up->updated_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{--Kết thúc Danh sách Mã PIN--}}

@endsection
