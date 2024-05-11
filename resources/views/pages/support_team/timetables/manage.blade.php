@extends('layouts.master')
@section('page_title', 'Quản lý Bảng thời gian học')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-bold">{{ $ttr->name.' ('.$my_class->name.')'.' '.$ttr->year }}</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#manage-ts" class="nav-link active" data-toggle="tab">Quản lý Khoảng thời gian</a></li>
                <li class="nav-item"><a href="#add-sub" class="nav-link" data-toggle="tab">Thêm Môn học</a></li>
                <li class="nav-item"><a href="#edit-subs" class="nav-link " data-toggle="tab">Chỉnh sửa Môn học</a></li>
                <li class="nav-item"><a target="_blank" href="{{ route('ttr.show', $ttr->id) }}" class="nav-link" >Xem Bảng thời gian học</a></li>
            </ul>

            <div class="tab-content">
                {{--Thêm Khoảng thời gian--}}
                @include('pages.support_team.timetables.time_slots.index')
                {{--Thêm Môn học--}}
                @include('pages.support_team.timetables.subjects.add')
                {{--Chỉnh sửa Môn học--}}
                @include('pages.support_team.timetables.subjects.edit')
            </div>
        </div>
    </div>

    {{--Kết thúc Quản lý Bảng thời gian học--}}

@endsection
