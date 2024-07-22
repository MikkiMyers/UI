<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>UI Element - @yield('title')</title>
</head>
<body>
    <header id="app-cmp-main-header">
        <h1>UI Element - @section('title-container')@yield('title')@show</h1>
        <nav>
            <ul>
                <oll>
                
                <a href="{{ route('example-01-form') }}"> Example-01</a>
                <a href="{{ route('area-form') }}"> Area</a>
                <a href="{{ route('mul-form') }}"> Multiplication</a>
                <a href="{{ route('payment-form') }}"> Payment</a>
                </ol>
               
            </ul>
            
        </nav>
    </header>
    <div id="app-cmp-main-content">
        @yield('content')
    </div>
    <footer id="app-cmp-main-footer">
        &#xA9; Copyright Week-05, 2024 Nutcha's UI Element
    </footer>
</body>
</html>