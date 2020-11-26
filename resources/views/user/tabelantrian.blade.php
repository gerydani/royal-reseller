
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" style="padding-left: 10px">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Packing <span> Barang</span></span><i class="mdi mdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">WAITING LIST PACKAGING</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div>
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <h4 class="m-t-0 header-title">KeyTable example</h4>
                                        <p class="text-muted font-14 m-b-30">
                                            KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                                        </p>
                                        <table id="key-table1" class="table table-bordered tabelantrian">
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
                                            <tr>
                                                <td>shopee</td>
                                                <td>klorofil</td>
                                                <td>3</td>
                                                <td>breng breng</td>
                                                <td>pake gojek yang datang</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" id="ceklist">Complete</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">

                            <!-- Page title -->
                            <ul class="nav navbar-nav list-inline navbar-left">
                                <li class="list-inline-item">
                                    <button class="button-menu-mobile open-left">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item">
                                    <h4 class="page-title">READY TO DELIVER</h4>
                                </li>
                            </ul>

                            <nav class="navbar-custom">

                                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                    <li class="hide-phone">
                                        <form class="app-search">
                                            <input type="text" placeholder="Search..."
                                                   class="form-control">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>

                                </ul>
                            </nav>
                        </div><!-- end container -->
                    </div><!-- end navbar -->
                </div>

                    <div class="content">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <div class="table-responsive">
                                            <h4 class="m-t-0 header-title">Table Selesai Packing</h4>
                                            <p class="text-muted font-14 m-b-30">

                                            </p>
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
                                                <tr>
                                                    <td>shopee</td>
                                                    <td>klorofil</td>
                                                    <td>3</td>
                                                    <td>breng breng</td>
                                                    <td>pake gojek yang datang</td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger" id="remove">Remove</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- container -->


                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 - 2019 © Adminto. Coderthemes.com
                </footer>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="assets/plugins/datatables/dataTables.select.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

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



    </body>
</html>
