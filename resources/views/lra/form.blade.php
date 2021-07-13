@if (isset($lra))
    {!! Form::hidden('id', $lra->id) !!}
@endif

    <hr><div class="panel-body">
        @if ($errors->any())
            <div class="form-group {{ $errors->has('id_provinsi') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group">
        @endif
                {!! Form::label('id_provinsi', 'Provinsi:', ['class' => 'control-label']) !!}
                @if(count($list_provinsi) > 0)
                    @if (Auth::user()->level == 'provinsi' || Auth::user()->level == 'kabkota')
                        {!! Form::select('id_provinsi', $list_provinsi, Auth::user()->id_provinsi, ['class' => 'form-control', 'id' => 'id_provinsi', 'placeholder' => 'Pilih Provinsi', 'disabled']) !!}
                    @else
                        {!! Form::select('id_provinsi', $list_provinsi, null, ['class' => 'form-control', 'id' => 'id_provinsi', 'placeholder' => 'Pilih Provinsi']) !!}
                    @endif
                @else
                    <p>Tidak ada pilihan Provinsi!</p>
                @endif
                @if ($errors->has('id_kabkota'))
                    <span class="help-block">{{ $errors->first('id_kabkota') }}</span>
                @endif
            </div>

        @if ($errors->any())
            <div class="form-group {{ $errors->has('id_kabkota') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group">
        @endif
                {!! Form::label('id_kabkota', 'Kabupaten/Kota:', ['class' => 'control-label']) !!}
                @if(count($list_kabkota) > 0)
                    @if (Auth::user()->level == 'kabkota')
                        {!! Form::select('id_kabkota', $list_kabkota, Auth::user()->id_kabkota, ['class' => 'form-control', 'id' => 'id_kabkota', 'placeholder' => 'Pilih Kabupaten/Kota', 'disabled']) !!}
                    @else
                        {!! Form::select('id_kabkota', $list_kabkota, null, ['class' => 'form-control', 'id' => 'id_kabkota', 'placeholder' => 'Pilih Kabupaten/Kota']) !!}
                    @endif
                @else
                    <p>Tidak ada pilihan Kabupaten/Kota!</p>
                @endif
                @if ($errors->has('id_kabkota'))
                    <span class="help-block">{{ $errors->first('id_kabkota') }}</span>
                @endif
            </div>

        @if ($errors->any())
            <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group">
        @endif
                {!! Form::label('tanggal', 'Bulan:', ['class' => 'control-label']) !!}
                <div class="input-group">
                    <span class="input-group-addon"><i class="lnr lnr-calendar-full"></i></span>
                    {!! Form::text('tanggal', null, ['class' => 'form-control read', 'id'=>'datepicker', 'readonly', 'placeholder' => 'Klik disini']) !!}
                </div>
                @if ($errors->has('tanggal'))
                    <span class="help-block">{{ $errors->first('tanggal') }}</span>
                @endif
            </div>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Pendapatan</h3>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            @if ($errors->any())
                <div class="form-group col-md-5 {{ $errors->has('penAnggaran') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group col-md-5">
            @endif
                    {!! Form::label('penAnggaran', 'Anggaran:', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        {!! Form::text('penAnggaran', null, ['class' => 'form-control', 'id'=>'penAnggaran', 'onkeyup'=>'penTotal()']) !!}
                    </div>
                        @if ($errors->has('penAnggaran'))
                        <span class="help-block">{{ $errors->first('penAnggaran') }}</span>
                    @endif
                </div>
            
            @if ($errors->any())
                <div class="form-group col-md-5 {{ $errors->has('penRealisasi') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group col-md-5">
            @endif
                    {!! Form::label('penRealisasi', 'Realisasi:', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        {!! Form::text('penRealisasi', null, ['class' => 'form-control', 'id'=>'penRealisasi', 'onkeyup'=>'penTotal()']) !!}
                    </div>
                    @if ($errors->has('penRealisasi'))
                        <span class="help-block">{{ $errors->first('penRealisasi') }}</span>
                    @endif
                </div>
            
            @if ($errors->any())
                <div class="form-group col-md-2 {{ $errors->has('penPersen') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group col-md-2">
            @endif
                    {!! Form::label('penPersen', 'Persentase:', ['class' => 'control-label']) !!}
                    <div class="input-group">    
                        {!! Form::text('penPersen', null, ['class' => 'form-control read', 'id'=>'penPersen', 'readonly']) !!}
                        <span class="input-group-addon">%</span>
                    </div>
                    @if ($errors->has('penPersen'))
                        <span class="help-block">{{ $errors->first('penPersen') }}</span>
                    @endif
                </div>
        </div>        
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Belanja</h3>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            @if ($errors->any())
                <div class="form-group col-md-5 {{ $errors->has('belAnggaran') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group col-md-5">
            @endif
                    {!! Form::label('belAnggaran', 'Anggaran:', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        {!! Form::text('belAnggaran', null, ['class' => 'form-control', 'id'=>'belAnggaran', 'onkeyup'=>'belTotal()']) !!}
                    </div>
                    @if ($errors->has('belAnggaran'))
                        <span class="help-block">{{ $errors->first('belAnggaran') }}</span>
                    @endif
                </div>
            @if ($errors->any())
                <div class="form-group col-md-5 {{ $errors->has('belRealisasi') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group col-md-5">
            @endif
                    {!! Form::label('belRealisasi', 'Realisasi:', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        {!! Form::text('belRealisasi', null, ['class' => 'form-control', 'id'=>'belRealisasi', 'onkeyup'=>'belTotal()']) !!}
                    </div>
                    @if ($errors->has('belRealisasi'))
                        <span class="help-block">{{ $errors->first('belRealisasi') }}</span>
                    @endif
                </div>
            
            @if ($errors->any())
                <div class="form-group col-md-2 {{ $errors->has('belPersen') ? 'has-error' : 'has-success' }}">
            @else
                <div class="form-group col-md-2">
            @endif
                    {!! Form::label('belPersen', 'Persentase:', ['class' => 'control-label']) !!}
                    <div class="input-group">
                        {!! Form::text('belPersen', null, ['class' => 'form-control read', 'id'=>'belPersen', 'readonly']) !!}
                        <span class="input-group-addon">%</span>
                    </div>
                    @if ($errors->has('belPersen'))
                        <span class="help-block">{{ $errors->first('belPersen') }}</span>
                    @endif
                </div>
        </div>        
    </div>
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('script')
    <script>
        $(document).ready(function(){
            $('#penAnggaran').mask('#,##0.00', {reverse: true});
            $('#penRealisasi').mask('#,##0.00', {reverse: true});
            $('#belAnggaran').mask('#,##0.00', {reverse: true});
            $('#belRealisasi').mask('#,##0.00', {reverse: true});
        });

        function penTotal() {
            if ($('#penAnggaran').val() && $('#penRealisasi').val() != 0) {
                var anggaran = parseFloat(document.getElementById('penAnggaran').value.replace(/,/gi,''));
                var realisasi = parseFloat(document.getElementById('penRealisasi').value.replace(/,/gi,''));
                var persentase = (realisasi/anggaran)*100;
                if(persentase==100){
                    document.getElementById('penPersen').value = persentase;
                }else{
                    document.getElementById('penPersen').value = persentase.toFixed(2);
                }
            } else{
                document.getElementById('penPersen').value = "0";
            }
        }

        function belTotal() {
            if ($('#belAnggaran').val() && $('#belRealisasi').val() != 0) {
                var anggaran = parseFloat(document.getElementById('belAnggaran').value.replace(/,/gi,''));
                var realisasi = parseFloat(document.getElementById('belRealisasi').value.replace(/,/gi,''));
                var persentase = (realisasi/anggaran)*100;
                if(persentase==100){
                    document.getElementById('belPersen').value = persentase;
                }else{
                    document.getElementById('belPersen').value = persentase.toFixed(2);
                }
            } else{
                document.getElementById('belPersen').value = "0";
            }
        }
    </script>
@endsection