@extends('layouts.main')



@section('content')

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Xodim qo'shish</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard/staffs')  }}">Xodimlar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Xodim qo'shish</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="card my-3">
        <div class="card-header bg-primary">
            <div class="card-text text-white">
                Xodim malumotlari
            </div>
        </div>
        <div class="card-body">
    <form action="{{ url('/dashboard/staffs/create') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-5">
                <label for="name">Login:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Login ni kiriting"><br>
            </div>
            <div class="col-5">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email ni kiriting"><br>
            </div>
            <div class="col-5">
                <label for="password">Parol:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="**********"><br>
            </div>
            <div class="col-5">
                <label for="role">Lavozimi:</label>
                <select name="role" class="form-control" id="role">
                    <option value="supper_admin">Supper admin</option>
                    <option value="manager">Manager</option>
                    <option value="qabulxona">Qabulxona</option>
                    <option value="teacher">O'qituvchi</option>
                    <option value="kassir">Kassir</option>
                </select>
                <br>
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Qo'shish</button>
    </form>
         </div>
    </div>
@endsection
