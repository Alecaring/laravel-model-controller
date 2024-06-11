{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>

    <header>
        @include('partials/header')
    </header>

    <main>
        @yield('log')
        @yield('content')
        <!-- <div>
            @yield('cards')
        </div> -->
    </main>



</body>

</html> --}}

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
        @include('partials/Sidebar')

        <div class="main mirror-effect">
            @include('partials/Navbar')

            <div class="container-cards">
                @yield('content')

            </div>
        </div>
    </div>
</body>

</html>
