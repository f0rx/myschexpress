<!-- breadcrumbs -->
<nav id="breadcrumbs">
    <ul>
        <li><a href="{{ route('/') }}"> Home </a></li>
        @foreach ($breadcrumbs as $key => $url)
            @if (! $loop->last)
                <li><a href="{{ url($url) }}">{{ ucfirst($key) }}</a></li>
            @else
                <li>{{ ucfirst($key) }}</li>
            @endif
        @endforeach
    </ul>
</nav>
