@extends('layouts.main')


@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Kurslar ro'yxati</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard/curses')  }}">Kurslar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Taxrirlash</li>
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
                        <h4 class="card-title">Yangi kurs malumotlari</h4>
                        <form class="outer-repeater" action="{{ url('/dashboard/curses/update/'.$model->id)  }}" method="POST">
                            @csrf
                            <div data-repeater-list="outer-group" class="outer">
                                <div data-repeater-item class="outer">
                                    <div class="mb-3">
                                        <label class="form-label" for="formname">Kurs nomi :</label>
                                        <input type="text" name="name" class="form-control" id="formname" value="{{ $model->name  }}" placeholder="Kurs nomini kiriting">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="formeimage">Kurs uchun rasm :</label>
                                        <input type="file" class="form-control" id="formeimage" value="{{ $model->image }}" placeholder="" name="image">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="formmessage">Kurs xaqida malumot :</label>
                                        <textarea id="formmessage" class="form-control" name="description" rows="4" placeholder="Kurs xaqida batafsil">{{ $model->description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <select name="status" class="form-control">
                                            <option value="">Statusni tanlang</option>
                                            <option value="1">Aktiv</option>
                                            <option value="0">Aktivlanmagan</option>
                                        </select>
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
