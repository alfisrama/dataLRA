@extends('layouts.master')
@section('main')
    <div id="lra">
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h1 class="panel-title text-center">Edit Data LRA</h1>
            </div>
        {!! Form::model($lra, ['method' => 'PATCH', 'files' => true, 'action' => ['LraController@update', $lra->id]]) !!}
        @include('lra.form', ['submitButtonText' => 'Simpan'])
        {!! Form::close() !!}
    </div>
@endsection

