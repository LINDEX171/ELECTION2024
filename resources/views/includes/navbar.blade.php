<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <a class="navbar-brand" href="#" style="color: black;">🇸🇳</a>
    <ul class="nav nav-pills">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: black;">{{ auth()->user()->name }}</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/candidats-disponible" style="color: black;">candidats-disponible</a></li>
                <li><a class="dropdown-item" href="/programmes-disponible" style="color: black;">programmes-disponible</a></li>
                <li><a class="dropdown-item" href="/electeur" style="color: black;">voter</a></li>
                <li><a class="dropdown-item" href="{{ route('pourcentages') }}" style="color: black;">statistique</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: black;">
                        {{ __('SE DECONNECTER') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
