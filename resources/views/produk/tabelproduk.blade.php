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
                                        <h4 class="m-t-0 header-title">Table Product</h4>
                                        <table id="key-table1" class="table table-bordered tabelantrian">
                                            <thead>
                                            <tr>
                                                <th style="width:5%">No</th>
                                                <th>Nama Product</th>
                                                <th>SKU</th>
                                                <th>Harga Modal</th>
                                                <th>Harga Kesepakatan</th>
                                                <th>Dimensi(PxLxT)</th>
                                                <th>Berat(Gram)</th>
                                                <th>Opsi</th>
                                            </tr>
                                            </thead>
                                        <tbody>
                                            @php
                                                $i=1;
                                            @endphp
                                            @foreach ($user as $use)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $use->name }}</td>
                                                <td>{{ $use->sku }}</td>
                                                <td>{{ $use->capital_price }}</td>
                                                <td>{{ $use->agreed_price }}</td>
                                                <td>{{ $use->dimension }}</td>
                                                <td>{{ $use->weight }}</td>
                                                <td>
                                                    <a href="{{ route('product.edit', ['id' => $use->id]) }}" class="btn btn-custom btn-rounded waves-effect waves-light w-md m-b-5" id="edit">Edit</a>
                                                    <form action="{{ route('product.destroy', ['id' => $use->id]) }}" method="post">
                                                        @csrf
                                                        {{ method_field('delete') }}
                                                        @if ($use->status == 1)
                                                            <button type="submit" class="btn btn-danger btn-rounded waves-effect waves-light w-md m-b-5" id="remove">Non-aktifkan</button>
                                                        @elseif ($use->status == 0)
                                                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light w-md m-b-5" id="remove">Aktifkan</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <a href= "{{ route('product.create') }}" class="btn btn-success btn-rounded waves-effect waves-light w-md m-b-5">Tambah Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
