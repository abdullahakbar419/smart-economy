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
                            <h5 class="mb-0">Pembobotan</h5> <small class="text-muted float-end">(Pakar)</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pembobotan.pakar') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <select id="flag" name="flag">
                                        @foreach ($pakars as $pakar)
                                            <option value="{{ $pakar }}">{{ $pakar }}</option>
                                        @endforeach
                                    </select>
                                    @error('file_upload')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Tenaga Ahli</h5> <small class="text-muted float-end">(Pakar)</small>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
