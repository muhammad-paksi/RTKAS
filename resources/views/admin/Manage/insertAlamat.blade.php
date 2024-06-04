@extends('admin.layouts.template')

@section('content')
<div class="row">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Default form</h4>
          <p class="card-description">Basic form layout</p>
          <form class="forms-sample" action="{{ route('storealamat') }}" method="POST">
              @csrf
              {{-- <div class="form-group">
                  <label for="nik_kk">NIK - Nama Kepala</label>
                  <select class="form-control" name="nik_kk" id="nik_kk">
                      @foreach($kkList as $kk)
                          <option value="{{ $kk->nik_kk }}">{{ $kk->nik_kk }} - {{ $kk->nama_kepala }}</option>
                      @endforeach
                  </select>
              </div> --}}
              <div class="form-group">
                  <label for="detail_alamat">Detail Alamat</label>
                  <input type="text" class="form-control" name="detail_alamat" id="detail_alamat" placeholder="Alamat">
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
          </form>
      </div>
  </div>
  @endsection
