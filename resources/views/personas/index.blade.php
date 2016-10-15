@extends('layouts.dashboard')
@section('page_heading','personas')

@section('content')

<table class="table table-hover " id="personas-table">
    <thead>
        <th>Nombre</th>
        <th>Acciones</th>
    </thead>
</table>
@stop

@push('scripts')
<script>
$(function() {
    $('#personas-table').DataTable({
        processing: true,
        serverSide: true,
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
        },
        ajax: '{!! route('personas.data') !!}',
        columns: [
            { data: 'namelink', name: 'nombre' },
            { data: 'action', name: 'action', orderable: false, searchable: false},            
        ]
    });
});
</script>
@endpush