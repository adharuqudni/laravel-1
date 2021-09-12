<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        ini nav
    </nav>

    <div class="sidebar">
        @yield('sidebar')
    </div>

    
    <div class="tengah">
        @yield('tengah')
    </div>

    
    <div class="kanan">
        @yield('kanan')
    </div>

    <footer>
        ini footer
    </footer>
</body>
</html>