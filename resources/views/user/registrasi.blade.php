<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Royal Warehouse - Reseller</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <!-- Page-Title -->
        <div class="account-pages"></div>
            <div class="clearfix"></div>
                <div class="wrapper-page" style="width:95%">
                    <div class="text-center">
                        <a href="/" class="logo"><span>Royal Warehouse<span> Reseller</span></span></a>
                        <h5 class="text-muted mt-0 font-600">Aplikasi Reseller Royal Warehouse</h5>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-22">
                        <div class="col-xl-20">
                            <div class="card-box">
                                @isset($user)
                                    <h3 class="header-title m-t-0 m-b-30">Edit Profile</h3>
                                    <form action="{{ route('update.profile', ['id'=> $user->id]) }}" method="post" data-parsley-validate novalidate>
                                @else
                                    <h3 class="header-title m-t-0 m-b-30">Form Data</h3>
                                    <form action="/tambah" method="post" data-parsley-validate novalidate>
                                @endisset
                                    {{ csrf_field() }}
                                    <label class="col-4 col-form-label"><span class="text-danger">* required field</span></label>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Nama Toko <span class="text-danger">*</span></label>
                                        <input type="text" name="namatoko" parsley-trigger="change" required
                                            placeholder="Nama Toko" class="form-control" id=""
                                            value="@isset($user->namatoko){{$user->namatoko}}@endisset">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Nama Owner <span class="text-danger">*</span></label>
                                        <input type="text" name="namaowner" parsley-trigger="change" required
                                            placeholder="Nama Owner" class="form-control" id=""
                                            value="@isset($user->namaowner){{$user->namaowner}}@endisset">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Email <span class="text-danger">*</span></label>
                                        <input id="" type="email" name="email" placeholder="Email Toko" required
                                            class="form-control" value="@isset($user->email){{$user->email}}@endisset">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Nomor Handphone <span class="text-danger">*</span></label>
                                        <input type="text" name="nohp" required
                                            placeholder="Nomor Handphone" class="form-control" id=""
                                            value="@isset($user->nohp){{$user->nohp}}@endisset">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Username <span class="text-danger">*</span></label>
                                        <input type="text" name="username" required
                                            placeholder="username" class="form-control" id=""
                                            value="@isset($user->username){{$user->username}}@endisset">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-4 col-form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" required
                                            placeholder="Password" class="form-control" id=""
                                            value="@isset($user->password){{$user->password}}@endisset">
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Registrasi
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

	</body>
</html>
