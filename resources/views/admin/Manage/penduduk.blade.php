@extends('admin.layouts.template')

@section('content')
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <div class="card-description">
              <a class="btn btn-rounded btn-primary float-end" href="{{url('/insertpenduduk')}}">Tambah Data</a>
              <p > Data Penduduk
            </p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama Lengkap</th>
                      <th>Tanggal Lahir</th>
                      <th>NIK Kartu Keluarga</th>
                      <th>Alamat</th>
                      <th>Menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($warga->count() > 0)
                    @foreach($warga as $rs)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$rs->nik}}</td>
                      <td>{{$rs->nama_lengkap}}</td>
                      <td>{{$rs->tanggal_lahir}}</td>
                      <td>{{$rs->nik_kk}}</td>
                      <td>{{$rs->kk->alamat_kk ?? 'Alamat not found'}}</td>
                      <td><label class="badge badge-danger"><a btn btn-rounded btn-primary href="{{route('editwarga', $rs->nik)}}" type="button">edit</a></label> 
                      <label class="badge badge-danger">delete</label></td>
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