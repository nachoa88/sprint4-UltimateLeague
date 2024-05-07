@extends('layouts.app')

@section('content')
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
        You're viewing details of League: <span class="text-teal-300">{{ $league->name }}</span></h1>
    <p class="text-lg font-normal text-gray-200 lg:text-xl">Here you'll see soon all the information
        of the selected League.</p>
    <a href="{{ route('leagues.index') }}"
        class="relative inline-flex items-center justify-center p-0.5 my-4 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-400">
        <span
            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Return to Leagues
        </span>
    </a>
@endsection
