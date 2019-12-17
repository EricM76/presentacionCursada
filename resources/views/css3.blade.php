@extends('layouts.header')
@section('content')

<div class="container-fluid row">
    <div class="col-md-4" id="panelIzq" >
        <div class="card" style="width: 25rem;">
            <img src="images/css_page.jpg" style="height:260px" class="card-img-top" alt="..." >
            <div class="card-body">
                <h5 class="card-text text-justify">“CSS (del inglés Cascading Style Sheets), u Hojas de Estilo en Cascada en español es el lenguaje utilizado para dar estilo a tu página web. ”</h5>
                <h5 class="card-text text-justify">Como tal no es un lenguaje de progamación sino un lenguaje de hojas de estilo, es decir, te permite aplicar estilos de manera selectiva a elementos en documentos HTML</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelCentral" hidden>
        <div class="card" style="width: 25rem;">

            <div class="card-body">
                <h3 id="alert" class="card-title text-center text-uppercase alert-secondary">Si HTML es el lenguaje con el que se construyen los contenidos de una página, las hojas de estilo CSS son el lenguaje en el que se usa para trabajar el diseño de cualquier web actual.</h3>
            </div>
            <img src="images/htmlcss.png" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col-md-4" id="panelDer" hidden>
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-text">
                    <h1>Pagina de prueba</h1>
                    <hr>
                    <h5>Colores de los elementos</h5>
                    <button id="rojo" class="btn btn-sm btn-danger m-0" style="width:85px">Red</button>
                    <button id="verde" class="btn btn-sm btn-success m-0" style="width:85px">Green</button>
                    <Button id="amarillo" class="btn btn-sm btn-warning m-0" style="width:85px">Yellow</Button>
                    <Button id="azul" class="btn btn-sm btn-primary m-0" style="width:85px">Blue</Button>
                    <hr>
                    <h5 class="">Background (fondo)</h5>
                    <button id="black" class="btn btn-sm btn-outline-dark">Black</button>
                    <button id="white" class="btn btn-sm btn-outline-dark">White</button>
                    <button id="volver" class="btn btn-sm btn-outline-dark">Volver</button>
                    <hr>
                    <h5>Tamaño de las fuentes</h5>
                    <button id="mas" class="btn btn-sm btn-secondary">Aumentar</button>
                    <button id="menos" class="btn btn-sm btn-secondary">Disminuir</button>
                    {{-- <button id="normal" class="btn btn-sm btn-secondary">Normal</button> --}}
                    <p id="letra" style="font-size:1em">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ad doloribus, esse, molestiae quaerat minus cumque eligendi id ut autem eum necessitatibus veritatis odit placeat expedita dolores accusantium quasi deleniti?</p>
                </h5>
            </div>
        </div>
    </div>
</div>
<script lang="javascript">
window.onload = function(){

    var panelIzq = document.getElementById('panelIzq')
        var panelCentral = document.getElementById('panelCentral')
        var panelDer = document.getElementById('panelDer')

        panelIzq.onclick = function(){
            panelCentral.removeAttribute('hidden')
        }
        panelCentral.onclick = function(){
            panelDer.removeAttribute('hidden')
        }

    var body = document.getElementsByTagName('body');
    var menu = document.getElementById('menu');
    var texto = document.getElementById('alert');
    var rojo = document.getElementById('rojo');
    var verde = document.getElementById('verde');
    var amarrillo = document.getElementById('amarillo');
    var azul = document.getElementById('azul');
    var black = document.getElementById('black');
    var white = document.getElementById('white');
    var volver = document.getElementById('volver');
    var mas = document.getElementById('mas');
    var menos = document.getElementById('menos');
    let letra = document.getElementById('letra');
    let fontSize = 1;
    // let elementStyle = window.getComputedStyle(element);
    // let elementTam = elementStyle.getPropertyValue('font-size');

		rojo.onclick = function(){
            texto.setAttribute('class','card-title text-center text-uppercase alert-danger')
            menu.setAttribute('class','navbar navbar-expand-lg navbar-dark bg-danger')
        }
        verde.onclick = function(){
            texto.setAttribute('class','card-title text-center text-uppercase alert-success')
            menu.setAttribute('class','navbar navbar-expand-lg navbar-dark bg-success')
        }
        amarrillo.onclick = function(){
            texto.setAttribute('class','card-title text-center text-uppercase alert-warning')
            menu.setAttribute('class','navbar navbar-expand-lg navbar-light bg-warning')
        }
        azul.onclick = function(){
            texto.setAttribute('class','card-title text-center text-uppercase alert-primary')
            menu.setAttribute('class','navbar navbar-expand-lg navbar-dark bg-primary')
        }
        black.onclick = function(){
            fondo = body[0];
            console.log(fondo)
            fondo.setAttribute('class','bg-dark');
        }
        white.onclick = function(){
            fondo = body[0];
            console.log(fondo)
            fondo.setAttribute('class','bg-light');
        }
        volver.onclick = function(){
            fondo = body[0];
            console.log(fondo)
            fondo.setAttribute('class','bg-secondary');
        }
       mas.onclick = function(){
        zoomIn();

       }
       menos.onclick = function(){
        zoomOut();
       }

       normal.onclick = function(){
        let fontSize = 1;
        letra.style.fontSize = fontSize + "em";
       }



        // funcion para aumentar la fuente
        function zoomIn() {

            fontSize += 0.1;
            letra.style.fontSize = fontSize + "em";
        }

        // funcion para disminuir la fuente
        function zoomOut() {

        fontSize -= 0.1;
            letra.style.fontSize = fontSize + "em";
        }



}
</script>

@endsection
