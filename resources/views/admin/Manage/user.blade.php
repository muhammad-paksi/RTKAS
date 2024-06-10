@extends('admin.layouts.template')

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
                      <th>Username</th>
                      <th>Level</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($kk->count() > 0)
                    @foreach($kk as $rs)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$rs->username}}</td>
                      <td>{{$rs->level}}</td>
                      <td>{{$rs->nik}}</td>
                      <td>{{$rs->penduduk->nama_lengkap}}</td>
                      <td>
                        {{-- <label class="badge badge-danger"><a btn btn-rounded btn-primary href="{{route('editkk', $rs->nik_kk)}}" type="button">edit</a></label>  --}}
                        {{-- <label for="badge badge-danger">
                          <form action="{{route('deletekk', $rs->nik_kk)}}" method="POST" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                          </form>
                        </label> --}}
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