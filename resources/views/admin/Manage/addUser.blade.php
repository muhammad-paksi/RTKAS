@extends('admin.layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" name="level" value="{{ old('level') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah User</button>
    </form>
</div>  
    </div>
  </div>
  @endsection
