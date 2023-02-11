@extends('layouts.main')


@section('content')

    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Chiqim qo'shish</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard/chiqim')  }}">Chiqimlar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Yaratish</li>
                </ol>
            </div>

        </div>
    </div>
    <!-- end page title -->


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Chiqim malumotlari</h4>
                        <form class="outer-repeater" enctype="multipart/form-data" action="{{ url('/dashboard/chiqim')  }}" method="POST">
                            @csrf
                            <div data-repeater-list="outer-group" class="outer">
                                <div data-repeater-item class="outer">
                                    <div class="mb-3">
                                        <label class="form-label" for="formname">Chiqim nomi :</label>
                                        <input type="text" name="title" class="form-control" id="formname" placeholder="Chiqim nomini kiriting">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="formmessage">Chiqim xaqida malumot :</label>
                                        <textarea id="formmessage" class="form-control" name="description" rows="4" placeholder="Kurs xaqida batafsil"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="price">Chiqim uchun tolov summasi:</label>
                                        <input type="number" name="price" class="form-control"  placeholder="Chiqim narx">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="date">Chiqim sanasi:</label>
                                        <input type="date" name="date" class="form-control"  placeholder="Chiqim narx">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Saqlash</button>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>


@endsection
