<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Movies</h1>
    </header>
    <main>
        <div class="container">
            <div class="movie">
                @foreach ($movies as $movie)
                    <div class="cardMovie">
                        <div class="img"></div>
                        <h2 class="title">
                            {{$movie->title}}
                        </h2>
                        <div class="vote">
                            {{$movie->vote}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>