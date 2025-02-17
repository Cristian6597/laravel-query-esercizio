@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-4xl font-bold">Insert Book</h1>
    <form action="{{ route('book.store') }}" method="post"> {{-- store indica che sto andando a salvare dei dati --}}
        @csrf {{-- campo nascosto che manda un Token csrf che sincronizza il backend con il front-end, simil autenticazione fatta. 
        In questo modo hai la certezza che le operazioni arrivino dallo specifico form --}}
        <div class="flex flex-col gap-2">
            <label for="name">Book Title:</label>
            <input class="border border-black border-solid rounded-[100px] ps-2" type="text" name="title">
            <label for="email">Author ID:</label>
            <input class="border border-black border-solid rounded-[100px] ps-2" type="text" name="author_id">
            <label for="password">Publish date:</label>
            <input class="border border-black border-solid rounded-[100px] ps-2" type="date" name="publish_date">
            <button class="shadow-md bg-black p-2 rounded-[100px] text-white w-1/3 mt-2" type="submit">Invia</button>
        </div>
    </form>
@stop