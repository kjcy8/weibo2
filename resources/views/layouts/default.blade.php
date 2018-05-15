<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')_weibo</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('layouts._header')

    <div class="container">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>

</body>
</html>