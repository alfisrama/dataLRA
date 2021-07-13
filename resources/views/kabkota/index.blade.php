@extends('layouts.master')
@section('main')
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data List Kabupaten Kota</h3>
            <div class="right">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> Tambah Kabupaten/Kota </button>
            </div>
        </div>
        <div class="panel-body">
            @if (!empty($kabkota_list))
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Provinsi</th>
                            <th>Kabupaten/Kota</th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="row">
                        @foreach($kabkota_list as $kabkota)
                            <td> {{$kabkota->provinsi->nama_provinsi}}</td>
                            <td> {{$kabkota->nama_kabkota}}</td>
                            <td></td>
                            <td class="text-right" width="250px">
                                <ul class="list-inline">
                                    <li><a class="btn btn-warning btn-sm" href="{{url('kabkota/'.$kabkota->id.'/edit')}}"><i class="glyphicon glyphicon-edit"></i></a></li>
                                    <li>
                                        <a>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['KabkotaController@destroy', $kabkota->id]]) !!}
                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) !!}
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
                @else
                    <p>Tidak Ada Data</p>
                @endif
                <div class="table-nav">
                    <div class="jumlah-data">
                        <strong> Jumlah Kabupaten/Kota: {{ $jumlah_kabkota }} </strong>
                    </div>
                    <div class="paging">
                       {{ $kabkota_list->links() }}
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
{!! Form::open(['url' => 'kabkota', 'files' => true]) !!}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            Tambah kabkota
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if ($errors->any())
                <div class="form-group {{ $errors->has('id_provinsi') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group">
            @endif
                    {!! Form::label('id_provinsi', 'Provinsi:', ['class' => 'control-label']) !!}
                @if(count($list_provinsi) > 0)
                    {!! Form::select('id_provinsi', $list_provinsi, null, ['class' => 'form-control', 'id' => 'id_provinsi', 'placeholder' => 'Pilih Provinsi']) !!}
                @else
                    <p>Tidak ada pilihan Provinsi!</p>
            @endif

            @if ($errors->has('id_provinsi'))
                <span class="help-block">{{ $errors->first('id_provinsi') }}</span>
            @endif
            </div>

            @if ($errors->any())
                <div class="form-group {{ $errors->has('nama_kabkota') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group">
            @endif
                    {!! Form::label('nama_kabkota', 'Nama Kabupaten/Kota:', ['class' => 'control-label']) !!}
                    {!! Form::text('nama_kabkota', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('nama_kabkota'))
                        <span class="help-block">{{ $errors->first('nama_kabkota') }}</span>
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
