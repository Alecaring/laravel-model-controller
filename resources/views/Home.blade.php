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
                <div class="container_title_sidebar">
                    <h1>Home</h1>
                </div>

                <li>
                    
                    <div class="cont_right">
                        <a href="{{ route('home.index') }}">
                            <span class="sman_menu">
                                <i class="fa-solid fa-house"></i>
                            </span>
                            Home
                        </a>
                    </div>
                </li>
                <li>
                    
                    <div class="cont_right">
                        <a href="{{ route('about.about') }}">
                            <span class="sman_menu">
                                <i class="fa-solid fa-shop-lock"></i>
                            </span>
                            About
                            </a>
                    </div>
                </li>
                
                
            </ul>
        </div>
        <div class="main mirror-effect">
            <div class="nav_main">
                <div class="container_icon">
                    <span><i class="fa-solid fa-user"></i> Log In</span>
                </div>
                <div class="container_center">
                    <h3>All Movies</h3>
                </div>
                <div class="container-circle">
                    <span class="circle-first"></span>
                    <span class="circle-secondo"></span>
                    <span class="circle-third"></span>
                </div>
            </div>
            <div class="container-cards">


                @foreach ($movies as $movie)
                    <div class="card">

                        <div>
                            <img src="{{ $movie->image }}" alt="">
                        </div>
                        <div class="container_hover">

                            <div class="container_top">
                                <h2>{{ $movie->title }}</h2>
                                @if ($movie->title != $movie->original_title)
                                    <h5>{{ $movie->original_title }}</h5>
                                    <span>{{ substr($movie->date, 0, 4) }}</span>
                                @endif


                            </div>
                            <div class="container_main">

                            </div>
                            <div class="container_footer">

                                <div class="inner_div">
                                    <p>{{ $movie->nationality }}</p>
                                    <span>{{ $movie->vote }}</span>
                                </div>
                            </div>


                        </div>


                    </div>
                @endforeach



            </div>
        </div>
    </div>
</body>

</html>
