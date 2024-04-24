@extends('template')

@section('title', 'ordenes')
    
@push('css')
    
@endpush

@section('content')
<div class="container-fluid px-4">
    
    <h1 class="mt-4">Ordenes</h1>
    <ol class="breadcrumb mb-4">
        
        <li class="bredcrumb-item active">Inicio</li>

    </ol>
    <div class="mb-4">
        <a href="{{ route('ordens.create') }}">
            <button type="button" class="btn btn-primary">Añadir registro</button>
        </a>
        </div>
    </div>
</div>
@endsection

@push('js')
    
@endpush