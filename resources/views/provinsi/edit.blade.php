@extends('layouts.master')
@section('main')
    <h2 class="text-center">Edit Provinsi</h2><br>
    {!! Form::model($provinsi, ['method' => 'PATCH', 'files' => true, 'action' => ['ProvinsiController@update', $provinsi->id]]) !!}
        @if (isset($provinsi))
            {!! Form::hidden('id', $provinsi->id) !!}
        @endif
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
        <div class="form-group">
            <ul class="list-inline">
                <li><a>{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}</a></li>
                <li><input class="btn btn-danger" type="reset" value="Reset"></li>
                <li><a class="btn btn-warning" href="{{url('provinsi')}}">Batal</i></a></li>
            </ul>
        </div>
    {!! Form::close() !!}
@endsection

