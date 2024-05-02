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

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-400">
            <thead class="text-s text-gray-200 uppercase bg-sky-950">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        League
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Home Team
                    </th>
                    <th scope="col" class="px-2 py-3 text-center">
                        Result
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Away Team
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr class="bg-cyan-700 border-b border-cyan-950 hover:bg-cyan-800">
                        <td class="px-6 py-4 text-white text-base font-semibold">
                            {{ $game->league->name }}
                        </td>
                        <td class="px-6 py-4 text-white text-base font-semibold">
                            <div class="flex items-center justify-end">
                                {{ $game->homeTeam->name }}
                                <img class="ml-2 w-10 h-10" src="{{ asset('storage/' . $game->homeTeam->logo) }}"
                                    alt="{{ $game->homeTeam->name }} logo">
                            </div>
                        </td>
                        <td class="px-2 py-4 text-white text-base font-semibold text-center">
                            {{ $game->home_team_goals }} - {{ $game->away_team_goals }}
                        </td>
                        <td class="px-6 py-4 text-white text-base font-semibold">
                            <div class="flex items-center justify-start">
                                <img class="mr-2 w-10 h-10" src="{{ asset('storage/' . $game->awayTeam->logo) }}"
                                    alt="{{ $game->awayTeam->name }} logo">
                                {{ $game->awayTeam->name }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-white text-base font-semibold text-center">
                            {{ \Carbon\Carbon::parse($game->date)->format('d/m/Y H:i') }}
                        </td>
                        <td class="px-6 py-4 text-base">
                            <div class="flex space-x-4 justify-center">
                                <a href="{{ route('games.show', $game->id) }}" class="text-blue-200 hover:text-blue-400">
                                    <i
                                        class="fa-solid fa-magnifying-glass fa-xl hover:scale-150 transition-transform duration-200"></i>
                                </a>
                                <a href="{{ route('games.edit', $game->id) }}" class="text-amber-400 hover:text-amber-600">
                                    <i
                                        class="fa-regular fa-pen-to-square fa-xl hover:scale-150 transition-transform duration-200"></i>
                                </a>
                                <form method="POST" action="{{ route('games.destroy', $game) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete the game?')"
                                        class="text-red-400 hover:text-red-600">
                                        <i
                                            class="fa-regular fa-trash-can fa-xl hover:scale-150 transition-transform duration-200"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
