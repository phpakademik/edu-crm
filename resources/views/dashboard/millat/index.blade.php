@extends('layouts.main')


@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/dashboard/millat') }}" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Millatni kiriting"><br>
                        <button class="btn btn-primary">Saqlash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nomi</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach($model as $item)
                                <tr>
                                    <th>{{ $i }}</th>
                                    <th>{{ $item->name }}</th>
                                    <th>
                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/millat/'.$item->id.'/edit')  }}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/millat/delete/'.$item->id)  }}" title="Edit">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </th>
                                </tr>
                                @php
                                $i++;
                                @endphp
                            @endforeach
                            </tbody>
                            <!-- end tbody -->
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
