@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4" id="panelIzq" >
        <div class="card" style="width: 25rem;">
            <img src="images/php_page.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-text text-justify">“PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de programación de uso libre y gratuito”</h5>
                <h5 class="card-text text-justify">“PHP se utiliza para generar páginas web dinámicas; es decir aquellas cuyo contenido no es el mismo siempre. Por ejemplo, lo que se muestra en pantalla como resultado de una busqueda en google, youtube, etc. ”</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelCentral" hidden>
        <div class="card" style="width: 25rem;">
                <img src="images/php_esquema.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title text-center text-uppercase alert-info my-4">¿Por qué un elefante?</h3>
                <div class="text-center">
                    <img id="ele1" src="images/php_elefante.jpg" alt="">
                    <img id="ele2" src="images/php_elefante2.jpg" alt="" hidden>
                </div>

            </div>

        </div>
    </div>
    <div class="col-md-4" id="panelDer" hidden>
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-text">
                    <h3>Buscador de Peliculas</h3>
                    <hr>
                <a href="{{'phpPeliculas'}}"><img src="images/buscador.jpg" alt=""></a>

                <hr>
                @if ($_POST)
                    <h5>Resultado de la busqueda</h5>
                    @foreach ($peliculas as $pelicula)
                    <a href="php/{{$pelicula->id}}">{{$pelicula['title']}}</a>
                    @endforeach
                    {{-- {{ $peliculas->links() }} --}}
                @endif

                <div>

                </h5>
            </div>
        </div>


    </div>
</div>

<script>
window.onload = function(){
    var ele1 = document.getElementById('ele1')
    var ele2 = document.getElementById('ele2')

    ele1.onclick = function(){
        ele2.removeAttribute('hidden')
    }

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
