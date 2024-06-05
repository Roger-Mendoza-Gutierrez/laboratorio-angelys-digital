@extends('layouts.admin_template')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Crear documento</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('documents.index') }}">Lista de documentos</a></li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Nuevo documento</h5>
                <form action="{{ route('documents.update', ['document' => $document->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input35" placeholder="Nombre del documento" name="name" value="{{ old('name') ?? $document->name }}">
                            {{-- validar este input --}}
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Actualizar</button>
                                <a href="{{ route('documents.index') }}" class="btn btn-light px-4">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--end row-->
@endsection
