@extends('layouts.app')

@section('content')
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl text-center">
        You're viewing details of League: <span class="text-teal-300">{{ $league->name }}</span></h1>
    <div class="flex justify-center items-center">
        <div class="w-full max-w-sm bg-cyan-700 border border-cyan-950 rounded-lg shadow text-center">
            <div class="items-center p-10">
                <div>
                    <h3 class="mb-1 text-xl font-medium text-white">{{ $league->name }}</h3>
                    <p class="text-lg text-gray-200">{{ $league->country }}</p>
                </div>
            </div>
            <div class="border-t border-cyan-950 p-4">
                <div>
                    <h5 class="mb-1 text-lg font-medium text-white">League's Level: <span
                            class="text-gray-200">{{ $levelDescription }}</span></h5>
                </div>
            </div>
            <div class="border-t border-cyan-950 p-4">
                <p class="mb-1 text-lg font-medium text-white">Nº Teams: <span
                        class="text-gray-200">{{ $league->teams_number }}</span></p>
            </div>
            @foreach ($league->teams as $team)
                <div class="flex items-center justify-start py-2">
                    <div class="px-4">
                        <img class="w-10 h-10" src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->name }} logo">
                    </div>
                    <div class="border-l border-gray-200 px-4">
                        <p class="mb-1 text-lg font-medium text-gray-200">{{ $team->name }}</p>
                    </div>
                </div>
            @endforeach
            <div class="justify-center items-center">
                <a href="{{ route('leagues.index') }}"
                    class="relative inline-flex items-center justify-center p-0.5 my-4 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-400">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Return to Leagues
                    </span>
                </a>
            </div>
        </div>
    </div>
@endsection
