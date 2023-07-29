@extends('layouts.main')

@section('title', 'Desa')

@section('page-style')
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Desa</h5> <small class="text-muted float-end">(Kecamatan Kemang)</small>
                        </div>
                        <div class="card-body">

                            <div id="accuracy"></div>
                            <div id="precision"></div>
                            <div id="recall"></div>
                            <div id="f1"></div>
                            <div id="auc"></div>
                            <img id="scatterplot" style="height: 300px"; width="300px" src="" alt="Scatterplot">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
