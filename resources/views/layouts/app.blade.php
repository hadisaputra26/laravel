{{-- Ini adalah File Master sebagai dasar sebagai dasar krangka website --}}
<html>
    <head>
        {!! Html::style('css/bootstrap.min.css') !!}
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('navbar')
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Belajar Laravel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="welcome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hadi">Hadi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tmp">Templating</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="input">Input</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        @show
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
            <p>copyright HadiSaputra.com 2018</p>
        </div>
    </body>
</html>