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
                            <img class="img-brand" src="{{asset('storage/'.$brand->url_image)}}" alt="{{$brand->name}}">
                        </td>
                        <td>{{$brand->name}}</td>
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