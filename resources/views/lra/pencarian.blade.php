<div id="pencarian">
{!! Form::open(['url' => 'lra/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
     <div class="row">
        <div class="col-md-4">
            {!! Form::select('id_provinsi', $list_provinsi, (! empty($id_provinsi) ? $id_provinsi : null), ['id' => 'id_provinsi', 'class' => 'form-control input-sm', 'placeholder' => '-Provinsi-']) !!}
        </div>
        <div class="col-md-4">
            {!! Form::select('id_kabkota', $list_kabkota, (! empty($id_kabkota) ? $id_kabkota : null), ['id' => 'id_kabkota', 'class' => 'form-control input-sm', 'placeholder' => '-Kabupaten/Kota-']) !!}
        </div>
    
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon"><i class="lnr lnr-calendar-full"></i></span>
                {!! Form::text('tanggal', (!empty($tanggal)) ? $tanggal : null, ['class' => 'form-control read input-sm', 'id'=>'datepicker', 'placeholder' => 'Pilih Bulan']) !!}
                <span class="input-group-btn">
                    {!! Form::button('Cari', ['class' => 'btn btn-primary btn-sm', 'type' => 'submit']) !!}
                </span>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div><br>