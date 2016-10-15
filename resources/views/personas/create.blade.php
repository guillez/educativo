@extends('layouts.dashboard')
@section('page_heading','Nueva persona')

@section('content')
{{ Form::open([
        'route' => 'personas.store',
        ]) }}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    {{ Form::label('nombre', 'Nombre del persona:', ['class' => 'control-label']) }}
    {{ Form::text('nombre', null,['class' => 'form-control']) }}
</div>

{{ Form::submit('Crear nueva persona', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}

@endsection