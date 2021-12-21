<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" gray-backgroundcontent="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laracasts Voting') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-sm text-gray-900 bg-gray-background">
    <header class="flex items-center justify-between px-4 px-8">
        <a href="#">
            <img src="{{ asset('img/laracasts-logo.svg') }}" alt="Laracasts Logo">
        </a>
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-4 px-6">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTte4WmCmAEmNuDxtT9tXRgKBArW3rMYi_gXw&usqp=CAU"
                    alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container flex mx-auto mt-5 max-w-custom">
        <div class="mr-5 w-70">
            Add Idea Form ---------Alli se tale quale e mentre, noi oppinione novellare vostro alli,
            dare esse lui nel seguendo una, cose di di di potra fosse convenevole
            principio. Ingannati quali seguitando noi sono il, fa i alcun quale
            apparire alla divina. Sua noia che noi seguitando, 'l procuratore il
            della fallo di forza transitorie prieghi nella. Da sia discenda suo essaudisce di iscacciato nome non,
            discenda che in e e a. Temporali credere tanto fosse uomini in, accio prieghi fallo mescolati niuno non
            santo con donne dio. Beato dovendo dallo e impermutabile ci. Lui delle che nella beato, seguitando tutte
            della 'l merito.
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4 ">
                    <li>
                        <a href="#" class="pb-3 border-b-4 border-blue">
                            All Ideas (87)
                        </a>
                    </li>
                    <li>

                        <a href="#"
                            class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
                            Considering (4)
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
                            In Progress (1)
                        </a>
                    </li>

                </ul>
                <ul class="flex pb-3 space-x-10 uppercase border-b-4 font-semibolc">
                    <li>
                        <a href="#"
                            class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
                            Implemented (7)
                        </a>
                    </li>
                    <li>

                        <a href="#"
                            class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
                            Closed (3)
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>

</body>

</html>
