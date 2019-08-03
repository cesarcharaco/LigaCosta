<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                {{--<a class="navbar-brand" href="./"><img src="{{ asset('sufee/images/logo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset('sufee/images/logo2.png') }}" alt="Logo"></a>--}}
                <span class="navbar-brand">LigaCosta</span>
                <span class="navbar-brand hidden">LC</span>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <h3 class="menu-title">Jugadores</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Inscripción</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('jugadores.index') }}">Listado</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Suspender/Activar</a></li>
                        </ul>
                    </li>
                    {{--
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>
                    --}}
                    <h3 class="menu-title">Coachs</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="{{ route('coachs.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Listado </a>
                    </li>
                    {{--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Listado</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>--}}
                    <h3 class="menu-title">Equipos</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="{{ route('equipos.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Listado </a>
                    </li>
                    {{--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>--}}
                    @if(\Auth::getUser()->name=="Administrador")
                    <h3 class="menu-title">Usuarios</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="{{ route('users.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Listado </a>
                    </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->