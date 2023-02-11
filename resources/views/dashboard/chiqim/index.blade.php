@extends('layouts.main')


@section('content')

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Chiqimlar ro'yxati</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')  }}">Asosiy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chiqimlar</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <div class="row">
                            <div class="col-3">
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="my-4 text-center">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModalScrollable"><i class="fa fa-filter"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col"><a class="btn btn-primary" href="{{ url('/dashboard/chiqim/create')  }}">
                                    <i class="fa fa-plus-circle"></i> Chiqim qo'shish
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="table-responsive">
         <table class="table table-bordered">
             <thead>
             <tr>
                 <th>#</th>
                 <th>Nomi</th>
                 <th>Izoh</th>
                 <th>Sana</th>
                 <th>Narx</th>
             </tr>
             </thead>
            <tbody>
            @php
            $i = 1;
            @endphp
            @foreach($chiqimlar as $chiqim)
                <tr>
                    <th>{{ $i }}</th>
                    <th>{{ $chiqim->title }}</th>
                    <th>{{ $chiqim->description }}</th>
                    <th>{{ $chiqim->date }}</th>
                    <th>{{ $chiqim->price }}</th>
                </tr>
                @php(++$i)
            @endforeach
            </tbody>
         </table>
    </div>
    {{ $chiqimlar->links('vendor.pagination.bootstrap-5') }}

    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">
                        Scrollable Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <form action="">

                <div class="modal-body">
                        <label for="from">Dan:</label>
                        <input type="date" id="from" name="from" class="form-control">
                        <label for="to">Gacha:</label>
                        <input type="date" id="to" name="to" class="form-control">
                    <label for="limit">Limit:</label>
                    <input type="number" id="limit" name="limit" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Qidirish</button>
                </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
