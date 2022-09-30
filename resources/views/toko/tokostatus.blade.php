@extends('layout.main')

@section('icon')
<link rel="shortcut icon" href="assets/images/favicon.ico">
@endsection

@php
use App\toko;
@endphp

@section('css')
<!-- DataTables -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Multi Item Selection examples -->
<link href="{{ asset('assets/plugins/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Sweet Alert css -->
<link href="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<br>
<br>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h5 class="m-t-0 header-title">Status Toko <a href="/toko/create" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" style="float:right; margin-right:40px">Tambah Toko</a></h5>
            <p class="text-muted font-14 m-b-30">
            </p>
            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                <thead>
                    <th>No</th>
                    <th>Owner</th>
                    <th>Marketplace</th>
                    <th>Nama Toko</th>
                    <th>Username Toko</th>
                    <th>Password Toko</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                {{-- @foreach($mitra as $m)  --}}
                @php
                $i=1;
                @endphp
                @foreach ($toko as $tok )
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $tok->infotoko->namaowner }}</td>
                    <td>{{ toko::join('marketplace','tbltoko.marketplace','marketplace.id')->where('marketplace.id', $tok->marketplace)->first()->name }}</td>
                    <td>{{ $tok->nama_toko }}</td>
                    <td>{{ $tok->username_mp }}</td>
                    <td>{{ $tok->password_mp }}</td>
                    @if ($tok->status == 1)
                    <td>
                        <form action="/changestat/{{$tok->id}}" method="post">
                            @csrf
                            <button class="btn btn-rounded btn-success waves-effect waves-light w-md m-b-5">Aktif</button>
                        </form>
                    </td>
                    @else
                    <td>
                        <form action="{{ route('changeStat', ['id' => $tok->id]) }}" method="post">
                            @csrf
                            <button class="btn btn-rounded btn-danger">Tidak Aktif</button>
                        </form>
                    </td>
                    @endif
                    <td>
                        <a href="/toko/{{$tok->id}}/edit" class="btn btn-custom btn-rounded waves-effect waves-light w-md m-b-5">Update</a>
                        <br>
                        <form action="/toko/{{$tok->id}}" method="post">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button class="btn btn-danger btn-rounded waves-effect waves-light w-md m-b-5">Delete</button>

                        </form>
                    </td>
                    @php
                    $i++
                    @endphp
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')
<!-- Sweet Alert Js  -->
<script src="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Sweet Alert Js  -->
<script src="{{ asset('assets/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>
@endsection

@section('script-js')
<script>
    $(document).ready(function() {
        // Responsive Datatable
        $('#responsive-datatable').DataTable();
    });

    function deleteMitra(id) {
        var token = $("meta[name='csrf-token']").attr("content");
        console.log(id);

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger m-l-10',
            buttonsStyling: false
        }).then(function() {
            $.ajax({
                url: "mitra/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
            }).done(function(data) {
                swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                location.reload();
            }).fail(function(msg) {
                swal(
                    'Failed',
                    'Your imaginary file is safe :)',
                    'error'
                )
            });

        }, function(dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                console.log("eh ga kehapus");
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
@endsection