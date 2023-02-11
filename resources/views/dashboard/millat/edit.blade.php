@extends('layouts.main')


@section('content')
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Millat ni taxrirlash
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/dashboard/millat/'.$model->id) }}"  method="POST">
                @method('PUT')
                @csrf

                <input type="text" name="name" class="form-control" value="{{ $model->name }}"><br>
                <button class="btn btn-primary">Saqlash</button>
            </form>
        </div>

    </div>

@endsection
