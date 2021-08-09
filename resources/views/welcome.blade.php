<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Classic-to-do-list</title>

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



    </head>
    <body>

        {{-- Vue --}}
        <div id="app">
            <app></app>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
