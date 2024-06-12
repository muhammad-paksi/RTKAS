@extends('ketua.layouts.template')

@section('content')
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <div class="card-description">
              <a class="btn btn-rounded btn-primary float-end" href="{{ route('ketua.insert.iuran')}}">Tambah Data</a>
              <p> Data Iuran
            </p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Iuran</th>
                      <th>Tanggal</th>
                      <th>menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($iuran->count() > 0)
                    @foreach($iuran as $rs)
                    <tr>
                      <td>{{$loop->iteration }}</td>
                      <td>{{$rs->nama_iuran}}</td>
                      <td>{{$rs->tanggal}}</td>
                      <td><label class="badge badge-danger"><a btn btn-rounded btn-primary href="{{route('ketua.edit.iuran', $rs->id_iuran)}}" type="button">edit</a></label> 
                        <label for="badge badge-danger">
                          <form action="{{route('deleteIuran', $rs->id_iuran)}}" method="POST" onsubmit="return confirm('Delete?')">
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