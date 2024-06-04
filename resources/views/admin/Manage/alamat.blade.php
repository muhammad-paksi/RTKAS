@extends('admin.layouts.template')
@section('content')
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <div class="card-description">
              <a class="btn btn-rounded btn-primary float-end" href="{{url('/insertalamat')}}">Tambah Data</a>
              <p> Data Alamat </p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      {{-- <th>NIK</th>
                      <th>Nama Kepala Keluarga</th> --}}
                      <th>Detail Alamat</th>
                      <th>Tanggal</th>
                      <th>menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($alamat->count() > 0)
                        @foreach($alamat as $rs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>{{ $rs->nik_kk }}</td>
                                <td>{{ $rs->kk->nama_kepala ?? 'Nama Kepala Not Found' }}</td> --}}
                                <td>{{ $rs->detail_alamat }}</td>
                                <td>{{ $rs->created_at }}</td>
                                <td>
                                    <label class="badge badge-danger">edit</label>
                                    <label class="badge badge-danger">delete</label>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">Product Not Found</td>
                        </tr>
                    @endif
                </tbody>
                
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection