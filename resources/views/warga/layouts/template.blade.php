<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BootstrapDash Wizard</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/bd-wizard.css') }}">
  <style media="screen">
    .a {
        padding: 70px;
    }
    body {
        position: relative;
        background-image: url('{{ asset('storage/web-1718162295.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8); /* Warna hitam dengan transparansi 30% */
        z-index: 1;
    }
    .content {
        position: relative;
        z-index: 2;
    }
    .table th, .table td {
        color: white; /* Warna teks putih */
    }
  </style>
</head>
<body>
  <div class="overlay"></div>
  <div class="content">
    <header>
      @include('warga.layouts.navbar')
    </header>
    <main class="d-flex">
      @yield('content')
    </main>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="{{ asset('landing/assets/js/jquery.steps.min.js') }}"></script>
  <script src="{{ asset('landing/assets/js/bd-wizard.js') }}"></script>
</body>
</html>
