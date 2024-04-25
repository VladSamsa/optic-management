@extends('template')

@section('title', 'categorias')

@push('css')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
@endpush

@section('content')

@if (session('success'))
    

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.AddEventListener = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    
    Toast.fire({
        icon: "success",
        title: "Categoria agregada"
    });
</script>
@endif

<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Categorias</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Categorías</li>
    </ol>
    <div class="mb-4">
    <a href="{{ route('categorias.create') }}">
        <button type="button" class="btn btn-primary">Añadir registro</button>
    </a>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Categorias
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)

                    <tr>
                        <td>
                            {{$categoria->caracteristica->nombre}}
                        </td>
                        <td>
                            {{$categoria->caracteristica->descripcion}}
                        </td>

                        <th>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                
                                <form action="{{ route('categorias.edit', ['categoria' => $categoria])}}" method="get">  
                                    <button type="submit" class="btn btn-warning">Editar</button>
                                </form>
                            
                                
                                <button type="button" class="btn btn-danger">Eliminar</button>
                              </div>
                        </th>

                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>    
@endsection
    
@push('js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css" rel="stylesheet">
<script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
@endpush