<div>
    <h1>{{ $title }}</h1>
    <h2>{{ $info }}</h2>
    {{ $slot }}
    <ul>
        @foreach($list as $value)
        <li>
            {{ $value }}
        </li>
        @endforeach
    </ul>
    {{ $slot }}

</div>
