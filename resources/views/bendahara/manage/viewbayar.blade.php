@extends('bendahara.layouts.template')

@section('content')
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <div class="card-description">
              <h5>Belum Dikonfirmasi</h5>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pembayar</th>
                      <th>Judul</th>
                      <th>Nominal</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                      <th>menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($list->count() > 0)
                    @foreach($list as $rs)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$rs->warga->nama_lengkap}}</td>
                      <td>{{$rs->notif->judul}}</td>
                      <td>Rp {{ number_format($rs->nominal, 2, ',', '.') }}</td>
                      <td>{{$rs->status}}</td>
                      <td>{{$rs->tanggal_bayar}}</td>
                      <td>
                        <label class="badge badge-danger"><a btn btn-rounded btn-primary href="{{route('bendahara.verifikasi.detailkas', $rs->id_bayar)}}" type="button">edit</a></label> 
                      </td>
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
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sudah Dikonfirmasi</h4>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pembayar</th>
                      <th>Judul</th>
                      <th>Nominal</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($listsudah->count() > 0)
                    @foreach($listsudah as $rs)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$rs->warga->nama_lengkap}}</td>
                      <td>{{$rs->notif->judul}}</td>
                      <td>Rp {{ number_format($rs->nominal, 2, ',', '.') }}</td>
                      <td>{{$rs->tanggal_bayar}}</td>
                      <td>{{$rs->status}}</td>
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
      </div>

@endsection