@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4" id="panelIzq">
        <img src="images/libro-visitas.gif" class="card-img-top" alt="..." >
    </div>
    <div class="col-md-4" id="panelCentral">
        <div class="card" style="width: 24rem;">
            <div class="card-body">
                <form action="{{'/libro'}}" method="POST" name="form">
                @csrf
                <div class="form-group">
                    {{-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Escriba su comentario" name="comentario"> --}}
                    <textarea class="form-control" name="comentario" id="" cols="32" rows="5" placeholder="Escriba su comentario" style="resize:none" required></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Su nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Su apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar01.png"><img src="images/avatar/avatar01.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar03.png"><img src="images/avatar/avatar03.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar04.png"><img src="images/avatar/avatar04.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar05.png"><img src="images/avatar/avatar05.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar06.png"><img src="images/avatar/avatar06.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar07.png"><img src="images/avatar/avatar07.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar08.png"><img src="images/avatar/avatar08.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar09.png"><img src="images/avatar/avatar09.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar02.png"><img src="images/avatar/avatar02.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar10.png"><img src="images/avatar/avatar10.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar11.png"><img src="images/avatar/avatar11.png" alt="Enviar comentarios" width="60px"></button>
                    <button class="btn btn-sm btn-outline-white" type="submit" name="avatar" value="avatar12.png"><img src="images/avatar/avatar12.png" alt="Enviar comentarios" width="60px"></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if ($_POST)
    <div class="col-md-4" id="panelDer">
    <div class="card" style="width: 24rem;">
        <div class="card-body">
        <img src="images/avatar/{{$datos['avatar']}}" alt="" width="60px">
            <h2>{{$datos['nombre']}} {{$datos['apellido']}}</h2>
            <h4>comentó:</h4>
            <h5 class="my-4">{{$datos['comentario']}}</h5>
            <hr>
            <h6>¡Gracias por tu comentario {{$datos['nombre']}}!</h6>


        </div>
    </div>
    </div>
    @endif



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
