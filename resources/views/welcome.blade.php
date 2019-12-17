<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 40px 40px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <div>
                </div>
                <div class="title m-b-md">
                    <img src="images/digitalhouse.png" alt="" width="250px">
                    <img src="images/mas.png" alt="" width="20px">
                    <img src="images/formar.png" alt="" width="180px">
                    <img src="images/mas.png" alt="" width="20px">
                    <img src="images/casa.jpg" alt="" width="150px">

                </div>

                <div>
                    <h1 class="display-4 my-4">Curso de Programación Full Stack Web </h1>
                </div>

                <div class="links" id="iconos">
                    <h1>Contenido de la Cursada</h1>

                <a  href="{{'/html'}}"><img id="html" class="m-1" src="images/html.jpeg" alt="" width="6%"></a>
                <a  href="{{'/css3'}}"><img id="css" class="m-1" src="images/css.jpeg" alt="" width="6%"></a>
                <a  href="{{'/javascript'}}"><img id="js" class="m-1" src="images/javascript.png" alt="" width="9%"></a>
                <a  href="{{'/php'}}"><img id="php" class="m-1" src="images/php.jpg" alt="" width="10%"></a>
                <a  href="{{'/oop'}}"><img id="oop" class="m-1" src="images/oop.png" alt="" width="9%"></a>
                <a  href="{{'/sql'}}"><img id="mysql" class="m-1" src="images/mysql.jpg" alt="" width="10%"></a>
                <a  href="{{'/git'}}"><img id="git" class="m-1" src="images/git.jpg" alt="" width="7%"></a>
                <a  href="{{'/scrum'}}"><img id="scrum" class="m-1" src="images/scrum.jpg" alt="" width="9%"></a>
                <a  href="{{'/laravel'}}"><img id="laravel" class="m-1" src="images/laravel.png" alt="" width="9%"></a>

                </div>
            </div>
        </div>
        <script lang="javascript">
        window.onload = function(){
            var html = document.getElementById('html');
            var css = document.getElementById('css');
            var git = document.getElementById('git');
            var scrum = document.getElementById('scrum');
            var php = document.getElementById('php');
            var oop = document.getElementById('oop');
            var mysql = document.getElementById('mysql');
            var laravel = document.getElementById('laravel');
            var js = document.getElementById('js');

            html.onmouseover = function(){
                html.setAttribute('width','10%');
            }
            html.onmouseleave = function(){
                html.setAttribute('width','6%');
            }
            css.onmouseover = function(){
                css.setAttribute('width','10%');
            }
            css.onmouseleave = function(){
                css.setAttribute('width','6%');
            }
            git.onmouseover = function(){
                git.setAttribute('width','11%');
            }
            git.onmouseleave = function(){
                git.setAttribute('width','7%');
            }
            scrum.onmouseover = function(){
                scrum.setAttribute('width','12%');
            }
            scrum.onmouseleave = function(){
                scrum.setAttribute('width','9%');
            }
            php.onmouseover = function(){
                php.setAttribute('width','14%');
            }
            php.onmouseleave = function(){
                php.setAttribute('width','10%');
            }
            oop.onmouseover = function(){
                oop.setAttribute('width','12%');
            }
            oop.onmouseleave = function(){
                oop.setAttribute('width','9%');
            }
            mysql.onmouseover = function(){
                mysql.setAttribute('width','15%');
            }
            mysql.onmouseleave = function(){
                mysql.setAttribute('width','10%');
            }
            laravel.onmouseover = function(){
                laravel.setAttribute('width','12%');
            }
            laravel.onmouseleave = function(){
                laravel.setAttribute('width','9%');
            }
            js.onmouseover = function(){
                js.setAttribute('width','12%');
            }
            js.onmouseleave = function(){
                js.setAttribute('width','9%');
            }


        }
        </script>
    </body>
</html>
