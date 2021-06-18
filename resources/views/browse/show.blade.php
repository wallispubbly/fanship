@foreach($matches as $m)
    <h1>Match: {{ $m[1]->name }} ({{ number_format($m[0] * 100.0, 0) }}%)</h1>
    <ul>
        <li>{{$m[2]->age}}
        <li>{{$m[2]->location}}
        <li>{{$m[2]->bio}}
    </ul>
@endforeach