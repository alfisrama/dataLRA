@extends('layouts.master')
@section('main')
    <div id="user">
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h1 class="panel-title text-center">Edit Data User</h1>
            </div>
        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
            @include('user.form', ['submitButtonText' => 'Update User'])
        {!! Form::close() !!}
    </div>
@endsection 