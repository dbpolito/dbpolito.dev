@extends('layout')

@section('title', $post->name)

@section('content')
    <div class="px-10 py-8 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center pb-3 border-b border-gray-300">
            <span class="font-light text-gray-600">{{ $post->published_at->diffForHumans() }}</span>
            <div>
                @foreach ($post->tags as $tag)
                    <a class="ml-1 px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="my-5 text-gray-600">{!! $post->content !!}</div>
        <div class="pt-5 border-t border-gray-300">
            <a class="flex items-center" href="#">
                <img class="mx-4 w-20 h-20 object-cover rounded-full hidden sm:block" src="https://avatars2.githubusercontent.com/u/347400?s=460&v=4" alt="avatar">
                <h1 class="text-gray-700 font-bold">Daniel Polito</h1>
            </a>
        </div>
    </div>
@endsection
