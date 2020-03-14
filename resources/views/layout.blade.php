<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', $activeMenuName) | {{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
</head>
<body class="bg-gray-100">
    <div>
        <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div>
                        <h1>
                            <a href="{{ localized_route('posts') }}" class="flex text-white text-lg leading-loose">
                                <img class="h-8 mr-2" src="https://avatars2.githubusercontent.com/u/347400?s=460&v=4" alt="">
                                Daniel Polito
                            </a>
                        </h1>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline">
                            @foreach ($menu as $item)
                            <a href="{{ localized_route($item->route) }}" class="ml-2 px-3 py-2 rounded-md text-sm font-medium {{ $item->is_active ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} focus:outline-none focus:text-white focus:bg-gray-700">{{ $item->name}}</a>
                            @endforeach

                            <a
                                class="p-2 {{ $locale !== 'br' ? 'opacity-50 hover:opacity-100' : '' }}"
                                @if ($locale !== 'br')
                                    href="{{ $currentUrlForOtherLocale }}"
                                @endif
                                title="Português"
                            >
                                <svg class="h-6 w-6 inline-block" viewBox="0 0 512 512" >
                                    <circle style="fill:#6DA544;" cx="256" cy="256" r="256"/>
                                    <polygon style="fill:#FFDA44;" points="256,100.174 467.478,256 256,411.826 44.522,256 "/>
                                    <circle style="fill:#F0F0F0;" cx="256" cy="256" r="89.043"/>
                                    <g>
                                        <path style="fill:#0052B4;" d="M211.478,250.435c-15.484,0-30.427,2.355-44.493,6.725c0.623,48.64,40.227,87.884,89.015,87.884
                                        c30.168,0,56.812-15.017,72.919-37.968C301.362,272.579,258.961,250.435,211.478,250.435z"/>
                                        <path style="fill:#0052B4;" d="M343.393,273.06c1.072-5.524,1.651-11.223,1.651-17.06c0-49.178-39.866-89.043-89.043-89.043
                                        c-36.694,0-68.194,22.201-81.826,53.899c12.05-2.497,24.526-3.812,37.305-3.812C263.197,217.043,309.983,238.541,343.393,273.06z"
                                        />
                                    </g>
                                </svg>
                            </a>

                            <a
                                class="p-2 {{ $locale !== 'en' ? 'opacity-50 hover:opacity-100' : '' }}"
                                @if ($locale !== 'en')
                                    href="{{ $currentUrlForOtherLocale }}"
                                @endif
                                title="English"
                            >
                                <svg class="h-6 w-6 inline-block" viewBox="0 0 512 512">
                                    <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/>
                                    <g>
                                        <path style="fill:#D80027;" d="M244.87,256H512c0-23.106-3.08-45.49-8.819-66.783H244.87V256z"/>
                                        <path style="fill:#D80027;" d="M244.87,122.435h229.556c-15.671-25.572-35.708-48.175-59.07-66.783H244.87V122.435z"/>
                                        <path style="fill:#D80027;" d="M256,512c60.249,0,115.626-20.824,159.356-55.652H96.644C140.374,491.176,195.751,512,256,512z"/>
                                        <path style="fill:#D80027;" d="M37.574,389.565h436.852c12.581-20.529,22.338-42.969,28.755-66.783H8.819
                                        C15.236,346.596,24.993,369.036,37.574,389.565z"/>
                                    </g>
                                    <path style="fill:#0052B4;" d="M118.584,39.978h23.329l-21.7,15.765l8.289,25.509l-21.699-15.765L85.104,81.252l7.16-22.037
                                    C73.158,75.13,56.412,93.776,42.612,114.552h7.475l-13.813,10.035c-2.152,3.59-4.216,7.237-6.194,10.938l6.596,20.301l-12.306-8.941
                                    c-3.059,6.481-5.857,13.108-8.372,19.873l7.267,22.368h26.822l-21.7,15.765l8.289,25.509l-21.699-15.765l-12.998,9.444
                                    C0.678,234.537,0,245.189,0,256h256c0-141.384,0-158.052,0-256C205.428,0,158.285,14.67,118.584,39.978z M128.502,230.4
                                    l-21.699-15.765L85.104,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822l-21.7,15.765L128.502,230.4z
                                    M120.213,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822
                                    L120.213,130.317z M220.328,230.4l-21.699-15.765L176.93,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822
                                    l-21.7,15.765L220.328,230.4z M212.039,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822
                                    l8.288-25.509l8.288,25.509h26.822L212.039,130.317z M212.039,55.743l8.289,25.509l-21.699-15.765L176.93,81.252l8.289-25.509
                                    l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822L212.039,55.743z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 sm:px-3">
                    @foreach ($menu as $item)
                    <a href="{{ localized_route($item->route) }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium {{ Route::currentRouteNamed($item->route) ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} focus:outline-none focus:text-white focus:bg-gray-700">{{ $item->name }}</a>
                    @endforeach
                </div>
            </div>
        </nav>

        @section('header')
        <header class="bg-white shadow">
            <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold leading-tight text-gray-900">
                    @yield('title', $activeMenuName)
                </h2>
            </div>
        </header>
        @show

        <main>
            <div class="max-w-6xl mx-auto py-6 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
