@extends('layoutscopras.template')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sunting alternatif</h4>
                        <form action="sunting_alternatif/simpan" method="POST" class="forms-sample">
                            
                            {{ csrf_field() }}
                            <table class="table-striped table-responsive table-hover mb-3">
                                <thead>
                                    <tr>
                                        <th style="width:10%" class="empty-cell"></th>
                                        <th>Nama alternatif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($x = 0; $x < count($nama_alternatif); $x++)
                                        <tr>
                                            <th>A{{ $x+1 }}</th>
                                            <td>
                                                <input type="text" name="nama_alternatif[{{$x}}]" value="{{ $nama_alternatif[$x] }}" class="form-control">
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection