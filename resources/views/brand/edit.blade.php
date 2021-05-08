@extends('layouts.app')
@section('header_title', 'Marcas')
@section('header_sub_title', 'Editar Marca')
@section('content')
<div class="row mx-5">
    <div class="content">
        <div class="box box-info">
            <div class="box-header">
            <h4>Edite la información para actualizar la marca</h4>
            </div>
            <div class="box-body">
                
                    <form method="POST" action="{{ route('brands.update', $brand->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Nombre de la marca</label>
                                    <input class="form-control" type="text" name="name" value="{{$brand->name}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Imagen actual</label>
                                    <img class="img-brand-edit form-control" src="{{asset('storage/'.$brand->url_image)}}" alt="{{$brand->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Cambiar imagen de la marca</label>
                                    <input class="form-control" type="file" accept="image/*" name="image">
                                </div>
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
@endsection
