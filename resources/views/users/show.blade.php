@extends('layouts.app')

@section('title', "User List  { $user->name }")

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">User List {{ $user->name }}</h1>

    <ul>
        
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="py-12">
        @method('DELETE')
        @csrf
        <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">
            Delete
        </button>
    </form>
@endsection