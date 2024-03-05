<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') page</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ url('css/style.css') }}" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <div class="relative py-4 px-6">
            <nav>
                <a href="{{route('index')}}"  rel="noopener noreferrer">home</a>
                <a href="{{route('about')}}"  rel="noopener noreferrer">about</a>
                <a href="{{route('computers.index')}}"  rel="noopener noreferrer">computers</a>
                <a href="{{route('contact')}}"  rel="noopener noreferrer">contact</a>
            </nav>
        </div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
               

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        @yield('content')
                    </div>
                </div>

            
            </div>
        </div>
    </body>
</html>
