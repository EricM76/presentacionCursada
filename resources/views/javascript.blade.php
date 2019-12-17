@extends('layouts.header')
@section('content')

<div class="container-fluid row">
    <div class="col-md-4" id="panelmagico" hidden>
        <div class="card" style="width: 25rem;">
            <a id="magia2" href=""><img src="images/harry.gif" alt="" width="400px"></a>
        </div>
    </div>
    <div class="col-md-4" id="panelIzq">
        <div class="card" style="width: 25rem;">
            <img src="images/js_page.webp" style="height:260px" class="card-img-top" alt="..." >
            <div class="card-body">
                <h5 class="card-text text-justify">“JavaScript, es uno de los más potentes lenguajes de programación en la actualidad”</h5>
                <h5 class="card-text text-justify"> Se utiliza principalmente para crear páginas web dinámicas incorporando efectos, animaciones, acciones que se activan al pulsar botones y ventanas con mensajes para interactuar con el usuario.</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelCentral">
        <div class="card" style="width: 25rem;">
        <img src="images/frontend.jpg" class="card-img-top" alt="...">

            <div class="card-body">
            <h4 class="card-title alert-dark text-center">FRONT-END</h4>
                <h5 id="alert" class="card-text text-center text-uppercase"><strong>HTML</strong>  => contenido y estructura</h5>
                <h5 id="alert" class="card-text text-center text-uppercase"><strong>CSS</strong>  => diseño y estilo</h5>
                <h5 id="alert" class="card-text text-center text-uppercase"><strong>Javascript</strong>  => interacción con el usuario.</h5>
            </div>
        </div>
    </div>
    <div class="col-md-2" id="panelDer">
        <div class="card" style="width: 12rem;">
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="images/banner_1.jpg" class="" alt="..." style="height: 480px">
                        </div>
                        <div class="carousel-item">
                        <img src="images/banner_2.jpg" class="" alt="..." style="height: 480px">
                        </div>
                        <div class="carousel-item">
                        <img src="images/banner_3.jpg" class="" alt="..." style="height: 480px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2" id="panel1">
        <div class="card" style="width: 12rem;">
            <div class="card-body">
                <style>
                        #imagen {
                            border:1px solid red;
                            background-color:red;
                            border-radius:15px;
                            position:relative;
                            display:block;
                            height:30px;
                            width:30px;
                        }

                        #lienzo {
                            width:150px;
                            height:200px;
                            border:1px solid #000;
                            overflow: hidden;
                        }

                    </style>

                <div><h4>Juegos</h4></div>
                <div id="lienzo" class="mt-2">
                    <div id="imagen"></div>
                </div>
                <div class="text-center mt-2">
                    <input class="btn btn-sm btn-success" type="button" value="Iniciar" id="iniciar" onclick="iniciar();"/>
                    <input class="btn btn-sm btn-danger" type="button" value="Parar" id="parar" onclick="parar();"/>
                </div>
            </div>
        </div>
        <div class="card mt-3" style="width: 12rem;">
            <div class="card-body">
                <a id="magia" href=""><img src="images/harry.gif" alt="" width="150px"></a>
                <img src="images/js_page.webp" width="300px" style="" class="" alt="..." id="imagen" hidden>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<script type="text/javascript">


    // controlY, determina dirección vertical: 1-baja|0-sube
    var controlY=Math.floor((Math.random() * 1) + 0);

    // controlX, determina dirección vertical: 1-derecha|0-izquierda
    var controlX=Math.floor((Math.random() * 1) + 0);

    // definimos las variables que contienen la posicion de la pelota
    var x=y=0;

    // definimos la velocidad de movimiento en pixels
    var velocidad=1;

    // variable que contiene
    var idSetInterval=0;

    // funcion que se ejecuta al pulsar el botón iniciar
    function iniciar(){
        if(idSetInterval==0){
            idSetInterval=setInterval("mover()",10);

        }
    }
    // funcion que se ejecuta por cada iteracion del setInterval()
    function mover(){

        // vertical
        if(controlY==1){
            y+=velocidad;
        }else{
            y-=velocidad;
        }

        if(y<0){
            controlY=1;
            y=velocidad;
        }else if(y>=document.getElementById("lienzo").offsetHeight-22){
            controlY=0;
            y=document.getElementById("lienzo").offsetHeight-22;
        }

        // horizontal
        if(controlX==1){
            x+=velocidad;
        }else{
            x-=velocidad;
        }

        if(x<0){
            controlX=1;
            x=velocidad;
        }else if(x>=document.getElementById("lienzo").offsetWidth-22){
            controlX=0;
            x=document.getElementById("lienzo").offsetWidth-22;
        }

        document.getElementById("imagen").style.left=String(x)+"px";
        document.getElementById("imagen").style.top=String(y)+"px";

    }

    // funcion que se ejecuta para parar
    function parar(){
        clearInterval(idSetInterval);
        idSetInterval=0;
    }

    // funcion que se ejecta al iniciar
    window.onload=function(){
        // posicionamos la pelota de manera aleatoria en la pantalla
        y=Math.floor((Math.random() * (document.getElementById("lienzo").offsetHeight-22)) + 1);
        x=Math.floor((Math.random() * (document.getElementById("lienzo").offsetWidth-22)) + 1);

        document.getElementById("imagen").style.left=String(x)+"px";
        document.getElementById("imagen").style.top=String(y)+"px";

        //magia
        var magia = document.getElementById('magia');
        var panelIzq = document.getElementById('panelIzq');
        var panelMagico = document.getElementById('panelmagico');
        var imagenSmall = document.getElementById('imagen');
        magia.onclick = function(element){
            element.preventDefault();
            panelIzq.style.display = 'none';
            magia.style.display = 'none';
            panelMagico.removeAttribute('hidden')
            imagenSmall.removeAttribute('hidden')
        }
    }

</script>
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
