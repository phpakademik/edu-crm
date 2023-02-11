@extends('layouts.main')


@section('content')
    <br>
    <form action="{{ url('/dashboard/groups') }}" method="POST">
        @csrf

        <div class="row">
            <div class="offset-1"></div>
            <div class="col-5">
                <select name="teacher_id" id="" class="form-control">
                    <option value="">O'qituvchi</option>
                    @foreach($teacher as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select><br>
            </div>
            <div class="col-6">
                <input type="text" name="name" placeholder="Gurux nomini" class="form-control"><br>

            </div>
            <div class="col-5">
                <input type="time" name="from"  class="form-control"><br>

            </div>
            <div class="col-6">
                <input type="time" name="to"  class="form-control"><br>

            </div>
            <div class="col-11">
                <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>

            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-info">Saqlash</button>

    </form>
@endsection
