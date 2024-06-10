<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI KAS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS untuk membuat logo memenuhi sisi kiri */
        .logo-container {
            background-image: url('{{ asset('storage/web-1717985338.jpeg') }}'); /* Ganti dengan path logo Anda */
            background-size: cover;
            height: 100vh; /* Mengatur tinggi logo agar memenuhi tinggi layar */
        }
        body {
            background-color: rgb(208, 221, 241); /* Latar belakang body menjadi silver */
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-card {
            width: 100%;
            max-width: 700px; /* Mengatur lebar maksimum kolom login */
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: .75rem;
            background-color: #ffffff; /* Latar belakang form login */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button {
            display: inline-block;
            width: 100%;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: #101C2C;
            border: 1px solid transparent;
            padding: .575rem 1.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .55rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .form {
            display: block;
            width: 100%;
            height: calc(2.5em + .75rem + 2px); /* Mengatur tinggi form login */
            padding: .75rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #000000;
            background-color: #ffffff;
            background-clip: padding-box;
            border: 1px solid #101C2C;
            border-radius: .75rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Bagian Logo -->
            <div class="col-md-6 logo-container">
                <!-- Tidak ada konten di sini karena logo akan diatur melalui CSS -->
            </div>
            
            <!-- Bagian Form Login -->
            <div class="col-md-6 login-container">
                <div class="login-card">
                    <h2 class="text-center">Masuk</h2>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('proses_login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" value="{{ old('username') }}" name="username" class="form" placeholder="Nama Pengguna" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form" placeholder="Kata Sandi" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                        </div>
                        <button type="submit" class="button">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
