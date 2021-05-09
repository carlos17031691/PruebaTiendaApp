@extends('layouts.app')
@section('header_title', 'Marcas')
@section('header_sub_title', 'Listado de Marcas')
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
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td>
                            
                        @if($brand->url_image)
                            <img class="img-brand" src="{{asset('storage/'.$brand->url_image)}}" alt="{{$brand->name}}">
                        @else
                            <img class="img-brand" src="{{asset('img/imagen_no_disponible.png')}}" alt="{{$brand->name}}">
                        @endif
                        </td>
                        <td>{{$brand->name}}</td>
                        <td>
                        <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" onclick="deleteBrand({{$brand->id}},'{{$brand->name}}')"><i class="fa fa-trash"></i></a>
                        <form id="delete-{{$brand->id}}" method="POST" action="{{route('brands.destroy', $brand->id)}}">
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
        $('#brands').DataTable(
            {
                "autoWidth": true
            }
        );
    } );

    function deleteBrand(id, name) {
        var form = $('#delete-'+id)
        Swal.fire({
            title: 'Eliminar Marca',
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