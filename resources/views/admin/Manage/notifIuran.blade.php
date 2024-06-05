@extends('admin.layouts.template')

@section('content')
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <div class="card-description">
              <a class="btn btn-rounded btn-primary float-end" href="{{url('/insertNotifikasi')}}">Tambah Data</a>
              <p > Data Notifikasi Iuran
            </p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Nama Iuran</th>
                      <th>Tanggal</th>
                      <th>Informasi</th>
                      <th>menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($notifiuran->count() > 0)
                    @foreach($notifiuran as $rs)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$rs->judul}}</td>
                      <td>{{$rs->id_iuran}}</td>
                      <td>{{$rs->tanggal}}</td>
                      <td>{{$rs->informasi ?? '-'}}</td>
                      {{-- <td><label class="badge badge-danger"><a btn btn-rounded btn-primary href="{{route('editIuran', $rs->id_iuran)}}" type="button">edit</a></label> 
                        <label for="badge badge-danger">
                          <form action="{{route('deleteIuran', $rs->id_iuran)}}" method="POST" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                          </form>
                        </label>
                      </td> --}}
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