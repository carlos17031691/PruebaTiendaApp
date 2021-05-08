@extends('layouts.app')
@section('header_title', 'Productos')
@section('header_sub_title', 'Agregar Producto')
@section('content')
<div class="row mx-5">
    <div class="content">
        <div class="box box-info">
            <div class="box-header">
            <h4>Ingrese la información para agregar el nuevo producto</h4>
            </div>
            <div class="box-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Nombre de Producto</label>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Marca</label>
                                    <select class="form-control" name="brand_id" required>
                                        <option slected disabled>Seleccione una marca</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Talla</label>
                                    <select class="form-control" name="size" required>
                                        <option slected disabled>Seleccione una talla</option>
                                            <option value="1">Talla S</option>
                                            <option value="2">Talla M</option>
                                            <option value="3">Talla L</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Observaciones</label>
                                    <input class="form-control" type="text" name="observations" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Cantidad</label>
                                    <input class="form-control" type="number" name="stock" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Embarque</label>
                                    <input class="form-control" type="date" name="boarding_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Imagen del producto</label>
                                    <input class="form-control" type="file" accept="image/*" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <button class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>

    </div>
</div>
@endsection
