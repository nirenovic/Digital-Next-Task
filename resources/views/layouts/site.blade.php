<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital Next</title>
        <!-- Style -->
        <link rel="stylesheet" href="css/app.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header-inner">
                <a href="/"><img src="img/logo.png" alt="DigitalNext" class="logo"></a>
                <a href="tel:+03-9699-4585" class="phone"><img src="img/icon_phone.png" alt="phone icon"><span>03 9699 4585</span></a>
                <button class="hamburger"><img src="img/icon_hamburger.png" alt=""></button>
            </div>
        </header>
        @yield('content')
    </body>
</html>
