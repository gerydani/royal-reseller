
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
        <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
        <link href="{{ asset('colorlib-search-9/css/main.css') }}" rel="stylesheet" />

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('colorlib-search-9/js/extention/choices.js') }}"></script>

    </head>
    <body>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="margin-left: 400px">Input Barang</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-xl-6">
                        <div class="card-box">
<!-----------------basic form----------------->
                            <h4 class="header-title m-t-0 m-b-30">Data Pengiriman</h4>
                            <form action="#" data-parsley-validate novalidate>
                                    <div class="form-group">
                                      <label class="col-4 col-form-label">Marketplace</label>
                                      <select class="form-control" name="marketplace" id="">
                                        <option>Shopee</option>
                                        <option>Tokopedia</option>
                                        <option>Bukalapak</option>
                                      </select>
                                    </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nama Toko*</label>
                                    <input type="text" name="namatoko" parsley-trigger="change" required
                                           placeholder="Nama toko" class="form-control" id=""
                                           value = "@isset($user->namatoko){{ $user->namatoko }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Alamat Pengiriman*</label>
                                    <input id="" type="text" placeholder="Alamat Pengiriman" required
                                           class="form-control" name="alamat"
                                           value = "@isset($user->alamat){{ $user->alamat }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Kode Booking Resi*</label>
                                    <input type="text" required name="booking"
                                           placeholder="Kode Booking " class="form-control" id=""
                                           value = "@isset($user->booking){{ $user->booking }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">No Resi*</label>
                                    <input type="text" required name="resi"
                                           placeholder="Nomor Resi" class="form-control" id=""
                                           value = "@isset($user->resi){{ $user->resi }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Catatan Toko*</label>
                                    <input type="text" required name="catatan"
                                           placeholder="Catatan Toko" class="form-control" id=""
                                           value = "@isset($user->catatan){{ $user->catatan }}@endisset">
                                </div>
                                <hr />
                                <div class="product-list">
                                    <h3>
                                        Barang
                                        <button type="button" class="btn btn-primary tambah-produk"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
                                    </h3>
                                    <div class="produk">
                                        <div class="row baris">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label class="col-4 col-form-label">Produk</label>
                                                  <select class="form-control" name="list[][id]">
                                                        <option value="">yoyo</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                  <label class="col-4 col-form-label">Quantitiy</label>
                                                  <input type="number" class="form-control" name="list[][harga]">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label class="col-4 col-form-label">Harga</label>
                                                  <input type="text" class="form-control" name="list[][quantity]">
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="padding-top: 30px">
                                                <button type="button" class="btn btn-danger hapus-produk"><i class="fa fa-times" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Submit
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
        <script type="text/javascript">
         $(document).ready(function() {
            $('.tambah-produk').click(function (e) {
                e.preventDefault();
                var count = $(this).find('.count').val();
                var produk = $('.baris').first().clone(true, true);
                $('.produk').append(produk);
            });
            $('.hapus-produk').click(function (e){
                var yoo = $(this).parent().parent();
                if ($('.baris').length > 1) yoo.remove();
            });
        });
        </script>

    </body>
</html>
