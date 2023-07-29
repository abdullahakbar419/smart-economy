@extends('layouts.main')

@section('title', 'Dashboard')

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

            <div class="row">
                <div class="col-xl">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped text-sm">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center align-middle">No</th>
                                        <th rowspan="2" class="text-center align-middle">Desa</th>
                                        <th rowspan="2" class="text-center align-middle">Indeks Smart Economy</th>
                                        <th rowspan="2" class="text-center align-middle">Potensi Smart Economy</th>
                                        <th colspan="9" class="text-center align-middle">Skor Variable</th>
                                        <th rowspan="2" class="text-center align-middle">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle">Pasar</th>
                                        <th class="text-center align-middle">Panjang Jalan (Km)</th>
                                        <th class="text-center align-middle">Sebaran Sekolah</th>
                                        <th class="text-center align-middle">Bank</th>
                                        <th class="text-center align-middle">Koperasi</th>
                                        <th class="text-center align-middle">Komunitas</th>
                                        <th class="text-center align-middle">UMKM</th>
                                        <th class="text-center align-middle">Sosial Media</th>
                                        <th class="text-center align-middle">Online Shop</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Isi dari tabel -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
