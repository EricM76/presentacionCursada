@extends('layouts.header')
@section('content')

<div class="row container-fluid">
    <div class="col-md-4">
        <div class="card" style="width: 23rem;">
            <div class="card-body">
                <h5 class="card-text">
                    <h3>Buscador de Peliculas</h3>
                    <hr>
                <form action="{{'/phpPeliculas'}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-8">
                        <input id="title" type="text" class="form-control" name="title" required >
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary" type="submit" >Buscar</button>
                        </div>
                    </div>
                </form>
                <hr>
                <a href="{{'/php'}}"><button class="btn btn-secondary">Volver</button></a>
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card" style="width: 55rem;">
            <div class="card-body">
                <div class="d-flex justify-content-center"></div>
                @foreach ($peliculas as $pelicula)
                <img src="images/{{$pelicula->cartel}}" alt="" width="100px">
                @endforeach
            </div>
        </div>


    </div>
</div>


@endsection
