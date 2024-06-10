<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
        <div class="sidebar mirror-effect">
            <ul>
                <h1>welcome User</h1>
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('about.about') }}">About</a></li>
            </ul>
        </div>
        <div class="main mirror-effect">
            about
        </div>
    </div>
</body>
</html>
