@extends('layouts.header')
@section('content')
<script src="js/ahorcado.js"></script>
<script>

            // Antes de ejecutar Javascript espera que toda la página se dibuje
        document.addEventListener('DOMContentLoaded', function () {

        //======================================================================
            // VARIABLES
            //======================================================================

            const listaPalabras = ['razonar', 'reflexionar', 'imaginar', 'amar'];
            let palabraAdivinar = [];
            let palabraMostrar = [];
            let historialLetrasUsuario = [];
            let numIntentos = 5;
            let nodoLetra = document.querySelector('#letra');
            let nodoBoton = document.querySelector('#boton');
            let nodoResultado = document.querySelector('#resultado');
            let nodoIntentos = document.querySelector('#intentos');
            let nodoHistorial = document.querySelector('#historial');

            //======================================================================
            // FUNCIONES
            //======================================================================


            /**
             * Método que prepara el juego para iniciarse
             */
            function prepararJuego () {
                //// 1 Selecciono una palabra aleatoria de listaPalabra
                //// 1.1 Obtengo la posicion aleatoria
                let posAleatoriaListaPalabras = _.random(listaPalabras.length - 1);
                //// 1.2 Obtengo la palabra aleatoria
                let palabraAleatoria = listaPalabras[posAleatoriaListaPalabras];
                //// 1.3 Separo la palabra en letras y lo guardo
                palabraAdivinar = palabraAleatoria.split('');
                //// 2 Preparo el array que va a ver el usuario. Tendrá el mismo número de guiones que letras en palabraAdivinar
                for (let letra of palabraAdivinar) {
                    palabraMostrar.push('_');
                }
                //// 3 Dibuja todo lo necesario
                dibujarJuego();
            }

            /**
             * Método que redibuja lo que ve el usuario con los cambios
             */
            function dibujarJuego () {
                // Convertimos un array en un texto, separado por espacios, y lo mostramos en el div resultado
                nodoResultado.textContent = palabraMostrar.join(' ');
                // Mostramos los intentos
                nodoIntentos.textContent = numIntentos;
                // Mostramos el historial de letras
                nodoHistorial.textContent = historialLetrasUsuario.join(' ');
            }

            /**
             * Método que comprueba la letra que ha introducido el usuario
             */
            function comprobarLetraUsuario () {
                //// 1 Sustituye los guiones por la letra acertada
                // Guardo la letra del input que ha escrito el usuario en una variable
                let letraUsuario = nodoLetra.value;
                // Vaciamos el input para que el usuario pueda volver a escribir
                nodoLetra.value = '';
                // Le devolvemos el foco al input para que pueda introducir otra letra
                nodoLetra.focus();
                // Recorremos todas las letras para saber si alguna esta bien
                for (const [posicion, letraAdivinar] of palabraAdivinar.entries()) {
                    // Comprobamos si la letra del usuario es igual a la letra a adivinar
                    if (letraUsuario == letraAdivinar) {
                        // Sustituimos el guion por la letra acertada
                        palabraMostrar[posicion] = letraAdivinar;
                    }
                }
                //// 2 Comprobamos si se ha equivocado
                // ¿No esta la letra?
                if (!palabraAdivinar.includes(letraUsuario)) {
                    // Restamos un intento
                    numIntentos -= 1;
                    // Guardamos en el historial la letra pulsada por el usuario
                    historialLetrasUsuario.push(letraUsuario);
                }
                //// 3 Comprobamos si hay que terminar el juego
                acabarJuego();
                //// 4 Mostramos los cambios
                dibujarJuego();
            }

            /**
             * Método que comprueba si se ha pulsado la tecla Enter
             */
            function comprobarPulsadoEnter (evento) {
                if (evento.code == 'Enter') {
                    comprobarLetraUsuario();
                }
            }

            /**
             * Método que verifica si se ha acabado el juego
             */
            function acabarJuego () {
                // Ha ganado: ¿Le queda guiones al jugador?
                if (!palabraMostrar.includes('_')) {
                    alert('Has ganado!!!');
                    // Refrescamos la página para volver a jugar
                    location.reload(true);
                }
                // Ha perdido: ¿Tiene 0 intentos?
                if (numIntentos == 0) {
                    alert('Has Perdido!!! Era: ' + palabraAdivinar.join(''));
                    // Refrescamos la página para volver a jugar
                    location.reload(true);
                }
            }

            //======================================================================
            // EVENTOS
            //======================================================================
            // Al hacer clic en el boton se llama la funcion comprobarLetraUsuario
            nodoBoton.addEventListener('click', comprobarLetraUsuario);
            // Al hacer Enter con el teclado se llama a la funcion comprobarLetraUsuario
            nodoLetra.addEventListener('keyup', comprobarPulsadoEnter);

            //======================================================================
            // INICIO
            //======================================================================
            prepararJuego();
        });

        </script>
<div class="row container-fluid">
    <div class="col-md-4" id="panelizq" >
        <div class="card" style="width: 25rem;">
            <img src="images/oop_page.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-text text-justify">“La programación orientada a objetos (POO, en español; OOP, según sus siglas en inglés) es un paradigma (o modelo) de programación que usa objetos y sus interacciones, para diseñar aplicaciones y programas informáticos. Está basado en varias técnicas, incluyendo herencia, abstracción, polimorfismo y encapsulamiento.”</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4" id="panelcentral">
        <div class="card" style="width: 25rem;">
            <img src="images/oopClases.JPG" class="card-img-top" alt="..." style="height:240px">
            <img src="images/atributosMetodos.jpg" class="card-img-top" alt="..." style="height:270px">
        </div>
    </div>
    <div class="col-md-4" id="panelder">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-text">
                    <h2>Clase: HUMANO</h2>
                    <hr>
                    <h3>¿qué atributos tenés?</h3>
                    <h4>Habilidades Humanas</h4>
                    <hr>
                    <input id="letra" type="text" placeholder="Dame una letra" maxlength="1">
                    <button id="boton" class="btn btn-sm btn-primary">Comprobar</button>
                    <div id="resultado"></div>
                    <h5>Intentos</h5>
                    <div id="intentos"></div>
                    <h5>Historial</h5>
                    <div id="historial"></div>
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
