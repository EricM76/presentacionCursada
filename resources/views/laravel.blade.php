@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4" id="panelIzq">
        <div class="card" style="width: 25rem;">
            <img src="images/laravel_page.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-text text-justify"><strong>Laravel</strong> es un 'framework', (o entorno de trabajo) que permite desarrollar aplicaciones y servicios web con PHP.”</h5>
                <h5 class="card-text text-justify"><strong>Laravel</strong>  pone énfasis en la calidad del código, la facilidad de mantenimiento y escalabilidad, lo que permite realizar proyectos desde pequeños a grandes o muy grandes.</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelCentral" hidden>
        <div class="card" style="width: 43rem;">
            <div class="card-body">
                <h3 class="card-title text-center text-uppercase alert-danger">Entorno de Laravel</h3>
            </div>
            <img src="images/aplicacion-laravel.png" class="card-img-top" alt="...">

        </div>
    </div>
    <div class="col-md-4 mt-5 " id="panelDer" hidden>
        <div class="card mt-5 ml-5" style="width: 20rem; height:7rem">
            <div class="card-body">
                <h3 class="card-title text-center alert-info">Déjenos su comentario</h3>
            </div>
        <a href="{{'/libro'}}"><img src="images/libro-visitas.gif" class="card-img-top" alt="..." ></a>


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
