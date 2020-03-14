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
                            <a class="p-2" href="https://github.com/dbpolito" target="_blank">
                                <svg class="h-5 w-5 inline-block text-white fill-current opacity-25 hover:opacity-75" viewBox="0 0 438.549 438.549">
                                    <g>
                                        <path d="M409.132,114.573c-19.608-33.596-46.205-60.194-79.798-79.8C295.736,15.166,259.057,5.365,219.271,5.365
                                        c-39.781,0-76.472,9.804-110.063,29.408c-33.596,19.605-60.192,46.204-79.8,79.8C9.803,148.168,0,184.854,0,224.63
                                        c0,47.78,13.94,90.745,41.827,128.906c27.884,38.164,63.906,64.572,108.063,79.227c5.14,0.954,8.945,0.283,11.419-1.996
                                        c2.475-2.282,3.711-5.14,3.711-8.562c0-0.571-0.049-5.708-0.144-15.417c-0.098-9.709-0.144-18.179-0.144-25.406l-6.567,1.136
                                        c-4.187,0.767-9.469,1.092-15.846,1c-6.374-0.089-12.991-0.757-19.842-1.999c-6.854-1.231-13.229-4.086-19.13-8.559
                                        c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559
                                        c-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-0.951-2.568-2.098-3.711-3.429c-1.142-1.331-1.997-2.663-2.568-3.997
                                        c-0.572-1.335-0.098-2.43,1.427-3.289c1.525-0.859,4.281-1.276,8.28-1.276l5.708,0.853c3.807,0.763,8.516,3.042,14.133,6.851
                                        c5.614,3.806,10.229,8.754,13.846,14.842c4.38,7.806,9.657,13.754,15.846,17.847c6.184,4.093,12.419,6.136,18.699,6.136
                                        c6.28,0,11.704-0.476,16.274-1.423c4.565-0.952,8.848-2.383,12.847-4.285c1.713-12.758,6.377-22.559,13.988-29.41
                                        c-10.848-1.14-20.601-2.857-29.264-5.14c-8.658-2.286-17.605-5.996-26.835-11.14c-9.235-5.137-16.896-11.516-22.985-19.126
                                        c-6.09-7.614-11.088-17.61-14.987-29.979c-3.901-12.374-5.852-26.648-5.852-42.826c0-23.035,7.52-42.637,22.557-58.817
                                        c-7.044-17.318-6.379-36.732,1.997-58.24c5.52-1.715,13.706-0.428,24.554,3.853c10.85,4.283,18.794,7.952,23.84,10.994
                                        c5.046,3.041,9.089,5.618,12.135,7.708c17.705-4.947,35.976-7.421,54.818-7.421s37.117,2.474,54.823,7.421l10.849-6.849
                                        c7.419-4.57,16.18-8.758,26.262-12.565c10.088-3.805,17.802-4.853,23.134-3.138c8.562,21.509,9.325,40.922,2.279,58.24
                                        c15.036,16.18,22.559,35.787,22.559,58.817c0,16.178-1.958,30.497-5.853,42.966c-3.9,12.471-8.941,22.457-15.125,29.979
                                        c-6.191,7.521-13.901,13.85-23.131,18.986c-9.232,5.14-18.182,8.85-26.84,11.136c-8.662,2.286-18.415,4.004-29.263,5.146
                                        c9.894,8.562,14.842,22.077,14.842,40.539v60.237c0,3.422,1.19,6.279,3.572,8.562c2.379,2.279,6.136,2.95,11.276,1.995
                                        c44.163-14.653,80.185-41.062,108.068-79.226c27.88-38.161,41.825-81.126,41.825-128.906
                                        C438.536,184.851,428.728,148.168,409.132,114.573z"/>
                                    </g>
                                </svg>
                            </a>

                            <a class="p-2" href="https://twitter.com/dbpolito" target="_blank">
                                <svg class="h-5 w-5 inline-block text-white fill-current opacity-25 hover:opacity-75" viewBox="0 0 512 512">
                                    <g>
                                        <g>
                                            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                                c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                                c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                                c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                                c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                                c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                                C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                                C480.224,136.96,497.728,118.496,512,97.248z"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <a class="p-2" href="https://www.linkedin.com/in/dbpolito/" target="_blank">
                                <svg class="h-5 w-5 inline-block text-white fill-current opacity-25 hover:opacity-75" viewBox="0 0 510 510">
                                    <g>
                                        <g id="post-linkedin">
                                            <path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z
                                                 M153,433.5H76.5V204H153V433.5z M114.75,160.65c-25.5,0-45.9-20.4-45.9-45.9s20.4-45.9,45.9-45.9s45.9,20.4,45.9,45.9
                                                S140.25,160.65,114.75,160.65z M433.5,433.5H357V298.35c0-20.399-17.85-38.25-38.25-38.25s-38.25,17.851-38.25,38.25V433.5H204
                                                V204h76.5v30.6c12.75-20.4,40.8-35.7,63.75-35.7c48.45,0,89.25,40.8,89.25,89.25V433.5z"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            @foreach ($menu as $item)
                            <a href="{{ localized_route($item->route) }}" class="ml-2 px-3 py-2 rounded-md text-sm font-medium {{ $item->is_active ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} focus:outline-none focus:text-white focus:bg-gray-700">{{ $item->name}}</a>
                            @endforeach

                            <a
                            class="p-2 {{ $locale !== 'pt_BR' ? 'opacity-25 hover:opacity-50' : '' }}"
                            @if ($locale !== 'pt_BR')
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
                        class="p-2 {{ $locale !== 'en' ? 'opacity-25 hover:opacity-50' : '' }}"
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
        @section('header-content')
        <h2 class="text-3xl font-bold leading-tight text-gray-900">
            @yield('title', $activeMenuName)
        </h2>
        @show
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
