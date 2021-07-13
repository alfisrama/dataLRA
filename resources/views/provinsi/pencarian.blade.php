<div id="pencarian">
    {!! Form::open(['url' => 'provinsi/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
    <div class="input-group">
        {!! Form:: text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Provinsi']) !!}
        <span class="input-group-btn">
        {!! Form::button('Cari', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </span>
    </div>    
    {!! Form::close() !!}
</div>