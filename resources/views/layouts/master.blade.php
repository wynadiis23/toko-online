<html>
    <head>
        <title>Toko Online</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar
        
        @show


        <div class="container">
            @yield('content')
        
        </div>
    </body>
</html>