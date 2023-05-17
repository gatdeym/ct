<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheapTalk</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/df9f7c369a.js" crossorigin="anonymous"></script>
    @livewireStyles()
</head>
<body class="bgImg">

    @include('navbar.base')

    <div class="container">
        @yield('content')
    </div>
    @livewireScripts()
</body>
</html>
<style>
    body {
        background-image: url(https://th.bing.com/th/id/R.5ef511e216c91e4340a40533a7aaa64a?rik=fsxMKpoIPW8EEg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-CYpGmuBJMwk%2fUQ5tNjNRj3I%2fAAAAAAAAGs8%2fUmp2D4sLcG0%2fs1600%2fwallpaper-2069764.jpg&ehk=hW48H6ENYIx%2buxtIH0bzyYD5wujuKmLaRkLQ8rfHE80%3d&risl=&pid=ImgRaw&r=0);
        background-repeat: no-repeat;
        background-size: cover;
        }
</style>


