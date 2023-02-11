@extends('layouts.main')


@section('content')

    <div class="card">
        <div class="card-body">
            <div class="card-img">
{{--                <img src="{{ asset('storage/students/42qq8kAtjnXkGdeF96vx1XkWvWAewBGbDl0iP87u.jpg') }} alt="{{ $model->image }}">--}}
                <img src="/storage/app/public/students/42qq8kAtjnXkGdeF96vx1XkWvWAewBGbDl0iP87u.jpg" alt="{{ $model->image }}">

            </div>

    <table class="table table-bordered">
        <tbody>

            <tr>
                <td>Id</td>
                <td>{{ $model->id }}</td>
            </tr>

            <tr>
                <td>Kurs nomi</td>
                <td>{{ $model->name}}</td>
            </tr>

            <tr>
                <td>Kurs xaqida batafsil</td>
                <td>{{ $model->description }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $model->status == 1 ? 'Aktiv' : 'Aktivlamagan'}}</td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>

@endsection
