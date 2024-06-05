@extends('layouts.admin_template')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Documentos</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('home') }}">Inicio</a></li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('documents.create') }}" class="btn btn-primary">Crear documento</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Lista de documentos</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fecha de creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                        <tr>
                            <td>{{ $document->id }}</td>
                            <td>{{ $document->name }}</td>
                            <td>{{ $document->created_at }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-warning btn-sm me-2" href="{{ route('documents.show', ['document' => $document->id]) }}"><i class="fadeIn animated bx bx-show-alt"></i>Ver</a>
                                    <a class="btn btn-dark btn-sm me-2" href="{{ route('documents.edit', ['document' => $document->id]) }}"><i class="fadeIn animated bx bx-edit-alt"></i>Editar</a>
                                    <form action="{{ route('documents.destroy', ['document' => $document->id]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fadeIn animated bx bx-trash-alt"></i>Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('dataTables-documents')
    <script src="{{ asset('admin_template/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin_template/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
@endsection
