@extends('admin.layouts.template')

@section('content')
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <div class="card-description">
              <a class="btn btn-rounded btn-primary float-end" href="{{url('/insertpengumuman')}}">Tambah Data</a>
              <p > Data Pengumuman
            </p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Pengumuman</th>
                      <th>Isi Pengumuman</th>
                      <th>Tanggal</th>
                      <th>Gambar</th>
                      <th>menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($pengumuman->count() > 0)
                    @foreach($pengumuman as $rs)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{$rs->judul_pengumuman}}</td>
                      <td>{{$rs->isi_pengumuman}}</td>
                      <td>{{$rs->tanggal}}</td>
                      <td>
                        @if($rs->gambar_pengumuman)
                        <p>Gambar</p>
                        <img src="{{ asset('storage/pengumuman/' . $rs->gambar) }}" alt="Gambar Pengumuman" style="max-width: 50%;">
                        @endif
                      </td>
                      <td><label class="badge badge-danger">edit</label> <label class="badge badge-danger">delete</label></td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td>
                        Product Not Found
                      </td>
                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection