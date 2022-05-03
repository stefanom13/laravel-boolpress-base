@extends('layouts.app')

@section('content')

    <ul>
        @foreach($posts as $post)
            <li>
                {{$post->title}}
            </li>
            <li>
                {{$post->slug}}
            </li>
        @endforeach
    </ul>

@endsection