<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.einfosoft.com/templates/admin/otika/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 09:14:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin register</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/app.min.css">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/bundles/jquery-selectric/selectric.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card card-primary">
                        <div class="card-header align-items-center justify-content-center">
                            <h4 style="font-family:'Droid Sans Mono Slashed';font-size: 25px">Admin register</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <label for="Name"> Name</label>
                                        <input id="Name" type="text" class="form-control" name="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                                               name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="mb-4 text-muted text-center">
                            Already Registered? <a href="auth-login.html">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src="{{asset('adminAsset')}}/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="{{asset('adminAsset')}}/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{asset('adminAsset')}}/assets/js/page/auth-register.js"></script>
<!-- Template JS File -->
<script src="{{asset('adminAsset')}}/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{asset('adminAsset')}}/assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/otika/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 09:14:51 GMT -->
</html>
