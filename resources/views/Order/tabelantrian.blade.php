@extends('layout.main')

@section('icon')
        <link rel="shortcut icon" href="assets/images/favicon.ico">
@endsection

@php
use App\toko;
@endphp

@section('css')
        {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">  --}}
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
                                                <th>Kode Booking</th>
                                                <th>Market Place</th>
                                                <th>Nama Product</th>
                                                <th>Quantity</th>
                                                <th>Nama Toko</th>
                                                <th>Catatan Toko</th>
                                                <th>Checklist Packaging</th>
                                            </tr>
                                            </thead>
                                            @foreach ($antrian as $queue)
                                            <tr>
                                                <td>{{ $queue->qty }}</td>
                                                <td>{{ toko::join('marketplace','tbltoko.marketplace','marketplace.id')->where('tbltoko.id', $queue->shop_id)->first()->name }}</td>
                                                <td>{{ $queue->qty }}</td>
                                                <td>{{ $queue->qty }}</td>
                                                <td>{{ toko::where('id',$queue->shop_id)->first()->nama_toko }}</td>
                                                <td>{{ $queue->notes }}</td>
                                                <td>
                                                    <form class="" action="{{ route('order.update', ['id' => $queue->id]) }}" method="post">
                                                        @csrf
                                                        {{ method_field('put') }}
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
                                                    <th>Kode Booking</th>
                                                    <th>Market Place</th>
                                                    <th>Nama Produk</th>
                                                    <th>Quantity</th>
                                                    <th>Nama Toko</th>
                                                    <th>Catatan Pembeli</th>
                                                    <th>Checklist Packaging</th>
                                                </tr>
                                                </thead>
                                                @foreach ($package as $pack)
                                                <tr>
                                                    <td>{{ $pack->qty }}</td>
                                                    <td>{{ toko::join('marketplace','tbltoko.marketplace','marketplace.id')->where('tbltoko.id', $pack->shop_id)->first()->name}}</td>
                                                    <td>{{ $pack->qty }}</td>
                                                    <td>{{ $pack->qty }}</td>
                                                    <td>{{ toko::where('id',$pack->shop_id)->first()->nama_toko }}</td>
                                                    <td>{{ $pack->notes}}</td>
                                                    <td>
                                                    <form class="" action="{{ route('order.update', ['id' => $pack->id]) }}" method="post">
                                                        @csrf
                                                        {{ method_field('put') }}
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
            </div>
        </div>
@endsection


@section('js')
        {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  --}}
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
