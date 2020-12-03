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
                <div class="col-md-28">
                    <div class="col-xl-20">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Atur Toko</h4>
                            <form action="/tambahtoko" data-parsley-validate novalidate method="post">
                                @csrf
                                    <div class="form-group">
                                      <label class="col-4 col-form-label">Marketplace</label>
                                      <select class="form-control" name="marketplace">
                                        <option value="shopee">Shopee</option>
                                        <option value="tokopedia">Tokopedia</option>
                                        <option value="bukalapak">Bukalapak</option>
                                      </select>
                                    </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nama Toko</label>
                                    <input type="text" name="namatoko" parsley-trigger="change" required
                                           placeholder="Nama Toko" class="form-control"
                                           value = "@isset($toko->nama_toko){{ $toko->nama_toko }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Username Marketplace</label>
                                    <input type="text" placeholder="Username Marketplace"
                                           class="form-control" name="usernamemp"
                                           value = "@isset($toko->username_mp){{ $toko->username_mp }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Password Marketplace</label>
                                    <input type="text" name="passwordmp"
                                           placeholder="Password Marketplace" class="form-control"
                                           value = "@isset($toko->password_mp){{ $toko->password_mp }}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Status Toko</label>
                                    <select class="form-control" name="statustoko">
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak aktif">Tidak Aktif</option>
                                      </select>
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