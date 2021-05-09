@extends('layouts.app')
@section('header_title', 'Productos')
@section('header_sub_title', 'Listado de Productos')
@section('content')
<div class="row mx-5">
    <div class="content">
    <div class="box box-info">
        <div class="box-header">
    <a href="{{route('products.create')}}" class="btn btn-primary">Agregar</a>
        </div>
        <div class="box-body">
            <table id="products" class="table responsive">
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
                        @if($product->url_image)
                            <img class="img-brand" src="{{asset('storage/'.$product->url_image)}}" alt="{{$product->name}}">
                        @else
                            <img class="img-brand" src="{{asset('img/imagen_no_disponible.png')}}" alt="{{$product->name}}">
                        @endif
                        </td>
                        <td>{{$product->name}}</td>
                        <td>
                            @switch($product->size)
                                @case(1)    
                                    Talla S
                                    @break
                                @case(2)    
                                    Talla M
                                    @break
                                @case(3)    
                                    Talla L
                                    @break
                            @endswitch
                        </td>
                        <td>{{$product->observations}}</td>
                        <td>{{$product->brand->name}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->boarding_date}}</td>
                        <td>
                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" onclick="deleteProduct({{$product->id}},'{{$product->name}}')"><i class="fa fa-trash"></i></a>
                        <form id="delete-{{$product->id}}" method="POST" action="{{route('products.destroy', $product->id)}}">
                            @csrf
                            @method('delete')
                        </form>
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
        $('#products').DataTable(
            {
                "autoWidth": true
            }
        );
    } );

    function deleteProduct(id, name) {
        var form = $('#delete-'+id)
        Swal.fire({
            title: 'Eliminar Producto',
            text: "¿Seguro que desea eliminar: " + name + "?.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
            } 
        })
    }
</script>
@endsection