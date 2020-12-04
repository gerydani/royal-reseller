@extends('layout.main')

@section('icon')
        <link rel="shortcut icon" href="assets/images/favicon.ico">
@endsection

@section('css')
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar" style="padding-left: 10px">
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <h4 class="page-title">WAITING LIST PACKAGING</h4>
                            </li>
                        </ul>
                        {{--  <nav class="navbar-custom">
                            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul>
                        </nav>  --}}
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
                                        <h4 class="m-t-0 header-title">Table Packing</h4>
                                        <table id="key-table1" class="table table-bordered tabelantrian">
                                            <thead>
                                            <tr>
                                                <th>Market Place</th>
                                                <th>Nama Product</th>
                                                <th>Quantity</th>
                                                <th>Nama Toko</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Catatan Toko</th>
                                                <th>Checklist Packaging</th>
                                            </tr>
                                            </thead>
                                            @foreach ($antrian as $queue)
                                            <tr>
                                                <td>{{ $queue->marketplace }}</td>
                                                <td>{{ $queue->nama_prod->name }}</td>
                                                <td>{{ $queue->qty }}</td>
                                                <td>{{ $queue->nama_toko }}</td>
                                                <td>{{  }}</td>
                                                <td>{{ $queue->catatan }}</td>
                                                <td>
                                                    <form class="" action="{{ route('order.update', 'id' => $queue->id]) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-rounded" id="ceklist">Complete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav list-inline navbar-left">
                                <li class="list-inline-item">
                                    <h4 class="page-title">READY TO DELIVER</h4>
                                </li>
                            </ul>
                            {{--  <nav class="navbar-custom">
                                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                    <li class="hide-phone">
                                        <form class="app-search">
                                            <input type="text" placeholder="Search..."
                                                   class="form-control">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </nav>  --}}
                        </div>
                    </div>
                </div>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <div class="table-responsive">
                                            <h4 class="m-t-0 header-title">Table Selesai Packing</h4>
                                            <table id="key-table" class="table table-bordered tabelantrian">
                                                <thead>
                                                <tr>
                                                    <th>Market Place</th>
                                                    <th>Nama Product</th>
                                                    <th>Quantity</th>
                                                    <th>Nama Toko</th>
                                                    <th>Catatan Toko</th>
                                                    <th>Checklist Packaging</th>
                                                </tr>
                                                </thead>
                                                @foreach ($package as $pack)
                                                <tr>
                                                    <td>{{ $pack->marketplace }}</td>
                                                    <td>{{ $pack->nama_prod->name }}</td>
                                                    <td>{{ $pack->qty }}</td>
                                                    <td>{{ $pack->nama_toko }}</td>
                                                    <td>{{ $pack->catatan }}</td>
                                                    <td>
                                                    <form class="" action="{{ route('order.update', 'id' => $pack->id]) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-rounded" id="remove">Remove</button>
                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- container -->
                </div> <!-- content -->
                {{--  <footer class="footer text-right">
                    ROYAL RESELLER
                </footer>  --}}
            </div>
        </div>
@endsection


@section('js')
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.select.min.js"></script>
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
