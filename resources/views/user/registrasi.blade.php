<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>

    <body>
                <!-- Page-Title -->
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">REGISTRASI</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Form Data</h4>
                            <form action="#" data-parsley-validate novalidate>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nama Toko*</label>
                                    <input type="text" name="namatoko" parsley-trigger="change" required
                                           placeholder="Nama Toko" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nama Owner*</label>
                                    <input type="text" name="namaowner" parsley-trigger="change" required
                                           placeholder="Nama Owner" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Email*</label>
                                    <input id="" type="email" name="email" placeholder="Email Toko" required
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nomor Handphone *</label>
                                    <input type="number" name="nohp" required
                                           placeholder="Nomor Handphone" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Username *</label>
                                    <input type="text" name="username" required
                                           placeholder="username" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Password *</label>
                                    <input type="password" name="password" required
                                           placeholder="Password" class="form-control" id="">
                                </div>
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Registrasi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col -->
            </div> <!-- end container -->
        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

    </body>
</html>
