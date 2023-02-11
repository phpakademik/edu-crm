@extends('layouts.main')


@section('content')

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title mb-4">Donut Chart</h4>

                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <h5 class="mb-0 font-size-20">9595</h5>
                            <p class="text-muted">Activated</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <h5 class="mb-0 font-size-20">36524</h5>
                            <p class="text-muted">Pending</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <h5 class="mb-0 font-size-20">62541</h5>
                            <p class="text-muted">Deactivated</p>
                        </div>
                    </div>
                </div>

                <canvas id="doughnut" height="260"></canvas>

            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="/assets/libs/chart.js/Chart.bundle.min.js"></script>
    <script src="/assets/js/pages/chartjs.init.js"></script>

@endsection
