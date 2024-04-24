@extends('layouts.app')

@section('content')

<h1>Testing Teams Page</h1>
<p>Bla bla bla of content.</p>


<h1>Testing routes</h1>
<a class="nav-link" href="/">Home Route</a>

<ul class="list-unstyled mb-0">
    @foreach($teams as $team) 
        <li><a href="#!">{{ $team }}</a></li>
    @endforeach
</ul>

@endsection
