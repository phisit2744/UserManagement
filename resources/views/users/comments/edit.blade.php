@extends('layouts.app')

@section('title', " User Edit Comment { $user->name }")

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Edit User Comment {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('comments.update', $comment->id) }}" method="post">
        @method('PUT')
        @include('users.comments._partials.form')
    </form>
@endsection