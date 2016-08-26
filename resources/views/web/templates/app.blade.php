<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <link href="{{ elixir('css/app.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        @if(Auth::check())
            <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
        @endif
    </head>

    <body id="app-layout">
        @include('web.organisms.navbar.back')
        @include('web.molecules.modals.delete-modal')

        @yield('content')

        <script src="{{ elixir('js/app.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('dropzone')
    </body>

</html>
