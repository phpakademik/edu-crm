@extends('layouts.main')


@section('content')


    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Guruxlar ro'yxati</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Guruxlar</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="{{ url('/dashboard/groups/create')  }}">
                            <i class="fa fa-plus-circle"></i> Gurux qo'shish
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Guruxlar ro'yxati</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Guruxlar</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="{{ url('/dashboard/groups/create')  }}">
                            <i class="fa fa-plus-circle"></i> Gurux qo'shish
                        </a>
                    </div>
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
                                <th>O'qituvchi</th>
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
                                    <th>{{ $item->teacher->ismi}}</th>
                                    <th>{{ $item->from }}</th>
                                    <th>
                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/students/'.$item->id.'/edit')  }}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/students/'.$item->id)  }}" title="Edit">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/students/delete/'.$item->id)  }}" title="Edit">
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
                        {{ $model->links() }}
                        <!-- end table -->
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
