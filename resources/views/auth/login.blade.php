<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <link rel="stylesheet" href="{{ asset('assetss/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetss/vendors/css/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('assetss/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
	
	
	
</head>
<body class="hold-transition login-page">
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{ url('assets/images/logo-default-450x37.png') }}" alt="Logo">
                  <a href="{{ url('/home') }}"></a>
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" method="post" action="{{ url('/login') }}">
                @csrf
                  <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  <div class="form-group">
                    <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="{{ asset('assetss/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assetss/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetss/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assetss/js/misc.js') }}"></script>

</body>
</html>
