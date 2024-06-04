<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{('staradmin/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{('staradmin/assets/images/favicon.png')}}" />
  </head>
<body>
    @error('login_gagal')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
    <form action="{{url('proses_login')}}" method="POST">
        @csrf

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
            value="{{ old('username') }}" placeholder="username" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>

            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            placeholder="password">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Login field --}}
        <div class="row">
            <div class="col-7">
                <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        Remember Me
                    </label>
                </div>
            </div>

            <div class="col-5">
                <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">

                    <span class="fas fa-sign-in-alt"></span>
                    Sign In
                </button>
            </div>
        </div>

    </form>

    <script src="{{('staradmin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{('staradmin/assets/js/off-canvas.js')}}"></script>
    <script src="{{('staradmin/assets/js/template.js')}}"></script>
    <script src="{{('staradmin/assets/js/settings.js')}}"></script>
    <script src="{{('staradmin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{('staradmin/assets/js/todolist.js')}}"></script> 
</body>


