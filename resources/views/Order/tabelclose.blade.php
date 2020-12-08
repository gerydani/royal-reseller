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
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav list-inline navbar-left">
                                <li class="list-inline-item">
                                    <h4 class="page-title">SIAP DI CLOSE ORDER</h4>
                                </li>
                            </ul>
                            <nav class="navbar-custom">
                                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                    <li class="hide-phone">
                                        <button class="btn btn-danger waves-effect" type="submit">
                                            <i class="fa fa-send-o" aria-hidden="true"></i>
                                            Close Order
                                        </button>
                                    </li>
                                </ul>
                            </nav>
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
                                                    <th>Tanggal Transaksi</th>
                                                    <th>Market Place</th>
                                                    <th>Nama Product</th>
                                                    <th>Quantity</th>
                                                    <th>Nama Toko</th>
                                                    <th>Alamat</th>
                                                    <th>Kode Booking Resi</th>
                                                    <th>No Resi</th>
                                                    <th>Catatan Toko</th>
                                                </tr>
                                                </thead>
                                                @foreach ($package as $pack)
                                                <tr>
                                                    <td>{{ $pack->toko->marketplace }}</td>
                                                    <td>{{ $pack->nama_prod->name }}</td>
                                                    <td>{{ $pack->qty }}</td>
                                                    <td>{{ $pack->toko->nama_toko }}</td>
                                                    <td>{{ $pack->address }}</td>
                                                    <td>{{ $pack->booking_code }}</td>
                                                    <td>{{ $pack->no_resi }}</td>
                                                    <td>{{ $pack->notes }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- container -->
                </div> <!-- content -->
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
