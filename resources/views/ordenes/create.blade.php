@extends('template')

@section('title', 'Crear orden')

@push('css')
<style>
    #description{
        resize: none;
    }
</style>
@endpush

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear orden laboratorio</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('ordens.index')}}">Ordenes</a></li>
        <li class="breadcrumb-item active">Crear categoría</li> 
    </ol>

    <div class="container w-100 border border-3 border-primary rounded p-4 mt-3">
        <form action=" {{ route('ordens.store')}}" method="post">
            @csrf
            <div class="row g3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control">
                    @error('nombre_cliente')
                    <small class="text-danger">{{'*'.$message}}</small>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="graduacion" class="form-label">Graduación</label>
                    <textarea name="graduacion" id="graduacion" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-12">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection

@push('js')
    
@endpush
