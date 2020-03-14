@extends('layout')

@section('content')
    <div class="py-10 bg-white rounded-lg shadow-md">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <img class="h-40 m-auto" src="https://avatars2.githubusercontent.com/u/347400?s=460&v=4" alt="">
                <h3 class="mt-5 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Daniel Polito
                </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                    @if ($locale === 'en')
                        CEO & Founder at Firework Web. Laravel Certified. Creator of fwd and contributor of Laravel Zero.
                    @else
                        CEO & Founder na Firework Web. Laravel Certificado. Criador do fwd e contribuidor do Laravel Zero.
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
