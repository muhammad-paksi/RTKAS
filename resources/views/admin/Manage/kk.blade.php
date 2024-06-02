@extends('layouts.template')

@section('content')
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <div class="card-description">
              <a class="btn btn-rounded btn-primary float-end" href="{{url('/insertkk')}}">Tambah Data</a>
              <p > Data Kartu Keluarga
            </p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama Kepala Keluarga</th>
                      <th>Alamat Kartu Keluarga</th>
                      <th>Tanggal</th>
                      <th>menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($kk->count() > 0)
                    @foreach($kk as $rs)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$rs->nik_kk}}</td>
                      <td>{{$rs->nama_kepala}}</td>
                      <td>{{$rs->alamat_kk}}</td>
                      <td>{{$rs->created_at}}</td>
                      <td><label class="badge badge-danger"><a btn btn-rounded btn-primary href="{{route('editkk', $rs->nik_kk)}}" type="button">edit</a></label> 
                        <label for="badge badge-danger">
                          <form action="{{route('deletekk', $rs->nik_kk)}}" method="POST" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                          </form>
                        </label>
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
@endsection