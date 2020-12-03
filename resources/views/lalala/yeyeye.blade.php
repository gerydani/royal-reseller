@extends('layout.main')

@section('icon')
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
@endsection

@section('css')
    <!-- jvectormap -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
@endsection

@section('judul')
Input Barang
@endsection

@section('content')
<div class="col-xl-6">
    <div class="card-box">
        <div class="dropdown pull-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
            </div>
        </div>

        <h4 class="header-title m-t-0 m-b-30">Australia Map</h4>

        <div id="indonesia" style="height: 400px"></div>
    </div>
</div><!-- end col -->
<form action="/pushto_royalcontrolling" method="post" data-parsley-validate novalidate>
    @csrf
    <button class="btn btn-success" type="submit">Push to royalcontrolling.com</button>
    <table class="table">
        <thead>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Toko</th>
            <th>Marketplace</th>
        </thead>
        <tbody>
            @php
                $i=1;
                $tanggal = "2020-12-02";
            @endphp
            @foreach($order as $list)
                <tr>
                    <td><input type="hidden" name="order_id[]" value="{{ $list->id }}">{{ $i++ }}</td>
                    <td><input type="hidden" name="trx_date[]" value="{{ $tanggal }}">{{ $tanggal }}</td>
                    <td><input type="hidden" name="cust_id[]" value="{{ $list->nama_toko }}">{{ $list->nama_toko }}</td>
                    <td><input type="hidden" name="method[]" value="{{ $list->marketplace }}">{{ $list->marketplace }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>
@endsection

@section('js')
        <script type="text/javascript" src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
        <!-- google maps api -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>

        <!-- main file -->
        <script src="{{ asset('assets/plugins/gmaps/gmaps.min.js') }}"></script>
        <!-- demo codes -->
        <script src="{{ asset('assets/pages/jquery.gmaps.js') }}"></script>

        <!-- Jvector map js -->
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/gdp-data.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-id-mill.js') }}"></script>
        <script src="{{ asset('assets/pages/jvectormap.init.js') }}"></script>
@endsection

@section('script-js')
<script>

$('#indonesia').vectorMap({
    map : 'indonesia-adm1_merc',
    backgroundColor : 'transparent',
    regionStyle : {
        initial : {
            fill : '#71b6f9'
        }
    }
});
</script>
@endsection
