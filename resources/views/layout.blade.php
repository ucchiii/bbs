<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        <style>body {padding-top: 80px;}</style>
    </head>
    <body>
        @include('nav')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
