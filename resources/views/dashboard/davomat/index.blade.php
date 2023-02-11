@extends('layouts.main')


@section('content')


    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Davomat olish</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Davomat</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">

                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>O'qituvchi</th>
            <th>Gurux nomi</th>
            <th>dars vaqti</th>
            <th>Izoh</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($groups as $group)
            <tr>
                <th>{{ $i }}</th>
                <th>{{ $group->teacher->fullname }}</th>
                <th>{{ $group->name }}</th>
                <th>{{ $group->from }} dan {{ $group->to }} gacha</th>
                <th>{{ $group->description }}</th>
                <th><a href="/dashboard/davomat/check/{{ $group->id }}" class="btn btn-info"><i class="fa fa-check"></i></a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
