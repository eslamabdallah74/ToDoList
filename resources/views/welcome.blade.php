<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Classic-to-do-list</title>

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>
        {{-- Vue --}}
        <div id="app">
            <app></app>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
