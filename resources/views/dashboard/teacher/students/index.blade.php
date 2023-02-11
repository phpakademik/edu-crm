@extends('layouts.main')


@section('content')
    <div class="my-5"></div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ismi</th>
                                <th>Familiyasi</th>
                                <th>O'quv kursi</th>
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
                                    <th>{{ $item->frist_name }}
                                    <th>{{ $item->last_name }}</th>
                                    <th>{{ $item->curse->name }}</th>

                                    <th>
                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/my/students/'.$item->id.'/edit')  }}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/my/students/'.$item->id)  }}" title="Edit">
                                            <i class="fas fa-eye"></i>
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
    {{ Auth::user()->role }}
@endsection
