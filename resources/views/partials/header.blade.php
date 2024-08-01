<header class="header">
    <div class="container">
        <div class="logo">
            <h1 onclick="reloadPage()">Career<span>Advice</span></h1>
        </div>
        <nav class="nav">
            <ul>
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('advice') ? 'active' : '' }}">
                    <a href="{{ route('advice') }}">Advice</a>
                </li>
                <li class="{{ request()->routeIs('resources') ? 'active' : '' }}">
                    <a href="{{ route('resources') }}">Resources</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
