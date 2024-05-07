@extends('layouts.app')

@section('content')
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
        Restoring a <span class="text-teal-300">Deleted Team</span></h1>
    <p class="text-lg font-normal text-gray-200 lg:text-xl">Here you have a list of all the teams that have been deleted,
        select the one you want to restore and press the button.</p>


    <h1 class="my-6 text-3xl font-extrabold leading-none tracking-tight text-white md:text-4xl lg:text-5xl">Teams List</h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-400">
            <thead class="text-s text-gray-200 uppercase bg-sky-950">
                <tr>
                    <th scope="col" class="px-1 py-3 text-center">
                        Logo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        League
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stadium
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Fundation
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Recover
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr class="bg-cyan-700 border-b border-cyan-950 hover:bg-cyan-800">
                        <td class="px-1 py-3 ">
                            <div class="flex items-center justify-center">
                                <img class="w-10 h-10" src="{{ asset('storage/' . $team->logo) }}"
                                    alt="{{ $team->name }} logo">
                            </div>
                        </td>
                        <th scope="row" class="flex flex-col items-start px-6 py-4 text-white whitespace-nowrap">
                            <div class="text-base font-semibold">{{ $team->name }}</div>
                            <div class="font-normal text-gray-300">{{ $team->city }}</div>
                        </th>
                        <td class="px-6 py-4 text-white text-base font-semibold">
                            {{ $team->league->name }}
                        </td>
                        <td class="px-6 py-4 text-white text-base font-semibold">
                            <div class="text-base font-semibold">{{ $team->stadium_name }}</div>
                            <div class="font-normal text-gray-300">{{ $team->stadium_capacity }}</div>
                        </td>
                        <td class="px-6 py-4 text-white text-base font-semibold text-center">
                            {{ $team->founded }}
                        </td>
                        <td class="px-6 py-4 text-base">
                            <div class="flex space-x-4 justify-center">
                                <form method="POST" action="{{ route('teams.restore', $team->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to restore this team?')"
                                        class="text-green-400 hover:text-green-600">
                                        <i
                                            class="fa-solid fa-arrow-rotate-left fa-xl hover:scale-150 transition-transform duration-200"></i>
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
