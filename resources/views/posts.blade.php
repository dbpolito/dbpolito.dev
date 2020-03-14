@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <div class="mb-5 px-10 py-8 bg-white rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <span class="font-light text-gray-600">{{ $post->published_at->diffForHumans() }}</span>
                <div>
                    @foreach ($post->tags as $tag)
                        <a class="ml-1 px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="mt-2">
                <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="{{ localized_route('posts.show', $post->slug) }}">{{ $post->name}}</a>
                <p class="mt-2 text-gray-600">{{ $post->description }} </p>
            </div>
            <div class="flex justify-between items-center mt-4">
                <a class="text-blue-600 hover:underline" href="{{ localized_route('posts.show', $post->slug) }}">Read more</a>
                <div>
                    <a class="flex items-center" href="#">
                        <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://avatars2.githubusercontent.com/u/347400?s=460&v=4" alt="avatar">
                        <h1 class="text-gray-700 font-bold">Daniel Polito</h1>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
