<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    
    <ul>
        <li><a href="/contact"><p>Contact us</p></a></li>
        <li><a href="/about"><p>About</p></a></li>
        <li><a href="/"><p>Home</p></a></li>
    </ul>

    @yield('content')
</body>
</html>