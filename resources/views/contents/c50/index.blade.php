@extends('layouts.main')

@section('title', 'Algortima C5.0')

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
                            <h5 class="mb-0">Hasil Klasifikasi</h5> <small class="text-muted float-end">(Algoritma
                                C5.0)</small>
                        </div>
                        <div class="card-body">
                            @foreach ($c50s as $c50)
                                <form action="{{ route('algoritmaC50.show', ['algoritmaC50' => $c50->id]) }}"
                                    method="GET">
                                    @csrf
                                    <div class="mb-3">
                                        <select id="flag" name="flag">
                                            <option value="{{ $c50->flag }}">{{ $c50->flag }}</option>
                            @endforeach
                            </select>
                            @error('file_upload')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                        @isset($algoritmaC50)
                            <div id="accuracy">Accuracy : {{ $accuracy }}</div>
                            <div id="precision">Precision : {{ $precision }}</div>
                            <div id="recall">Recall : {{ $recall }}</div>
                            <div id="f1">F1 : {{ $f1 }}</div>
                            <div id="auc">AUC : {{ $auc }}</div>
                            <div>
                                <p>Scatterplot : </p>
                                <img id="scatterplot" style="height: 300px"; width="300px"
                                    src="{{ asset('plot/' . $algoritmaC50->plot) }}" alt="Scatterplot">
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="row">
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

            </div>
        </div>
    </div>
@endsection
