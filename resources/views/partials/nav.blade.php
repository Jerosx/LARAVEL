<nav>
    <ul>
        <li><a class=" {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">@lang('Home')</a></li> 
        <li><a class=" {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">@lang('About')</a></li>
        <li><a class=" {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">@lang('Products')</a></li>
        
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                Cerrar sesión
            </a>
        </li>
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
<hr>