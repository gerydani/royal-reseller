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
                <div class="col-md-22">
                    <div class="col-xl-20">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Tambah Produk</h4>
                            @isset($order)
                                <form class="form-horizontal" role="form" action="{{ route('product.update', ['id'=> $order->id]) }}" enctype="multipart/form-data" method="POST">
                                {{ method_field('PUT') }}
                            @else
                                <form class="form-horizontal" role="form" action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
                            @endisset
                                @csrf
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Kode Produk</label>
                                    <input type="text" name="" required placeholder="Kode Produk"
                                            class="form-control" id="" value = "@isset($product->prod_id){{$product->prod_id}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nama Produk</label>
                                    <input id="" type="text" placeholder="Nama Produk" required
                                           class="form-control" name="" value = "@isset($product->name){{$product->name}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">SKU</label>
                                    <input type="text" required name="" placeholder="SKU"
                                           class="form-control" id="" value ="@isset($product->sku){{$product->sku}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Harga Modal</label>
                                    <input type="text" required name="" placeholder="Harga Modal"
                                            class="form-control" id="" value ="@isset($product->capital_price){{$product->capital_price}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Harga Kesepakatan</label>
                                    <input type="text" required name="" placeholder="Harga Kesepakatan"
                                            class="form-control" id="" value ="@isset($product->agreed_price){{$product->agreed_price}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Berat(Gram)</label>
                                    <input type="text" required name="" placeholder="Harga Kesepakatan"
                                            class="form-control" id="" value ="@isset($product->weight){{$product->weight}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Dimensi(PxLxT)</label>
                                    <input type="text" required name="" placeholder="Harga Kesepakatan"
                                            class="form-control" id="" value ="@isset($product->dimension){{$product->dimension}}@endisset">
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
                                <a href="logout" class="f90-logout-button">Log out</a>
                            </div>
                        </div>
                        <div class="links">
                                <br>
                                <br>
                                <a href="/" class="f90-logout-button">Dashboard</a>
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
