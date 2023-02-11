@extends('layouts.main')

@php

if (\Illuminate\Support\Facades\Auth::user()->role == 'qabulxona')
    {
        redirect()->back();
    }

@endphp


@section('content')


    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Xodim ro'yxati</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Xodimlar</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="{{ url('/dashboard/staffs/create')  }}">
                            <i class="fa fa-plus-circle"></i> Xodim qo'shish
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            @foreach($users as $user)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div  text-center>
                            <h4>Xodim {{ $user->name }}</h4>
                            Lavozimi: {{ str_replace('_',' ',$user->role) }}
                        </div>

                        <div style="margin-left: 65%">
                            <a href="{{ url('/dashboard/staffs/'.$user->id.'/edit') }}" class="btn btn-success"><i class="fa fa-user-edit"></i></a>
                            <a href="{{ url('/dashboard/staffs/delete/'.$user->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
