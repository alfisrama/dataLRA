@extends('layouts.master')
@section('main')
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data List User</h3>
            <div class="right">
                <a type="button" class="btn btn-default" href="{{ url('user/create') }}"><i class="fa fa-plus-square"></i> Tambah User </a>
            </div>
        </div>
        <div class="panel-body">
         @if (!empty($user_list))
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Level</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($user_list as $index => $user): ?>
                    <tr>
                        <td class="text-center">{{ $index+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">{{ $user->level }}</td>
                        <td class="text-center">
                            <ul class="list-inline">
                                <li><a class="btn btn-xs btn-warning" href="{{url('user/'.$user->id.'/edit')}}"><i class="glyphicon glyphicon-edit"></i></a></li>
                                <li>
                                    <a>
                                        {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        @else
            <p>Tidak ada data user.</p>
        @endif
    </div>
@stop