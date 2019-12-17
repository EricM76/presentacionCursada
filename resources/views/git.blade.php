@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4" id="panelIzq">
        <div class="card" style="width: 25rem;">
            <img src="images/git_page.png" class="card-img-top" alt="...">
            <div class="card-body">

                <h5 class="card-text text-justify"><strong>Git</strong>  es un software de control de versiones pensando en la eficiencia y la confiabilidad del mantenimiento de versiones de código fuente.”</h5>
                <h5 class="card-text text-justify">“Se define como <strong>control de versiones</strong>  a la gestión de los diversos cambios que se realizan sobre los elementos de algún producto ”</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelCentral" hidden>
        <div class="card" style="width: 25rem;">
            <img src="images/github.png" class="card-img-top" alt="...">
            <div class="card-body">
                <hr>
            <h5 class="card-text text-justify">“GitHub es una plataforma de desarrollo colaborativo de software para alojar proyectos utilizando el sistema de control de versiones Git.”</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelDer" hidden>
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-text text-center">
                <a href="{{'/tateti'}}"><img src="images/tateti.jpg" alt="" width="90%">
                    </a>

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
