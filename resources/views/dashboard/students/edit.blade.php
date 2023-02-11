@extends('layouts.main')


@section('content')


    <div class="my-5">

    </div>

    <form action="/dashboard/students/" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-5">
                <label for="frist_name">Ismi</label>
                <input type="text" id="frist_name" name="frist_name" class="form-control" value="{{ $model->frist_name }}">
            </div>
            <div class="col-5">
                <label for="last_name">Familiyasi</label>
                <input type="text" id="last_name" name="last_name" class="form-control"  value="{{ $model->last_name }}">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <label for="sharfi">Sharfi</label>
                <input type="text" id="sharfi"  name="sharfi" class="form-control"  value="{{ $model->sharfi }}">
            </div>
            <div class="col-5">

                <label for="age">Yoshi</label>
                <input type="text" id="age" name="age" class="form-control"  value="{{ $model->age }}">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <label for="adress">Manzili</label>
                <input type="text" id="adress" name="adress" class="form-control"  value="{{ $model->adress }}">
            </div>
            <div class="col-5">

                <label for="gender">Jinsi</label>
                <select name="gender"  id="jinsi" class="form-control"  value="{{ $model->gender }}">
                    <option value="">Tanlang</option>
                    <option value="erkak">Erkak</option>
                    <option value="ayol">Ayol</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <label for="curse_id">Talim yo`nalishi</label>
                <select name="curse_id" id="curse_id" class="form-control"  value="{{ $model->curse_id }}">
                    <option value="">Kursni tanlang</option>
                    @foreach($curses as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-5">
                <label for="millat_id">Millat</label>
                <select name="millat_id" id="millat_id" class="form-control"  value="{{ $model->millat_id }}">
                    <option value="">Millatni tanlang</option>
                    @foreach($millat as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-5">
                <label for="phone">Telefon raqami</label>
                <input type="text" id="phone" name="phone" class="form-control"  value="{{ $model->phone }}">

            </div>
            <div class="col-5">
                <label for="phone">Telefon raqami (qo'shimcha)</label>
                <input type="text" id="phone" name="phone_2" class="form-control"  value="{{ $model->phone_ }}">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <label for="dars_vaqti">Dars vaqti</label>
                <input type="time" name="dars_vaqti" id="dars_vaqti" class="form-control"  value="{{ $model->dars_vaqti }}">
            </div>
            <div class="col-5">
                <label class="form-label" for="formeimage">O`quvchi rasmi:</label>
                <input type="file" class="form-control" id="formeimage" placeholder=""  value="{{ $model->image }}" name="image">
            </div>

        </div>


        <button type="submit" class="btn btn-primary my-4"><i class="fa fa-check"></i>Saqlash</button>

    </form>


@endsection
