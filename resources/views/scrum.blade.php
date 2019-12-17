@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4" id="panelIzq">
        <div class="card" style="width: 25rem;">
            <img src="images/scrum_page.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-text text-justify">“Scrum es un método para trabajar en equipo a partir de iteraciones o Sprints. Scrum es una metodología ágil, por lo que su objetivo será controlar y planificar proyectos con un gran volumen de cambios de última hora, en donde la incertidumbre sea elevada. Se suele planificar por semanas.”</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelCentral" hidden>
        <div class="card" style="width: 25rem;">
            <img src="images/metodologia.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="card-title text-center">Método para el desarrollo de software que permite incorporar cambios con rapidez y en cualquier fase del proyecto.</h6>
            </div>
        </div>
    </div>

    <div class="col-md-4" id="panelDer" hidden>
        <div class="card" style="width: 25rem;">
            <img src="images/hb.png" class="card-img-top" alt="..." width="160px">
            <div class="card-body">
                <h6 class="card-title text-center">Las habilidades blandas se entienden como el resultado de una combinación de habilidades sociales, de comunicación, de forma de ser, de acercamiento a los demás, que permiten relacionarse de manera efectiva con otros”.</h6>
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
