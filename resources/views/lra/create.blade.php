@extends('layouts.master')
@section('main')
    <div id="lra">
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h1 class="panel-title text-center">Tambah Data LRA</h1>
            </div>
        {!! Form::open(['url' => 'lra', 'files' => true]) !!}
            @include('lra.form', ['submitButtonText' => 'Tambah LRA'])
        {!! Form::close() !!}
    </div>
@endsection
