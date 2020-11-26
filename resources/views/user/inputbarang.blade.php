@extends('layout.main')

@section('icon')
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
@endsection

@section('css')
        <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
        <link href="{{ asset('colorlib-search-9/css/main.css') }}" rel="stylesheet" />
@endsection

@section('judul')
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title" style="margin-left: 400px">Input Barang</h4>
                    </div>
                </div>
@endsection
@section('content')
                <div class="col-md-12">
                    <div class="col-xl-8">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Data Pengiriman</h4>
                            <form action="#" data-parsley-validate novalidate>
                                    <div class="form-group">
                                      <label for="">MarketPlace</label>
                                      <select class="form-control" name="" id="">
                                        <option>shopee</option>
                                        <option>tokopedia</option>
                                        <option>bukalapak</option>
                                      </select>
                                    </div>
                                <div class="form-group">
                                    <label for="emailAddress">Nama Toko*</label>
                                    <input type="email" name="email" parsley-trigger="change" required
                                           placeholder="Nama toko" class="form-control" id="emailAddress">
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Alamat Pengiriman*</label>
                                    <input id="pass1" type="password" placeholder="Alamat Pengiriman" required
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Kode Booking Resi *</label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Kode Booking " class="form-control" id="passWord2">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">No resi *</label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Nomor Resi" class="form-control" id="passWord2">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Catatan Toko *</label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Catatan Toko" class="form-control" id="passWord2">
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
                                                  <label for="namaproduk">Nama Produk</label>
                                                  <select class="form-control" name="list[][id]">
                                                        <option value="">yoyo</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                  <label for="harga">Quantitiy</label>
                                                  <input type="number" class="form-control" name="list[][harga]">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="quantity">Harga</label>
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
                    </div>
                </div>
            </div>
@endsection

@section('js')
        <script type="text/javascript" src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
@endsection

@section('script-js')
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
@endsection
