@extends('layouts.master')
@section('main')
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data List LRA</h3>
            @if (Auth::check())
            <div class="right">
                <a type="button" class="btn btn-default" href="{{ url('lra/create') }}"><i class="fa fa-plus-square"></i> Tambah Data LRA </a>
            </div>
            @endif
        </div>
        <div class="panel-body">
            @if (!empty($lra_list))
            @include('lra.pencarian')
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center">Provinsi</th>
                            <th rowspan="2" class="text-center">Kabupaten/Kota</th>
                            <th rowspan="2" class="text-center">Bulan</th>
                            <th colspan="3" class="text-center">Pendapatan</th>
                            <th colspan="3" class="text-center">Belanja</th>
                            <th rowspan="2" class="text-center">User</th>
                            <th rowspan="2" class="text-center">Create</th>
                            <th rowspan="2" class="text-center">Update</th>
                            @if (Auth::check())
                            <th rowspan="2" class="text-center">Aksi</th>
                            @endif
                        </tr>
                        <tr>
                            <th class="text-center">Anggaran</th>
                            <th class="text-center">Realisasi</th>
                            <th class="text-center">Persen</th>
                            <th class="text-center">Anggaran</th>
                            <th class="text-center">Realisasi</th>
                            <th class="text-center">Persen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="row">
                        @foreach($lra_list as $lra)
                        <tr align="center">
                            <td>{{$lra->kabkota->provinsi->nama_provinsi}}</td>
                            <td>{{$lra->kabkota->nama_kabkota}}</td>
                            <td>{{$lra->tanggal}}</td>
                            <td>Rp.{{$lra->penAnggaran}}</td>
                            <td>Rp.{{$lra->penRealisasi}}</td>
                            <td>{{$lra->penPersen}}%</td>
                            <td>Rp.{{$lra->belAnggaran}}</td>
                            <td>Rp.{{$lra->belRealisasi}}</td>
                            <td>{{$lra->belPersen}}%</td>
                            <td>{{$lra->users->name}}</td>
                            <td>{{$lra->created_at->format('d-m-Y')}}</td>
                            <td>{{$lra->updated_at->format('d-m-Y')}}</td>
                            @if (Auth::check())
                            <td>
                                <ul class="list-inline">
                                    <li><a class="btn btn-xs btn-warning" href="{{url('lra/'.$lra->id.'/edit')}}"><i class="glyphicon glyphicon-edit"></i></a></li>
                                    <li>
                                        <a>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['LraController@destroy', $lra->id]]) !!}
                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
                                            {!! Form::close() !!}
                                        </a>
                                    </li>
                                </ul>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                        </div>
                    </tbody>
                </table>
            </div>
            <div class="table-nav">
                <div class="jumlah-data">
                    <strong> Jumlah LRA: {{ $jumlah_lra }} </strong>
                </div>
                <div class="paging">
                    {{ $lra_list->links() }}
                </div>
            </div>
            @else
                <p>Tidak Ada Data</p>
            @endif
        </div>
    </div>    
</div>
@endsection
