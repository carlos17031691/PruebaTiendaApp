@extends('layouts.app')
@section('header_title', 'Productos')
@section('header_sub_title', 'Listado de Productos')
@section('content')
<div class="row mx-5">
    <div class="content">
    <div class="box box-info">
        <div class="box-header">
    <a href="{{route('brands.create')}}" class="btn btn-primary">Agregar</a>
        </div>
        <div class="box-body">
            <table id="brands" class="table responsive">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Talla</th>
                        <th>Observaciones</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                        <th>Fecha de Embarque</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            <img class="img-brand" src="{{asset('img/products/'.$product->url_image)}}" alt="{{$product->name}}">
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->size}}</td>
                        <td>{{$product->observations}}</td>
                        <td>{{$product->marca}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->boarding_date}}</td>
                        <td>
                        <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>
        
    </div>
</div>
@endsection
@section('aditionals_scripts')
<script>
    $(document).ready(function() {
        $('#brands').DataTable(
            {
                "autoWidth": true
            }
        );
    } );
</script>
@endsection