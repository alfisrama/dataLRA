@extends('layouts.master')
@section('main')
    <h2 class="text-center">Edit Kabupaten/Kota</h2><br>
    {!! Form::model($kabkota, ['method' => 'PATCH', 'files' => true, 'action' => ['KabkotaController@update', $kabkota->id]]) !!}
        @if (isset($kabkota))
            {!! Form::hidden('id', $kabkota->id) !!}
        @endif

        @if ($errors->any())
            <div class="form-group {{ $errors->has('id_provinsi') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group">
        @endif
            {!! Form::label('id_provinsi', 'Provinsi:', ['class' => 'control-label']) !!}
            @if(count($list_provinsi) > 0)
                {!! Form::select('id_provinsi', $list_provinsi, null, ['class' => 'form-control', 'id' => 'id_provinsi', 'placeholder' => 'Pilih Kabupaten/Kota']) !!}
            @else
            <p>Tidak ada pilihan Kabupaten/Kota!</p>
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
        <div class="form-group">
            <ul class="list-inline">
                <li><a>{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}</a></li>
                <li><input class="btn btn-danger" type="reset" value="Reset"></li>
                <li><a class="btn btn-warning" href="{{url('kabkota')}}">Batal</i></a></li>
            </ul>
        </div>
    {!! Form::close() !!}
@endsection