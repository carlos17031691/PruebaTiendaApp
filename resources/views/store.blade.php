@extends('layouts.store')
@section('header_title', 'Bienvenido a la Tienda')
@section('header_sub_title', 'Catalogo de Productos')
@section('content')
<div class="row">

</div>
<div class="row">
  @foreach($products as $product)
    <div class="col-sm-3">
      <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-aqua-active">
          <h4 class="widget-user-username">{{$product->name}}</h4>
          <h5 class="widget-user-desc">{{$product->observations}}</h5>
          <h5 class="widget-user-desc">{{$product->brand->name}}</h5>
        </div>
        <div class="widget-user-image product">
          <img class="img-circle product" src="{{asset('storage/'.$product->brand->url_image)}}" alt="">
        </div>
        <div class="box-body">
          <img class="img-product" src="{{asset('storage/'.$product->url_image)}}" alt="{{$product->name}}">
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-6 border-right">
              <div class="description-block">
                <h5 class="description-header">Disponible</h5>
                <span class="description-text">{{$product->stock}}</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <div class="description-block">
                <h5 class="description-header">Talla</h5>
                <span class="description-text">
                  @switch($product->size)
                      @case(1)    
                          S
                          @break
                      @case(2)    
                          M
                          @break
                      @case(3)    
                          L
                          @break
                  @endswitch
                </span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
