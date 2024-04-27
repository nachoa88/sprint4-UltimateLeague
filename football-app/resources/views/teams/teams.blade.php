@extends('layouts.app')

@section('content')
    <h1 class="mt-8 pt-2 text-2xl font-bold text-blue-600">Create a Team</h1>
    <p class="mt-2 mb-4 text-black dark:text-white">Do you want to create a new team? With Football APP is possible, just
        press the button and follow
        the instructions.</p>
    <a href="{{ route('teams.create') }}"
        class="mt-4 bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Create a Team</a>

    <h1 class="mt-16 text-2xl font-bold text-blue-600">Teams List</h1>

    <table class="table-auto w-full mt-4 mb-16 text-left text-black dark:text-white">
        <thead>
            <tr>
                <th class="px-4 py-2">Logo</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">City</th>
                <th class="px-4 py-2">League</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td class="border px-4 py-2">
                        <img src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->name }} logo" class="w-16">
                    </td>
                    <td class="border px-4 py-2">{{ $team->name }}</td>
                    <td class="border px-4 py-2">{{ $team->city }}</td>
                    <td class="border px-4 py-2">{{ $team->league }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('teams.show', $team->id) }}" class="text-blue-600 px-1">Details</a>
                        <a href="{{ route('teams.edit', $team->id) }}" class="text-yellow-600 px-1">Edit</a>
                        <form method="POST" action="{{ route('teams.destroy', $team) }}" class="inline px-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete the team?')" class="text-red-600">Delete</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
