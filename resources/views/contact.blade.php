@extends('layout')

@section('content')
    <div class="px-10 py-6 bg-white rounded-lg shadow-md">
        <p class="mt-2 text-gray-600">
            @if ($locale === 'en')
                Contact me at danielbpolito@gmail.com.
            @else
                Entre em contato em danielbpolito@gmail.com.
            @endif
        </p>
    </div>
@endsection
