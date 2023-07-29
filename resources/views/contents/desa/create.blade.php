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
                            <form action="{{ route('pembobotan.desa.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="village_name">Nama Desa</label>
                                    <input type="text" class="form-control" id="village_name" name="village_name"
                                        placeholder="Nama Desa" />
                                    @error('pakar_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pasar">Pasar</label>
                                    <input type="number" class="form-control" id="pasar" name="pasar"
                                        placeholder="Pasar Value" min="1" max="3" step=".01" />
                                    @error('pasar')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="jalan">Jalan</label>
                                    <input type="number" class="form-control" id="jalan" name="jalan"
                                        placeholder="Jalan Value" min="1" max="3" step=".01" />
                                    @error('jalan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="sekolah">Sekolah</label>
                                    <input type="number" class="form-control" id="sekolah" name="sekolah"
                                        placeholder="sekolah value" min="1" max="3" step=".01" />
                                    @error('sekolah')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="bank">Bank</label>
                                    <input type="number" class="form-control" id="bank" name="bank"
                                        placeholder="Bank Value" min="1" max="3" step=".01" />
                                    @error('bank')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="koperasi">Koperasi</label>
                                    <input type="number" class="form-control" id="koperasi" name="koperasi"
                                        placeholder="Koperasi Value" min="1" max="3" step=".01" />
                                    @error('koperasi')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="komunitas">Komunitas</label>
                                    <input type="number" class="form-control" id="komunitas" name="komunitas"
                                        placeholder="Komunitas Value" min="1" max="3" step=".01" />
                                    @error('komunitas')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="UMKM">UMKM</label>
                                    <input type="number" class="form-control" id="UMKM" name="umkm"
                                        placeholder="Umkm Value" min="1" max="3" step=".01" />
                                    @error('umkm')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label" for="media-sosial">Media Sosial</label>
                                    <input type="number" class="form-control" id="media-sosial" name="media_sosial"
                                        placeholder="Media Sosial Value" min="1" max="3" step=".01" />
                                    @error('media_sosial')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="online-shop">Online Shop</label>
                                    <input type="number" class="form-control" id="online-shop" name="online_shop"
                                        placeholder="Online Shop Value" min="1" max="3" step=".01" />
                                    @error('online_shop')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label class="form-label" for="flag">Agenda</label>
                                    <input type="text" class="form-control" id="flag" name="flag"
                                        placeholder="Masukkan tanda untuk agenda apa" />
                                    @error('flag')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
