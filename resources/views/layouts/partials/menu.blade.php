<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Principal</li>
        <li class="{{Route::is('dashboard') ? 'active' : ''}}">
          <a href="{{route('dashboard')}}">
            <i class="fa fa-home"></i> <span>inicio</span>
            
          </a>
        </li>
        <li class="{{Route::is('brands*') ? 'active' : ''}}">
          <a href="{{route('brands.index')}}">
            <i class="fa fa-tags"></i> <span>Marcas</span>
            
          </a>
        </li>
        <li class="{{Route::is('products*') ? 'active' : ''}}">
          <a href="{{route('products.index')}}">
            <i class="fa fa-shopping-cart"></i> <span>Productos</span>
            
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>