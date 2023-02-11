@extends('layouts.main')


@section('content')

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
                                <th>Dars vaqti</th>
                                <th></th>

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
                                    <th>{{ $item->from }}</th>
                                    <th>

                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/my/students/')  }}" title="Edit">
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

@endsection
