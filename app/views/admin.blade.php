@extends('layouts.master')

@section('title')
@parent
:: Login
@stop

{{-- Content --}}
@section('content')

<div class="row">
  @if (Auth::guest())
    <div class="col-md-4 col-md-offset-4">


        {{ Form::open(array('url' => 'admin', 'class' => 'form-horizontal')) }}


        <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}

            <div class="controls">
                {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
                {{ $errors->first('username') }}
            </div>
        </div>


        <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
            {{ Form::label('password', 'Mot de passe', array('class' => 'control-label')) }}

            <div class="controls">
                {{ Form::password('password', array('class' => 'form-control')) }}
                {{ $errors->first('password') }}
            </div>
        </div>

        <br><br>

        <div class="control-group">
            <div class="controls">
                {{ Form::submit('Se connecter', array('class' => 'btn btn-primary btn-lg btn-block')) }}
            </div>
        </div>

    </div>
    @else

    Lala

    @endif
</div>

{{ Form::close() }}
@stop
