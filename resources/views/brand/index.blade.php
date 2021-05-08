@extends('layouts.app')
@section('header_title', 'Marcas')
@section('header_sub_title', 'Listado de Marcas')
@section('content')
<div class="row mx-5">
    <div class="content">
    <div class="box box-info">
        <div>
            
        </div>
        <div class="box-body">
            <table id="brands" class="table responsive">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    
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
        $('#brands').DataTable();
    } );
</script>
@endsection