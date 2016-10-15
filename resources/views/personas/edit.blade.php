@extends('layouts.dashboard')
@section('page_heading','Editar persona')

@section('content')
{!! Form::model($persona, [
        'method' => 'PATCH',
        'route' => ['personas.update', $persona->id],
        ]) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    {!! Form::label('nombre', 'Nombre del persona:', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null,['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar persona', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection