@extends('layouts.master')
@section('main')
    <div id="user">
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h1 class="panel-title text-center">Tambah Data User</h1>
            </div>
    {!! Form::open(['url' => 'user']) !!}
        @include('user.form', ['submitButtonText' => 'Tambah User'])
    {!! Form::close() !!}
    </div>
@endsection