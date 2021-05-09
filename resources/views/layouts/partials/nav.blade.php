<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <img src="{{asset('/img/logo-tiendapp.png')}}" alt="logo tiendApp" class="logo-app">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/img/default-user.png" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{asset('img/default-user.png')}}" class="img-circle" alt="User Image">

                    <p>
                    {{ Auth::user()->name}}
                    <small>Registrado desde: {{ Auth::user()->created_at}}</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-right">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="btn btn-default btn-flat" onclick="event.preventDefault();
                                            this.closest('form').submit();">Cerrar Sesió</a>
                        </form>
                    </div>
                </li>
                </ul>
            </li>
        </ul>
    </div>
    </nav>
</header>