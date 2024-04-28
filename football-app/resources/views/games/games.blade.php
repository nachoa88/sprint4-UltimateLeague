@extends('layouts.app')

@section('content')
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
        Get started creating a <span class="text-teal-300">New Game</span></h1>
    <p class="text-lg font-normal text-gray-200 lg:text-xl">Do you want to create a new fixture? With League Manager is
        possible, just press the button and follow the instructions.</p>
    <a href="{{ route('games.create') }}"
        class="relative inline-flex items-center justify-center p-0.5 my-4 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-400">
        <span
            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Create a Game
        </span>
    </a>

    <h1 class="my-6 text-3xl font-extrabold leading-none tracking-tight text-white md:text-4xl lg:text-5xl">Games List</h1>

    <ul class="list-unstyled mb-16">
        @foreach ($games as $game)
            <li><a href="#!">{{ $game }}</a></li>
        @endforeach
    </ul>
@endsection
