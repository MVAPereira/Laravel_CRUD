<h1>Esse é um teste!!!</h1>
@if(true)
 <p>batata</p>
@endif 

<a href="/">{{$name}}</a>

@for($i = 0; $i < count($clients); $i++)
    @if($clients[$i] == "Luan")
        <p>Opa beleza bicho</p>
    @endif
    <p> {{$clients[$i]}} -- {{$i}} </p>
@endfor

@foreach ($clients as $client)
    <p>{{ $loop->index }}</p>
    <p> {{ $client }}</p>
@endforeach

@php
    echo "pega na minha " . $name;

@endphp

{{-- eu gosto de batata --}}