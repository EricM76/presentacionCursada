@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4" id="panelIzq">
        <div class="card" style="width: 25rem;">
            <img src="images/sql_page.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-text text-justify">“<strong>SQL</strong>  (por sus siglas en inglés Structured Query Language; en español lenguaje de consulta estructurada) es un lenguaje de dominio específico utilizado en programación, diseñado para administrar, y recuperar información de sistemas de gestión de bases de datos relacionales.”</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelCentral" hidden>
        <div class="card" style="width: 25rem;">
        <img src="images/delfin.jpg" class="card-img-top" alt="...">

            <div class="card-body">
                <h4 class="card-title text-center alert-primary">El delfín que es parte del logo de MySql se llama Sakila. Según los creadores de MySql, este delfín representa la rapidez, precisión, potencia y naturalidad.</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelDer" hidden>
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-text">
                    <h3>Consulta SQL</h3>
                    <hr>
                <form class="horizontal" action="{{'/sql'}}" method="POST">
                    @csrf
                    <div class="row">
                        <label class="col-3 text-center"for="">SELECT</label>
                        <select class="form-control-sm col-3 text-center" id="exampleFormControlSelect1" name="todos">
                            <option>*</option>
                            <option disabled>nombre</option>
                            <option disabled>apellido</option>
                        </select>
                        <label class="col-3 text-center" for="">FROM</label>
                        <label class="col-3 text-center" for="">Usuarios</label>
                    </div>
                    <div class="row">
                        <label class="col-3 text-center" for="">WHERE</label>
                        <select class="form-control-sm col-3 text-center" id="exampleFormControlSelect1" name="campo">
                            <option value="nombre">nombre</option>
                            <option value="apellido">apellido</option>
                        </select>
                        <label class="col-3 text-center" for="">LIKE</label>
                        <input class="col-3 form-control-sm" type="text" name="consulta" required>
                    </div>

                        <div class="col-12 d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-sm btn-primary">Ejecutar la consulta</button>
                        </div>
                </form>

                </h5>
                @if ($_POST)

                <div class="">
                    <h4>Resultados</h4>
                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                </tr>
                            </thead>
                            <tr>
                    @foreach ($usuarios as $usuario)

                            <th scope="row">{{$usuario['id']}}</th>
                            <td>{{$usuario['nombre']}}</td>
                            <td>{{$usuario['apellido']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @endif
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
@if ($_POST)
    <script>
    panelCentral.removeAttribute('hidden');
    panelDer.removeAttribute('hidden');
    </script>
@endif

@endsection
