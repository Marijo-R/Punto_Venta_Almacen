<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Punto de Venta</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link href="{{ asset('assets/materialize/css/materialize.min.css') }}" rel="stylesheet" media="screen,projection">
        <!-- Estilos de bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Estilos de FontAwesome-->
        <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
        <!-- Custom -->
        <link href="{{ asset('assets/css/custom-styles.css') }}" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
        <!-- Materialize-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <!--Menú Hamburguesa-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Parte color rojo-->
                    <a class="navbar-brand waves-effect waves-dark" onclick="location.href='{{ url('/index') }}'">
                        <i class="large material-icons">store</i>
                        <strong>Punto de Venta</strong>
                    </a>
                    <!--Menú Hamburguesa-->
                    <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
                </div>
                <!--usuario-->
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1">
                        <i class="fa fa-user fa-fw"></i> <b>Mjo26</b>
                        <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Estructura de usuario-->
            <ul id="dropdown1" class="dropdown-content">
                <li>
                <a href="{{ url('/login') }}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                </li>
            </ul>
            <!--Menú lateral -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <a href="{{ route('index') }}" class="waves-effect waves-dark"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="{{ url('/lista_usuarios') }}" class="waves-effect waves-dark"><i class="fa fa-user"></i> Usuarios</a>
                        </li>
                        <li>
                            <a  class="waves-effect waves-dark"><i class="fa fa-briefcase"></i>Empleados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('/lista_empleados') }}">Empleados</a></li>
                                <li><a href="{{ url('/lista_pues') }}">Puestos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('proveedor')}}" class="waves-effect waves-dark"><i class="fa fa-truck"></i> Proveedores</a>
                        </li>
                        <li>
                            <a href="{{ url('/lista_clientes') }}" class="waves-effect waves-dark"><i class="fa fa-male"></i> Clientes</a>
                        </li>
                        <li>
                            <a href="{{ url('/lista_ventas') }}" class="waves-effect waves-dark"><i class="fa fa-shopping-cart"></i> Ventas</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark"><i class="fa fa-desktop"></i>Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ route('producto') }}">Productos</a></li>
                                <li><a href="{{ route('medida') }}">Tipos de medidas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-dark">
                                <i class="fa fa-clipboard">
                                </i> Orden de compra<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="{{ route('orden') }}">Ordenes de compra</a>
                                </li>
                                <li>
                                <a href="{{ route('orden') }}">Entrada de producto</a>
                                </li>
                                <li>
                                <a href="{{ route('devolucion') }}">Devoluciones a proveedor</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
            
        @yield('content')
                
            <!-- Despliegue de submenu y boton cerrar -->
            <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
            <!-- botón cerrar sesión -->
            <script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>
            <!--Submenu-->
            <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
            <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="{{ asset('assets/js/alerta.js') }}"></script>
    </body>
</html>