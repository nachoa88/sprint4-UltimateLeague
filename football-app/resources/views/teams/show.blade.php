@extends('layouts.app')

@section('content')
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
        You're viewing details of Team: <span class="text-teal-300">{{ $team->name }}</span></h1>

    <div class="flex justify-center items-center">
        <div class="w-full max-w-sm bg-cyan-700 border border-cyan-950 rounded-lg shadow">
            <div class="flex items-center p-10">
                <img class="w-24 h-24 mr-6 md:mr-8 lg:mr-12" src="{{ asset('storage/' . $team->logo) }}"
                    alt="{{ $team->name }} image" />
                <div>
                    <h3 class="mb-1 text-xl font-medium text-white">{{ $team->name }}</h3>
                    <span class="text-lg text-gray-200">{{ $team->league->name ?? '' }}</span>
                </div>
            </div>
            <div class="border-t border-cyan-950 p-4 text-center">
                <h5 class="mb-1 text-xl font-medium text-white">Stadium</h5>
                <p class="text-lg text-gray-200">Name: {{ $team->stadium_name ?? 'N/A' }}</p>
                <p class="text-lg text-gray-200">Capacity: {{ $team->stadium_capacity ?? 'N/A' }}</p>
            </div>
            <div class="border-t border-cyan-950 p-4 text-center">
                <p class="mb-1 text-lg font-medium text-white">Country: <span
                        class="text-gray-200">{{ $team->country }}</span></p>

                <p class="b-1 text-lg font-medium text-white">City: <span class="text-gray-200">{{ $team->city }}</span>
                </p>
            </div>
            <div class="border-t border-cyan-950 p-4">
                <div class="flex justify-center">
                    <h5 class="mb-1 text-lg font-medium text-white">Year of Foundation: <span
                            class="text-gray-200">{{ $team->founded ?? 'N/A' }}</span></h5>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <a href="{{ route('teams.index') }}"
                    class="relative inline-flex items-center justify-center p-0.5 my-4 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-red-400 to-blue-600 group-hover:from-red-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-400">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Return to Teams
                    </span>
                </a>
            </div>
        </div>
    </div>
@endsection
