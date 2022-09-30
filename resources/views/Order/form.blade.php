@extends('layout.main')

@section('icon')
<link rel="shortcut icon" href="assets/images/favicon.ico">
{{-- <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" /> --}}
@endsection

@php
use App\toko;
@endphp

@section('css')
<link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
{{-- <link href="{{ asset('colorlib-search-9/css/main.css') }}" rel="stylesheet" /> --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<!-- form Uploads -->
<link href="{{ asset('assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Sweet Alert css -->
<link href="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<!--Token-->
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('judul')
Input Barang
@endsection
@section('content')
<br>
<br>
<div class="col-md-22">
    <div class="col-xl-20">
        <h4 class="header-title m-t-0 m-b-30">Order Detail</h4>
        <div class="card-box table-responsive">
            <ul class="nav nav-tabs">
                <!-- <li class="nav-item">
                    <a href="#excel" data-toggle="tab" aria-expanded="false" class="nav-link ">Upload Excel</a>
                </li> -->
                <li class="nav-item">
                    <a href="#manual" data-toggle="tab" aria-expanded="true" class="nav-link active">Input Manual</a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- <div role="tabpanel" class="tab-pane fade show active" id="excel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Sumber Excel</label>
                                    <div class="col-10">
                                        <select class="form-control select2" id="select_marketplace" onchange="change_marketplace(this.value)" required>
                                            <option value="#" selected disabled>Pilih Marketplace</option>
                                            <option value="genie">GENIE (Multi Marketplace)</option>
                                            @foreach ($toko as $tok)
                                                <option value="@isset($tok->marketplace){{ $tok->marketplace }}@endisset">{{ $tok->marketplaces->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Upload Excel File</label>
                                    <div class="col-10">
                                        <input type="file" class="dropify" name="file" id="file" data-height="100" />
                                    </div>
                                </div>
                                <div class="custom-control custom-switch" id="checklist" style="display:none">
                                    <input type="checkbox" class="custom-control-input" id="siapdikirim" name="siapdikirim" checked>
                                    <label class="custom-control-label" for="siapdikirim"> Siap Dikirim</label>
                                </div>
                                <div class="form-group text-right m-b-0">
                                    <a class="btn btn-success btn-rounded waves-effect waves-light" type="javascript:;" onclick="uploadOrder()">Generate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabel_order" style="display:none">
                        <form class="form-horizontal" role="form" action="{{ route('order.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <table id="table1" class="table table-bordered table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="3%">No</th>
                                        <th width="5%">Kode Booking</th>
                                        <th id="invoice" style="display:none;" width="5%">No Invoice</th>
                                        <th class="ecommerce" width="10%">No Resi</th>
                                        <th width="10%">Tanggal</th>
                                        <th class="ecommerce" width="5%">Customer</th>
                                        <th class="ecommerce" width="5&">Telepon</th>
                                        <th class="ecommerce" width="15%">Alamat</th>
                                        <th class="ecommerce" width="10%">Opsi Pengiriman</th>
                                        <th width="7%">Product ID</th>
                                        <th width="10%">Nama Produk</th>
                                        <th width="10%">Harga</th>
                                        <th width="3%">Qty</th>
                                        <th class="ecommerce" width="10%">Notes</th>
                                        <th width="5%"class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                </tbody>
                            </table>
                            <h4 id="judulgagal" class="header-title m-t-0 m-b-30">Data yang gagal di simpan</h4>
                            <table id="table2" class="table table-bordered table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="3%">No</th>
                                        <th width="10%">Nama Toko</th>
                                        <th width="5%">Kode Booking</th>
                                        <th width="10%">Tanggal</th>
                                        <th width="7%">Product ID</th>
                                        <th width="10%">Nama Produk</th>
                                        <th width="10%">Harga</th>
                                        <th width="3%">Qty</th>
                                        {{-- <th width="5%"class="text-center">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody id="table-body2">
                                </tbody>
                            </table>
                            <input type="hidden" name="counts" id="counts" value="0">
                            <input type="hidden" name="tipe" value="upload">
                            <input type="hidden" name="marketplace2" id="marketplace2" value="">
                            <hr>

                            <div class="form-group text-right m-b-0">
                                <button id="savebutton" type="submit" class="btn btn-primary waves-effect waves-light w-md">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div role="tabpanel" class="tab-pane fade show active" id="manual">
                    <div class="row">
                        <div class="col-12">
                            <form action="/order" data-parsley-validate novalidate method="post">
                                @csrf
                                <div class="card-box table-responsive">
                                    <!-- <div class="form-group">
                                        <label class="col-4 col-form-label">Marketplace</label>
                                        <select class="form-control select2" name="marketplace" id="marketplace">
                                            <option value="#" selected disabled>Pilih Marketplace</option>
                                            @foreach ($toko as $tok)
                                            <option value="@isset($tok->id){{ $tok->id }}@endisset">{{ $tok->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Alamat Pengiriman*</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Pengiriman" value="@isset($order->alamat){{ $order->alamat }}@endisset" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Kode Booking Resi*</label>
                                        <input type="text" class="form-control" name="booking" id="booking" placeholder="Kode Booking" value="@isset($order->booking){{ $order->booking }}@endisset" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">No Resi*</label>
                                        <input type="text" class="form-control" name="resi" id="resi" placeholder="Nomor Resi" value="@isset($order->resi){{ $order->resi }}@endisset" required>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-4 col-form-label">Jenis Pengiriman*</label>
                                        <input type="text" class="form-control" name="pengiriman" id="pengiriman" placeholder="Jenis Pengiriman (JNE Cashless,J&T Ecomnomy, dll)" value="@isset($order->pengiriman){{ $order->pengiriman }}@endisset" required>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Tanggal Transaksi*</label>
                                        <input type="text" class="form-control" name="trx_date" id="trx_date" placeholder="yyyy-mm-dd" value="@isset($order->trx_date){{ $order->trx_date }}@endisset" data-date-format='yyyy-mm-dd' autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Catatan Pembeli</label>
                                        <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan Pembeli" value="@isset($order->catatan){{ $order->catatan }}@endisset" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-box">
                                    <div class="product-list">
                                        <h3>Barang</h3>
                                        <button type="button" class="btn btn-primary tambah-produk"><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
                                        <div class="produk">
                                            <div class="row baris" id="baris0">
                                                <!-- <div class="row" id="baris">  -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-4 col-form-label">Produk</label>
                                                        <select class="form-control select2 select-product" name="prod_id[]" id="prod_id0" onchange="getHarga(this.value, this.id)">
                                                            <option value="#" disabled selected>Pilih Product</option>
                                                            @foreach ($product as $prod)
                                                            <option value="{{ $prod->prod_id }}">{{ $prod->prod_id }} - {{ $prod->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="col-4 col-form-label">Quantitiy</label>
                                                        <input type="number" class="form-control qty" name="qty[]" id="qty0" placeholder="Jumlah" value="0" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-4 col-form-label">Harga Satuan</label>
                                                        <input type="text" class="form-control harga" name="harga[]" id="harga0" placeholder="Harga" value="@isset($product->agreed_price){{ $product->agreed_price }}@endisset" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2" style="padding-top: 37px">
                                                    <a type="javascript:;" class="btn btn-danger hapus-produk" onclick="hapusproduk(this.id)" id="0"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div id="tool-placeholder"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="tipe" value="manual">
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- file uploads js -->
<script src="{{ asset('assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
<!-- Sweet Alert Js  -->
<script src="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>
@endsection

@section('script-js')
<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
        $('#trx_date').datepicker();
        $('.select2').select2();

        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong appended.'
            },
            error: {
                'fileSize': 'The file size is too big (1M max).'
            }
        });

        $('.tambah-produk').click(function(e) {
            //e.preventDefault();
            // var count = $(this).find('.count').val();
            //var produk = $('.baris0').first().clone();
            //$('.produk').append(produk);

            $('.select-product').last().select2("destroy");
            var noOfDivs = $('.baris').length;
            var clonedDiv = $('.baris').first().clone();
            clonedDiv.insertBefore("#tool-placeholder");
            clonedDiv.attr('id', 'baris' + noOfDivs);

            var prod_id = $('.select-product').last();
            prod_id.attr('id', 'prod_id' + noOfDivs);
            $('.select-product').select2();

            var qty = $('.qty').last();
            qty.attr('id', 'qty' + noOfDivs);
            qty.val(0);

            var harga = $('.harga').last();
            harga.attr('id', 'harga' + noOfDivs);
            harga.val(0);

            var hapus = $('.hapus-produk').last();
            hapus.attr('id', noOfDivs);
        });
        //$('.hapus-produk').click(function (e){
        //var yoo = $(this).parent().parent();
        //if ($('.baris').length > 1) yoo.remove();
        //});
        /* $('.select-product').change(function (e) {
            e.preventDefault();
            var select_product = $(this);
            var id = e.target.value;
            $.ajax({
                url : "{{route('getHarga')}}",
                type : "get",
                dataType: 'json',
                data:{
                    prod_id: id,
                },
            }).done(function (data) {
                // var yoo = $(this).siblings();
                // $('.harga').val(data.agreed_price);
                var baris = select_product.parent().parent().parent();
                baris.find('.harga').val(data.agreed_price);
            }).fail(function (msg) {
                alert('Gagal menampilkan data, silahkan refresh halaman.');
            })
        });*/
    });

    function getHarga(prod_id, id) {
        $.ajax({
            url: "{{route('getHarga')}}",
            type: "get",
            dataType: 'json',
            data: {
                prod_id: prod_id,
            },
        }).done(function(data) {
            // var yoo = $(this).siblings();
            var i = id.substring(7);
            $('#harga' + i).val(data.agreed_price);
        }).fail(function(msg) {
            alert('Gagal menampilkan data, silahkan refresh halaman.');
        })
    };

    function hapusproduk(id) {
        if (($('.baris').length > 1) && (id != 0)) {
            $("#baris" + id).remove();
        }
    }

    function uploadOrder() {
        // var fil = $('#file').prop('files')[0];
        var fileInput = document.getElementById('file');
        var fil = fileInput.files[0];
        var form_data = new FormData();
        // alert(form_data)
        var marketplace = $("#marketplace2").val();
        if (marketplace == "genie") {
            document.getElementById("table1").style.display = 'none';
            if ($('#siapdikirim').is(":checked") == true) {
                status = 1;
            } else {
                status = 0;
            }
            form_data.append('status', status);
        } else {
            document.getElementById("judulgagal").style.display = 'none';
            document.getElementById("table2").style.display = 'none';
        }
        form_data.append('file', fil);
        form_data.append('marketplace', marketplace);
        console.log(form_data);
        showLoading();
        $.ajax({
            url: "{{route('uploadOrder')}}",
            type: "post",
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
        }).done(function(data) {
            console.log(data)
            var row = data.length;
            if (data == "1000") {
                swal(
                    'Failed',
                    'Jumlah baris data yang diupload tidak bisa lebih dari 1000 baris',
                    'error'
                );
            } else {
                if (row != 0) {
                    document.getElementById("tabel_order").style.display = 'block';
                    for (i = 0; i < row; i++) {
                        if (marketplace == "genie") {
                            $('#table-body2').append(data[i].append);
                        } else {
                            $('#table-body').append(data[i].append);
                        }
                        $('#ctr').val(data[i].count);
                    }
                    if (marketplace == "genie") {
                        document.getElementById("savebutton").style.display = 'none';
                    }
                    $('#select_marketplace').val("#").change();
                    $('.dropify-clear').click();
                } else {
                    swal(
                        'Berhasil!',
                        'Excel berhasil di upload',
                        'success',
                    );
                    location.reload();
                }
            }
        }).fail(function(msg) {
            swal(
                'Failed',
                'Gagal menampilkan data, silahkan refresh halaman.',
                'error'
            );
        });
    }

    function change_marketplace(id) {
        $('#marketplace2').val(id);
        if (id == 2) {
            // tokopedia
            //document.getElementById("ecommerce").style.display= 'block';
            //document.getElementById("genie").style.display = 'none';
            document.getElementById("invoice").style.display = 'block';
            document.getElementById("checklist").style.display = 'none';
        } else if (id == "genie") {
            document.getElementById("checklist").style.display = 'block';
        } else {
            //document.getElementById("ecommerce").style.display= 'block';
            //document.getElementById("genie").style.display = 'none';
            document.getElementById("invoice").style.display = 'none';
            document.getElementById("checklist").style.display = 'none';
        }
    }

    function deleteItem(id) {
        count = parseInt($('#counts').val()) - 1;
        $('#trow' + id).remove();
        $('#counts').val(count);
    }

    function showLoading() {
        swal({
            title: 'Loading',
            allowEscapeKey: false,
            allowOutsideClick: false,
            timer: 2000,
            showConfirmButton: false,
            onOpen: () => {
                swal.showLoading();
            }
        }).then(
            () => {},
            (dismiss) => {
                if (dismiss === 'timer') {
                    console.log('closed by timer!!!!');
                }
            }
        )
    };

    $(document).ready(function(data) {
        //         var i=1;
        //         $('.tambah-produk').click(function (e){
        //             e.preventDefault();
        //             // var produk = $('.baris').first().clone(true, true);
        //    //         $('.produk').append(produk);
        //              $('.produk').append('<div class="produk'+i+"><div class="row baris"><div class="col-md-4"><div class="form-group"><label class="col-4 col-form-label">Produk</label><select class="form-control select2" name="prod_id['+i+']" id="produk" onchange="getHarga(this.value)"><option value="#" disabled selected>Pilih Product</option>@foreach ($product as $prod)<option value="@isset($prod->prod_id){{ $prod->prod_id }}@endisset">@isset($prod->name){{ $prod->name }}@endisset]</option>@endforeach</select></div></div><div class="col-md-2"><div class="form-group"><label class="col-4 col-form-label">Quantitiy</label><input type="number" required name="qty['+i+']"placeholder="Jumlah" class="form-control" id="" value = "@isset($order->qty){{ $order->qty }}@endisset"></div></div><div class="col-md-4"><div class="form-group"><label class="col-4 col-form-label">Harga</label><input type="text" required name="harga['+i+']"placeholder="Harga" class="form-control" id="harga"value = "@isset($product->agreed_price){{ $product->agreed_price }}@endisset"></div></div><div class="col-md-2" style="padding-top: 30px"><button type="button" class="btn btn-danger hapus-produk"><i class="fa fa-times" aria-hidden="true"></i></button></div></div></div>');
        //             //$('.produk').append('<div class="produk"><div class="row baris"><div class="col-md-4"><div class="form-group"><label class="col-4 col-form-label">Produk</label><select class="form-control select2" name="prod_id[]" id="prod_id" onchange="getHarga(this.value)"><option value="#" disabled selected>Pilih Product</option>@foreach ($product as $prod)<option value="@isset($prod->prod_id){{ $prod->prod_id }}@endisset">@isset($prod->name){{ $prod->name }}@endisset]</option>@endforeach</select></div></div><div class="col-md-2"><div class="form-group"><label class="col-4 col-form-label">Quantitiy</label><input type="number" required name="qty[]"placeholder="Jumlah" class="form-control" id="" value = "@isset($order->qty){{ $order->qty }}@endisset"></div></div><div class="col-md-4"><div class="form-group"><label class="col-4 col-form-label">Harga</label><input type="text" required name="harga[]"placeholder="Harga" class="form-control" id="harga"value = "@isset($product->agreed_price){{ $product->agreed_price }}@endisset"></div></div><div class="col-md-2" style="padding-top: 30px"><button type="button" class="btn btn-danger hapus-produk"><i class="fa fa-times" aria-hidden="true"></i></button></div></div></div>');
        //             i++;
        //         });

    });
</script>
@endsection