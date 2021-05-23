<header>
    <h1>Buscando Rubro</h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('inicio') }}">Inicio</a>{{ request()->routeIs('inicio') ? 'active' : '' }}
            </li>
            <li>
                <a href="{{ route('rubros.index') }}">Rubros</a>{{ request()->routeIs('rubros.*') ? 'active' : '' }}
            </li>
            <li>
                <a href="{{ route('busquedas.index') }}"> Busquedas
                </a>{{ request()->routeIs('busquedas.*') ? 'active' : '' }}
            </li>
            <li>
                <a href="{{ route('inscripciones.index') }}">Inscripciones
                </a>{{ request()->routeIs('inscripciones.*') ? 'active' : '' }}
            </li>
        </ul>
    </nav>
</header>