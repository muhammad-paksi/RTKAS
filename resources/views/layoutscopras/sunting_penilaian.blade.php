@extends('layoutscopras.template')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sunting matriks penilaian</h4>
                        <form action="sunting_penilaian/simpan" method="POST" class="forms-sample">
                            
                            {{ csrf_field() }}
                            <table class="table-striped table-responsive table-hover mb-3">
                                <thead>
                                    <tr>
                                        <th style="width:10%" class="empty-cell"></th>
                                        @for ($x = 0; $x < count($kriteria); $x++)
                                            <th><abbr title="{{ $kriteria[$x] }}">C{{ $x+1 }}</abbr></th>
                                        @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($x = 0; $x < count($penilaian); $x++)
                                        <tr>
                                            <th><abbr title="{{ $alternatif[$x] }}">A{{ $x+1 }}</abbr></th>
                                            @for ($y = 0; $y < count($penilaian[$x]); $y++)
                                                <td>
                                                    <input type="text" name="penilaian[{{$x}}][{{$y}}]" value="{{ number_format($penilaian[$x][$y], 1, ',') }}" class="form-control">
                                                </td>
                                            @endfor
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