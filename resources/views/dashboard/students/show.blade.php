@extends('layouts.main')


@section('content')
    <br><br>
    <div class="card">
        <div class="card-body">
            <img class="img-fluid text-center" style="width: 20%;height: 50%;" src="{{ str_replace('\\','/',$model->image) }}" alt="">
    <table class="table table-bordered">
        <tbody>

        <tr>
            <td>Id</td>
            <td>{{ $model->id }}</td>
        </tr>

        <tr>
            <td>O'quvchi ismi</td>
            <td>{{ $model->frist_name}}</td>
        </tr>

        <tr>
            <td>O'quvchi familiyasi</td>
            <td>{{ $model->last_name }}</td>
        </tr>
        <tr>
            <td>O'quvchi yoshi</td>
            <td>{{ $model->age}}</td>
        </tr>
        <tr>
            <td>O'quvchi Manzili</td>
            <td>{{ $model->adress}}</td>
        </tr>
        <tr>
            <td>O'quvchi jinsi</td>
            <td>{{ $model->gender}}</td>
        </tr>
        <tr>
            <td>O'quv kursi</td>
            <td>{{ $model->curse->name}}</td>
        </tr>
        <tr>
            <td>Dars vaqti</td>
            <td>{{ $model->dars_vaqti}}</td>
        </tr>
        <tr>
            <td>O'quvchi telefon raqami</td>
            <td>{{ $model->phone}}<br>{{ $model->phone_2 }}</td>
        </tr>


        </tbody>
    </table>

        </div>
    </div>
@endsection
