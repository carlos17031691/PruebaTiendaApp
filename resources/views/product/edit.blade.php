@extends('layouts.app')
@section('header_title', 'Productos')
@section('header_sub_title', 'Editar Producto')
@section('content')
<div class="row mx-5">
    <div class="content">
        <div class="box box-info">
            <div class="box-header">
            <h4>Edite la información para actualizar el producto</h4>
            </div>
            <div class="box-body">
                
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Nombre de Producto</label>
                                    <input class="form-control" type="text" name="name" value="{{$product->name}}" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Marca</label>
                                    <select class="form-control" name="brand_id" required>
                                        <option disabled>Seleccione una marca</option>
                                        @foreach($brands as $brand)
                                            <option @if( $brand->id == $product->brand_id ) selected @endif value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Talla</label>
                                    <select class="form-control" name="size" required>
                                        <option slected disabled>Seleccione una talla</option>
                                            <option @if( $product->size == 1 ) selected @endif value="1">Talla S</option>
                                            <option @if( $product->size == 2 ) selected @endif value="2">Talla M</option>
                                            <option @if( $product->size == 3 ) selected @endif value="3">Talla L</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Observaciones</label>
                                    <input class="form-control" type="text" name="observations" value="{{$product->observations}}" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Cantidad</label>
                                    <input class="form-control" type="number" name="stock" value="{{$product->stock}}" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Embarque</label>
                                    <input class="form-control" type="date" name="boarding_date" value="{{$product->boarding_date}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Imagen actual</label>
                                    <img class="img-brand-edit form-control" src="{{asset('storage/'.$product->url_image)}}" alt="{{$product->name}}">
                                </div>
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
