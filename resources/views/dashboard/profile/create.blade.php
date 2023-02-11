@extends('layouts.main')



@section('content')

    <form action="{{ url('/dashboard/profile/create') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <label for="ismi">Ism</label>
        <input type="text" id="ismi" name="ismi" class="form-control"  placeholder="Ism"><br>
        @error('ismi')
       <p class="text-danger">{{ $message }}</p> <br>
        @enderror
        <label for="familiyasi">Familiya</label>
        <input type="text" id="familiyasi" name="familiyasi" class="form-control" placeholder="Familiya"><br>
        @error('familiyasi')
        <p class="text-danger">{{ $message }}</p> <br>
        @enderror
        <label for="sharfi">Sharf</label>
        <input type="text" id="sharfi" name="sharfi" class="form-control" placeholder="Sharf"><br>
        @error('sharfi')
        <p class="text-danger">{{ $message }}</p> <br>

        @enderror
        <label for="t_yil">Tugulgan yil</label>
        <input type="date" name="t_yili" class="form-control"><br>
        @error('t_yili')
        <p class="text-danger">{{ $message }}</p> <br>

        @enderror
        <label for="image">Rasm</label>
        <input type="file" id="image" name="image" class="form-control"><br>
        @error('image')
        <p class="text-danger">{{ $message }}</p> <br>

        @enderror
        <label for="more">Batafsil</label>
        <textarea name="batafsil" id="more" cols="30" rows="7" class="form-control"></textarea><br>
        @error('barafsil')
        <p class="text-danger">{{ $message }}</p> <br>

        @enderror
        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>
@endsection
