<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('staradmin/assets/images/favicon.png') }}" />
    <style>
        .container-fluid {
            height: 100vh;
            display: flex;
        }
        .image-container {
            background-image: url('{{ asset('storage/web-1717985338.jpeg') }}');
            background-size: cover;
            background-position: center;
            width: 50%;
            height: 100%;
        }
        .login-container {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-form-light {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 40px;
            width: 80%;
            border: 1px solid #ccc; /* Garis tepi tipis */
        }
        .brand-logo {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: black; /* Warna hitam pekat */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="image-container"></div>
        <div class="login-container">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                    SI KAS
                </div>
                <h4 class="text-center">Hello! let's get started</h4>
                <h6 class="fw-light text-center">Sign in to continue.</h6>
                <form class="pt-3" action="{{ route('proses_login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-lg" value="{{ old('username') }}" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="mt-3 d-grid gap-2">
                        <button name="submit" type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <div class="mb-2 d-grid gap-5">
                    <a class="btn btn-rounded btn-fw" href="/">Kembali ke Landing Page</a>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('staradmin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('staradmin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('staradmin/assets/js/template.js') }}"></script>
    <script src="{{ asset('staradmin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('staradmin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('staradmin/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>
</html>
