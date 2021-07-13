@if (isset($user))
    {!! Form::hidden('id', $user->id) !!}
@endif

<hr>
<div class="panel-body">
    {{-- Nama --}}
    @if ($errors->any())
        <div class="form-group {{ $errors->has('name') ? 'has-error' : 'has-success' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('name', 'Nama:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>

    {{-- Telp --}}
    @if ($errors->any())
        <div class="form-group {{ $errors->has('telfon') ? 'has-error' : 'has-success' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('telfon', 'Nomor Telefon :', ['class' => 'control-label']) !!}
        {!! Form::text('telfon', null, ['class' => 'form-control', 'required', 'pattern'=>'\d*', 'maxlength'=>'15', 'title'=>'Masukkan Angka']) !!}
        @if ($errors->has('telfon'))
            <span class="help-block">{{ $errors->first('telfon') }}</span>
        @endif
    </div>

    {{-- Email --}}
    @if ($errors->any())
        <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
    </div>

    {{-- Password --}}
    @if ($errors->any())
        <div class="form-group {{ $errors->has('password') ? 'has-error' : 'has-success' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
        @if ($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
    </div>

    {{-- Password Confirmation --}}
    @if ($errors->any())
        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : 'has-success' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('password_confirmation', 'Password Confirmation:', ['class' => 'control-label']) !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        @if ($errors->has('password_confirmation'))
            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
        @endif
    </div>

    {{-- Level --}}
    @if (Auth::user()->level == 'admin')
        <?php 
            $disabled1 = Form::radio('level', 'admin');
            $disabled2 = Form::radio('level', 'operator');
        ?>        
    @else
        <?php 
            $disabled1 = Form::radio('level', 'admin', null,  ['disabled']); 
            $disabled2 = Form::radio('level', 'operator', null,  ['disabled']);
        ?>
    @endif
    <?php $vali = $errors->has('nomor_telepon')? ['class' => 'form-control is-invalid']:['class' => 'form-control is-valid'] ?>
    @if ($errors->any())
        <div class="form-group {{ $errors->has('level') ? 'has-error' : 'has-success' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('level', 'Level User:', ['class' => 'control-label']) !!}
        <div class="radio">
            <label>{!! $disabled1 !!} Administrator</label>
        </div>
        <div class="radio">
            <label>{!! $disabled2 !!} Operator</label>
        </div>
        @if ($errors->has('level'))
            <span class="help-block">{{ $errors->first('level') }}</span>
        @endif
    </div>

    {{-- Submit Button --}}
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
</div>