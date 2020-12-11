@extends('layout.main')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- Date Picker --}}
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    {{-- Switchery --}}
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
@endsection

@section('judul')
Index Laporan Keuangan
@endsection

@section('content')
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">PROFILE</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card-box" style="width:201%">
                            <h4 class="header-title m-t-0 m-b-30">Data Tersimpan</h4>
                            <form action="{{ route('update.profile', ['id'=> $user->id]) }}" method="post" data-parsley-validate novalidate>
                                {{ csrf_field() }}
                                {{-- <label class="col-4 col-form-label"><span class="text-danger">* required field</span></label> --}}
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nama Toko</span></label>
                                    <input type="text" name="namatoko" parsley-trigger="change" required
                                           placeholder="Nama Toko" class="form-control" id=""
                                           value="@isset($user->namatoko){{$user->namatoko}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nama Owner</span></label>
                                    <input type="text" name="namaowner" parsley-trigger="change" required
                                           placeholder="Nama Owner" class="form-control" id=""
                                           value="@isset($user->namaowner){{$user->namaowner}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Email</span></label>
                                    <input id="" type="email" name="email" placeholder="Email Toko" required
                                           class="form-control" value="@isset($user->email){{$user->email}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Nomor Handphone</span></label>
                                    <input type="text" name="nohp" required
                                           placeholder="Nomor Handphone" class="form-control" id=""
                                           value="@isset($user->nohp){{$user->nohp}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Username</span></label>
                                    <input type="text" name="username" required
                                           placeholder="username" class="form-control" id=""
                                           value="@isset($user->username){{$user->username}}@endisset">
                                </div>
                                <div class="form-group">
                                    <label class="col-4 col-form-label">Password</span></label>
                                    <input type="password" name="password" required
                                           placeholder="Password" class="form-control" id=""
                                           value="@isset($user->password){{$user->password}}@endisset">
                                </div>
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col -->
            </div> <!-- end container -->
@endsection

@section('js')
    <!-- Validation js (Parsleyjs) -->
    <script type="text/javascript" src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
@endsection

@section('script-js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
@endsection
