@extends('layouts.app')
@section('content')
    <form action="{{route('users.store')}}" method="post">
        <h1>Crea utente</h1>
        @csrf
        <input class="border border-black border-solid rounded-lg placeholder:text-gray-100" type="text" name="name">
        <input class="border border-black border-solid rounded-lg placeholder:text-gray-100" type="email" name="email">
        <input class="border border-black border-solid rounded-lg placeholder:text-gray-100" type="password" name="password">
        <button class="bg-blue-500" type="submit">Invia</button>
    </form>
@endsection
