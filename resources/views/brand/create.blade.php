@extends('layouts.app')
@section('header_title', 'Marcas')
@section('header_sub_title', 'Agregar Marca')
@section('content')
<div class="row mx-5">
    <div class="content">
        <div class="box box-info">
            <div class="box-header">
            <h4>Ingrese la información para agregar la nueva marca</h4>
            </div>
            <div class="box-body">
                <div class="row">
                    <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Nombre de la marca</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Imagen de la marca</label>
                                <input class="form-control" type="file" accept="image/*" name="image">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
