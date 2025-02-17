@extends('layouts.app')

@section('content')
<div class="top-part ">
    <h1 class="text-3xl font-bold text-center">
        Books List
    </h1>
</div>
<div class="mt-5 text-center middle-part">
    <ul>
        @foreach ( $books as $book )
            <li>
                <div class="div">
                    <a href="{{ url('/book/' . $book->id) }}">Book Name : {{$book->title}}</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<div class="mt-5 font-bold text-center text-white bg-black border border-black back-btn">
    <a href="/users/create">Add Book</a>
</div>
@endsection