@extends('layouts.app')

@section('content')
    <h1 class="mt-8 pt-2 text-2xl font-bold text-blue-600">Create a Team</h1>
    <p class="mt-2 mb-4">Do you want to create a new team? With Football APP is possible, just press the button and follow
        the instructions.</p>
    <a href="{{ route('teams.create') }}"
        class="mt-4 bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Create a Team</a>

    <h1 class="mt-16 text-2xl font-bold text-blue-600">Teams List</h1>

    <table class="table-auto w-full mt-4 mb-16 text-left">
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
                        @if ($team->logo)
                            <img src="" alt="{{ $team->name }} logo" class="w-16">
                        @else
                            No logo
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $team->name }}</td>
                    <td class="border px-4 py-2">{{ $team->city }}</td>
                    <td class="border px-4 py-2">{{ $team->league }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('teams.show', $team->id) }}" class="text-blue-600 px-1">Details</a>
                        <a href="{{ route('teams.edit', $team->id) }}" class="text-yellow-600 px-1">Edit</a>
                        <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="inline px-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Delete</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
