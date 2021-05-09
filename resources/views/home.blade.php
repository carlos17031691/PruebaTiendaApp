@extends('layouts.app')
@section('header_title', 'Inicio')
@section('header_sub_title', 'Tablero principal')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$brands}}</h3>

              <p>Marcas</p>
            </div>
            <div class="icon">
              <i class="fa fa-tags"></i>
            </div>
            <a href="{{route('brands.index')}}" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$products}}</h3>

              <p>Productos</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="{{route('products.index')}}" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$users}}</h3>

              <p>Usuarios registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a class="small-box-footer"><i class="fa fa-home"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$visitors}}</h3>

              <p>Numero de Visitas</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-home"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
@endsection
