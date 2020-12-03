@extends('layout.main')

@section('icon')
        <link rel="shortcut icon" href="assets/images/favicon.ico">
@endsection

@section('css')
<!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="{{ asset('assets/plugins/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Sweet Alert css -->
        <link href="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="card-box">
        <h3 class="page-title text-uppercase" style="padding-left: 60px">Peraturan Yang Harus Ditaati</h4>
             <form action="/create" method="get">
                @csrf
                @foreach ($aturan as $atur)
                <ul style="margin-right: 500px">
                        <li class="list-inline" name="aturan">
                        {{ $atur->Peraturan }}
                        </li>
                </ul>
                @endforeach
        <br>
        <hr />
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar" style="padding-left: 10px">
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <h4 class="page-title">LIST PRODUK DAN HARGA KESEPAKATAN</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <h4 class="m-t-0 header-title" style="padding-left: 10px">Table Packing</h4>
                                        <table id="key-table1" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width:5%">No</th>
                                                <th>Nama Product</th>
                                                <th>Harga Kesepakatan</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                        <tbody>
                                            @php
                                                $i=1;
                                            @endphp
                                            @foreach ($user as $use)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $use->nama_produk }}</td>
                                                <td>{{ $use->harga_kesepakatan }}</td>
                                                <td>{{ $use->status }}</td>
                                            @php
                                                $i++;
                                            @endphp
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
            </div>
                <div class="links">
                    <br>
                    <br>
                    <a href="menu" class="f90-logout-button">Menu Toko</a>
                </div>
        </div>
    </div>
<div class="links">
    <br>
    <br>
    <a href="logout" class="f90-logout-button">Log out</a>
</div>
@endsection

@section('js')
<!-- Sweet Alert Js  -->
<script src="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Sweet Alert Js  -->
<script src="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>
@endsection

@section('script-js')
        <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('.tabelantrian').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('.ceklist').click(function (e) {
                e.preventDefault();
                location.reload();
            });
            $('.remove').click(function (e) {
                e.preventDefault();
                location.reload();
            });
        });
        </script>
@endsection
