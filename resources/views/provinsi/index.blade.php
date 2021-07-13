@extends('layouts.master')
@section('main')
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data List Provinsi</h3>
            <div class="right">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> Tambah Provinsi </button>
            </div>
        </div>
        <div class="panel-body">
            @if (!empty($provinsi_list))
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Provinsi</th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="row">
                        @foreach($provinsi_list as $provinsi)
                            <td> {{ $provinsi -> nama_provinsi }}</td>
                            <td></td>
                            <td class="text-right" width="250px">
                                <ul class="list-inline">
                                    <li><a class="btn btn-warning" href="{{url('provinsi/'.$provinsi->id.'/edit')}}"><i class="glyphicon glyphicon-edit"></i></a></li>
                                    <li>
                                        <a>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['ProvinsiController@destroy', $provinsi->id]]) !!}
                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                        </div>
                    </tbody>
                </table>
                <div class="table-nav">
                    <div class="jumlah-data">
                        <strong> Jumlah Provinsi: {{ $jumlah_provinsi }} </strong>
                    </div>
                    <div class="paging">
                        {{ $provinsi_list->links() }}
                    </div>
                </div>
                @else
                    <p>Tidak Ada Data</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
{!! Form::open(['url' => 'provinsi', 'files' => true]) !!}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            Tambah Provinsi
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if ($errors->any())
            <div class="form-group {{ $errors->has('nama_provinsi') ? 'has-error' : 'has-success' }}">
            @else
            <div class="form-group">
            @endif
                {!! Form::label('nama_provinsi', 'Nama Provinsi:', ['class' => 'control-label']) !!}
                {!! Form::text('nama_provinsi', null, ['class' => 'form-control']) !!}
                @if ($errors->has('nama_provinsi'))
                <span class="help-block">{{ $errors->first('nama_provinsi') }}</span>
            @endif
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            {!! Form::submit("Simpan", ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    </div>
</div>
{!! Form::close() !!}
{{-- End Modal --}}

@endsection
