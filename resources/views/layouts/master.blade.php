<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Todo Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">

        <!-- SweetAlert -->
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css">

        <!-- Font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Modals -->
        @include('tasks.modals.create')
        @include('tasks.modals.delete')



        @include('layouts.partials._navigation')

        @include('layouts.partials._header')

        @yield('content')

        @include('layouts.partials._footer')



    </body>
</html>
