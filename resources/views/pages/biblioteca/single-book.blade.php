@extends('layouts.app')

@section('content')
    <div class="top-part ">
        <h1 class="text-3xl font-bold text-center">
            Book Info
        </h1>
    </div>
    <div class="mt-5 text-center middle-part">
        <ul>
            <li>
                <div class="div">
                    <p>Title: {{$book->title}}</p>
                    <p>Author ID: {{$book->author_id}}</p>
                    <p>Publish Date: {{$book->publish_date}}</p>
                </div>
            </li>

        </ul>
    </div>
    <div class="mt-5 font-bold text-center text-white bg-black border border-black back-btn">

        <a href="{{url ("/")}}">Back</a>
    </div>
@endsection
