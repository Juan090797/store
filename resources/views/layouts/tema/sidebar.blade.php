<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="javascript:void(0)" class="brand-link">
        <img src="{{asset('img/coorporacion.ico')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text" style="color:white">GRUPO MARQUINA</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="javascript:void(0)" class="d-block" style="color:white">{{ Auth::user()->name}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ request()->is('dashboard') ? 'menu-open' : '' }}">
                    <a href="javascript:void(0)" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt" style="color:white"></i>
                        <p style="color:white">
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Resumen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Modulos</li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('productos') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt" style="color:white"></i>
                        <p style="color:white">Productos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fa fa-users" style="color:white"></i>
                        <p style="color:white">
                            Clientes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

