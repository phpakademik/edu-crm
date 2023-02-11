@extends('layouts.main')


@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Kurslar ro'yxati</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kurslar</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="{{ url('/dashboard/curses/create')  }}">
                            <i class="fa fa-plus-circle"></i> Kurs yaratish
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->



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
                                <th>Rasmi</th>
                                <th>Malumot</th>
                                <th>Status</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i=1
                            @endphp

                            @foreach($model as $item)
                            <tr data-id="1">
                                <td data-field="id" style="width: 80px">{{ $i }}</td>
                                <td data-field="name">{{ $item->name  }}</td>
                                <td data-field="age">{{ $item->image  }}</td>
                                <td data-field="gender">{{ $item->description  }}</td>
                                <td> {{ $item->status == 1 ? 'Aktiv' : 'Aktivlanmagan' }} </td>
                                <td style="width: 100px">
                                    @php
                                    if ($item->status == 1)
                                    {
                                        echo "<a class='btn btn-secondary btn-sm edit' href='/dashboard/curses/inactivate/". $item->id  ."' title='Edit'>
                                        <i class='fa fa-ban'></i>
                                    </a>";
                                    }
                                    else
                                        {
                                          echo "<a class='btn btn-secondary btn-sm edit' href='/dashboard/curses/activate/". $item->id  ."' title='Edit'>
                                        <i class='fas fa-check'></i>
                                    </a>";
                                        }
                                    @endphp
                                    <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/curses/edit/'.$item->id)  }}" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/curses/'.$item->id)  }}" title="Edit">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-secondary btn-sm edit" href="{{ url('/dashboard/curses/delete/'.$item->id)  }}" title="Edit">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                            @php
                            $i++
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
