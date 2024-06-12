@extends('layoutscopras.template')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sunting kriteria</h4>
                        <form action="sunting_kriteria/simpan" method="POST" class="forms-sample">
                            
                            {{ csrf_field() }}
                            <table class="table-striped table-responsive table-hover mb-3">
                                <thead>
                                    <tr>
                                        <th style="width:10%" class="empty-cell"></th>
                                        <th>Nama kriteria</th>
                                        <th>Tipe</th>
                                        <th>Bobot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($x = 0; $x < count($nama_kriteria); $x++)
                                        <tr>
                                            <th>C{{ $x+1 }}</th>
                                            <td>
                                                <input type="text" name="nama_kriteria[{{$x}}]" value="{{ $nama_kriteria[$x] }}" class="form-control">
                                            </td>
                                            <td style="width:10%;">
                                                <input type="text" name="tipe[{{$x}}]" value="{{ $tipe[$x] }}" class="form-control">
                                            </td>
                                            <td style="width:20%;">
                                                <input type="text" name="bobot[{{$x}}]" value="{{ number_format($bobot[$x], 2, ',') }}" class="form-control">
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