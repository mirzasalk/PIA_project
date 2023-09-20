<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/layout.css') }}>
    <link rel="icon" href={{ asset('img/logo.png') }} type="image/x-icon">
    <title>ProChef</title>
</head>
<body>
    <div id="layoutMain">
    <header>
        <div class="logo">
            <img src={{ asset('img/logo.png') }} alt="PS" class="logo">
        </div>
        <nav>
            <ul>
                <li><a href="/">Početna</a></li>
                <li><a href="/">O nama</a></li>
                <li><a href="/kursevi">Kursevi</a></li>
                <li><a href="/">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
       {{$slot}}
    </main>

    <footer>
        <p>&copy;2023 By Mirza Salkovic</p>
    </footer>
</div>
</body>
</html>