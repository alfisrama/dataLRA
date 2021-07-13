<div id="pencarian">
    {!! Form::open(['url' => 'kabkota/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
         <div class="row">
             <div class="col-md-4">
                {!! Form::select('id_provinsi', $list_provinsi, (! empty($id_provinsi) ? $id_provinsi : null), ['id' => 'id_provinsi', 'class' => 'form-control input-sm', 'placeholder' => '-Provinsi-']) !!}
             </div>  
            <div class="col-md-8">
                <div class="input-group">
                    {!! Form:: text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null,['class' => 'form-control input-sm', 'placeholder' => 'Masukkan Nama Kabupaten/Kota']) !!}
                    <span class="input-group-btn">
                    {!! Form::button('Cari', ['class' => 'btn btn-primary btn-xs', 'type' => 'submit']) !!}
                    </span>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>
<br>