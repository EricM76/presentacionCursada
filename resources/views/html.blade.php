@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4" id="panelIzq">
        <div class="card" style="width: 25rem;">
            <img src="images/html_page.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-text text-justify">“HyperText Markup Language (Lenguaje de Marcas de Hipertexto) es un lenguaje de marcado que se utiliza para el desarrollo de páginas web. Está compuesto por elementos (etiquetas, contenido y atributos), por medio de los cuales se estrutura y da significado a las partes de un documento HTML que será interpretado por el navegador (IE, Chrome, Firefox, Opera, etc)”</h5>
            </div>
        </div>
    </div>
        @if ($_POST)
        <div class="col-md-4" id="panelCentral">
        @else
        <div class="col-md-4" id="panelCentral" hidden>
        @endif
        <div class="card" style="width: 25rem;">
            <img src="images/estructuraHTML.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title text-center text-uppercase alert-danger">Aquí comienza todo</h3>
            </div>
            <img src="images/ejemploHTML.jpg" class="card-img-top" alt="...">
        </div>
    </div>
    @if ($_POST)
    <div class="col-md-4" id="panelDer">

    @else
    <div class="col-md-4" id="panelDer" hidden>
    @endif
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-text">
                    <h1>Pagina de Prueba</h1>
                    <hr>
                <form action="{{'/html'}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-12 col-form-label">Escriba su nombre</label>
                        <div class="col-sm-8">
                            <input id="name" type="text" class="form-control" id="name"  name="nombre">
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary" type="submit" >Enviar</button>
                        </div>
                    </div>
                </form>
                @if (isset($_POST['nombre'])&&$_POST['nombre']!=null)
                <h2>¡Hola {{$_POST['nombre']}}!</h2>
                <video src="videos/mono.webm" autoplay width="360px" loop></video>
                <h3>La vida del programador no siempre es facil</h3>
                @endif

                <div>

                {{-- <div id="miCameraOnline">
                    <video width="230px"></video>
                    <canvas></canvas>
                    <button>¡Haz Foto!</button>
                </div>

                <script>

                var videoObj    = { "video": true },                        errBack        = function(error){
                        alert("Error Capturando el video: ", error.code);
                    };
                     // Pedir permisos al Navegador para usar la Webcam
                    if(navigator.getUserMedia){// Standard
                        navigator.getUserMedia(videoObj, iniciarWebcam, errBack);
                    }else
                    if(navigator.webkitGetUserMedia){ // WebKit
                        navigator.webkitGetUserMedia(videoObj, iniciarWebcam, errBack);
                    }else if(navigator.mozGetUserMedia){ // Firefox
                        navigator.mozGetUserMedia(videoObj, iniciarWebcam, errBack);
                    };

                    function iniciarWebcam(stream){
                    var miCameraOnline = getElementById('miCameraOnline'),
                        video = miCameraOnline.querySelectorAll('video'),
                        canvas = miCameraOnline.querySelectorAll('canvas');

                        video.width = video.offsetWidth;

                        if(navigator.getUserMedia){ // Standard
                            video.src = stream;
                            video.play();
                        }else if(navigator.webkitGetUserMedia){ // WebKit
                            video.src = window.webkitURL.createObjectURL(stream);
                            video.play();
                        }else if(navigator.mozGetUserMedia){ // Firefox
                            video.src = window.mozURL.createObjectURL(stream);
                            video.play();
                            };

                        // Click para hacer la foto
                        $('#webcam-popup .takephoto').click(function(){
                            // Copiando la imagen a un canvas temporal
                            var temp = document.createElement('canvas');

                            temp.width  = video.offsetWidth;
                            temp.height = video.offsetHeight;

                            var tempcontext = temp.getContext("2d"),
                                tempScale = (temp.height/temp.width);

                            temp.drawImage(
                                video,
                                0, 0,
                                video.offsetWidth, video.offsetHeight
                            );

                            // Redimensionar al tamaño de nuestro cavas
                            canvas.style.height    = parseInt( canvas.offsetWidth * tempScale );
                            canvas.width        = canvas.offsetWidth;
                            canvas.height        = canvas.offsetHeight;
                            var context        = canvas.getContext("2d"),
                                scale        = canvas.width/temp.width;
                            context.scale(scale, scale);
                            context.drawImage(bigimage, 0, 0);
                        });
                    };

                        </script> --}}

                </h5>
            </div>
        </div>
    </div>
</div>
<script>
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
}
</script>

@endsection
