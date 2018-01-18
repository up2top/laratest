<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/posts">Posts</a>
            <a class="nav-link" href="/posts/create">Create post</a>
            <a class="nav-link" href="/locations">Map</a>
            @can('create-location')
            <a class="nav-link" href="/locations/create">Create Location</a>
            @endcan
            @if (Auth::check())
                <span class="nav-link ml-auto" href="">{{ Auth::user()->name }}</span>
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            @else
                <a class="nav-link ml-auto" href="{{ route('login') }}">Login</a>
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            @endif
        </nav>
    </div>
</div>
