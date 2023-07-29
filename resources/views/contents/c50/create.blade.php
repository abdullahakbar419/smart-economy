@extends('layouts.main')

@section('title', 'Algoritma C5.0')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />


@endsection

@section('page-style')
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
@endsection

@section('page-script')
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src=" https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'csv',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'excel',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'print',
                        className: 'btn-primary'
                    }
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').change(function() {
                var selectedOption = $('input[name="option"]:checked').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                // Kirim permintaan ke server menggunakan AJAX
                $.ajax({
                    url: "{{ route('classification.c50.R') }}",
                    type: "POST",
                    data: {
                        selectedOption: selectedOption,
                        _token: csrfToken
                    },
                    success: function(response) {
                        console.log(response);
                        // Menguraikan respons JSON
                        var data = JSON.parse(response);

                        // Memperbarui elemen HTML dengan hasil evaluasi
                        $('#accuracy').text('Accuracy: ' + data.evaluation.accuracy[0]);
                        $('#precision').text('Precision: ' + data.evaluation.precision.join(
                            ', '));
                        $('#recall').text('Recall: ' + data.evaluation.recall.join(', '));
                        $('#f1').text('F1: ' + data.evaluation.F1.join(', '));
                        $('#auc').text('AUC: ' + data.evaluation.AUC.join(', '));

                        // Menetapkan sumber gambar scatterplot
                        $('#scatterplot').attr('src', '/plot/' + data.scatterplotImage[0]);
                    },
                    error: function(xhr) {
                        // Aksi gagal
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
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
                            <h5 class="mb-0">Tenaga Ahli</h5> <small class="text-muted float-end">(Pakar)</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('classification.c50.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="file_upload">File Upload</label>
                                    <input type="file" class="form-control" id="file_upload" name="file_upload"
                                        placeholder="Masukkan File Kesini" accept=".csv" />
                                    <label class="form-label" for="flag">Agenda</label>
                                    <input type="text" class="form-control" id="flag" name="flag"
                                        placeholder="Masukkan tanda untuk agenda apa" />
                                    @error('file_upload')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="form-label" for="year">Online Shop</label>
                                    <input type="date" class="form-control" id="year" name="year"
                                        placeholder="Tanggal" />
                                    @error('year')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Hasil Klasifikasi</h5> <small class="text-muted float-end">(Algoritma
                                C5.0)</small>
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
                </div> --}}
            </div>
            {{-- <div class="row">
                <div class="col-xl">
                    <!-- Invoice List Table -->
                    <div class="card">
                        <div class="card-datatable table-responsive">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($files as $file)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $file->name_file }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <input type="radio" name="option"
                                                        value="{{ $file->uuid_file }},{{ $file->flag }}">



                                                    <a href="" class="text-body delete-record ti ti-trash ti-sm mx-2"
                                                        data-confirm-delete="true"></a>






                                                    <a href="" target="_BLANK" class="text-body ti ti-eye"></a>


                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>
@endsection
