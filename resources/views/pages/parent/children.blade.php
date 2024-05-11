@extends('layouts.master')
@section('page_title', 'My Children')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Con của Tôi</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <table class="table datatable-button-html5-columns">
            <thead>
            <tr>
                <th>Số thứ tự</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>ADM_No</th>
                <th>Phần</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $s->user->photo }}" alt="photo"></td>
                    <td>{{ $s->user->name }}</td>
                    <td>{{ $s->adm_no }}</td>
                    <td>{{ $s->my_class->name.' '.$s->section->name }}</td>
                    <td>{{ $s->user->email }}</td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left">
                                    <a href="{{ route('students.show', Qs::hash($s->id)) }}" class="dropdown-item"><i class="icon-eye"></i> Xem Hồ Sơ</a>
                                    <a target="_blank" href="{{ route('marks.year_selector', Qs::hash($s->user->id)) }}" class="dropdown-item"><i class="icon-check"></i> Bảng Điểm</a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>

{{--Danh sách Học sinh Kết thúc--}}

@endsection
