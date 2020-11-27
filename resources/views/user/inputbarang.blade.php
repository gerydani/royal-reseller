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
                            <form action="/order" data-parsley-validate novalidate method="post">
                                @csrf
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
                                           value = "@isset($order->alamat){{ $order->alamat }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Kode Booking Resi*</label>
                                    <input type="text" required name="booking"
                                           placeholder="Kode Booking " class="form-control" id=""
                                           value = "@isset($order->booking){{ $order->booking }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">No Resi*</label>
                                    <input type="text" required name="resi"
                                           placeholder="Nomor Resi" class="form-control" id=""
                                           value = "@isset($order->resi){{ $order->resi }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Catatan Toko*</label>
                                    <input type="text" required name="catatan"
                                           placeholder="Catatan Toko" class="form-control" id=""
                                           value = "@isset($order->catatan){{ $order->catatan }}@endisset">
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
                                                  <select class="form-control" name="kode[]">
                                                        <option value="yoyo">yoyo</option>
                                                        <option value="yaya">yaya</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                  <label class="col-4 col-form-label">Quantitiy</label>
                                                  <input type="number" class="form-control" name="qty[]">
                                                  {{-- value="@isset($detail->qty){{ $detail->qty }}" --}}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label class="col-4 col-form-label">Harga</label>
                                                  <input type="text" class="form-control" name="harga[]">
                                                  {{-- value="@isset($detail->harga){{ $detail->harga }}"> --}}
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
                            <div class="links">
                                <br>
                                <br>
                                <a href="logout">Log out</a>
                            </div>
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
