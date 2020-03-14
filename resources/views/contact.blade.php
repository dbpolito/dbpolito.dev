@extends('layout')

@section('content')
    <div class="px-10 py-8 bg-white rounded-lg shadow-md text-gray-600">
        <p>
            @if ($locale === 'en')
                Contact me at danielbpolito@gmail.com.
            @else
                Entre em contato em danielbpolito@gmail.com.
            @endif
        </p>
    </div>
@endsection
