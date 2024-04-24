@extends('layouts.app')

@section('content')

<h1>Testing Games Page</h1>
<p>Bla bla bla of content.</p>


<h1>Testing routes</h1>
<a class="nav-link" href="/">Home Route</a>

<ul class="list-unstyled mb-0">
    @foreach($games as $game) 
        <li><a href="#!">{{ $game }}</a></li>
    @endforeach
</ul>

@endsection
