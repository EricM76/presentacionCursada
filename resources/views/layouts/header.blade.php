<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Cursada Full Stack</title>
</head>
<body class="bg-secondary">
        <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="images/digitalhouse.png" alt="" width="60px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{'/'}}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{'/html'}}">HTML</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{'/css3'}}">CSS</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{'/javascript'}}">JavaScript</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{'/php'}}">PHP</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{'/oop'}}">POO</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{'/sql'}}">SQL</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{'/git'}}">GIT</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{'/scrum'}}">SCRUM</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{'/laravel'}}">Laravel</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{'/libro'}}">Libro de visitas</a>
                    </li>
                  </ul>
                </div>
              </nav>
<main class="mt-4">
        @yield('content')

</main>

</body>
</html>
