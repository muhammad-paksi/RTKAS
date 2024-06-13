
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - RTKAS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('staradmin/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('staradmin/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="{{ asset('staradmin/assets/images/logo.svg')}}" alt="logo">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="fw-light">Sign in to continue.</h6>
                <form class="pt-3" action="{{route('proses_login')}}" method="POST">
                  @csrf
                  <div class="form-group" >
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
                    <input type="text" class="form-control form-control-lg" value="{{old('username')}}" id="username" name="username" placeholder="Username">
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
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('staradmin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('staradmin/assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('staradmin/assets/js/template.js')}}"></script>
    <script src="{{ asset('staradmin/assets/js/settings.js')}}"></script>
    <script src="{{ asset('staradmin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('staradmin/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
  </body>
</html>