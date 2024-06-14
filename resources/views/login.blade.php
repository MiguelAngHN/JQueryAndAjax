@extends('plantillas.plantillaLogin')
@section('login')

    <div class="container">
        <div class="img">
            <img src="{{asset('img/AgSalud.png')}}" alt="">
        </div>

        <div class="login-content">
            <form action="{{ url('/iniciar-sesion/')}}" method="POST">
                @csrf

                <div class="logos">
                    <img src="{{asset('img/escudo.png')}}" alt="" style="width: 70%; height: 90%;">
                    <img src="{{asset('img/Sena 2023.png')}}" alt="" style="width: 70%; height: 90%;">
                </div>
                <br>

                <h2 class="title"> INICIAR SESIÓN</h2>

                <div class="mb-3">
                    <button type="button" class="close" aria-label="Close"> 
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Correo</h5>
                        <input type="text" class="input" name="email" value="{{old('email')}}" placeholder="Ingrese su correo">
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" id="input" class="input" name="password" placeholder="Ingrese su contraseña">
                    </div>
                </div>

                <div class="view">
                    <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                </div>
                <br>
                <button type="submit" class="btn" style="background-color: #00426e; padding: 10px; color:#fff;">
                    INGRESAR
                    <i class="fas fa-sing-in-alt"></i>
                </button>
                <br>

                <div class="logos2">
                    <img src="{{asset('img/fondoemprender.png')}}" style="width: 90%; height: 90%;" alt="">
                    <img src="{{asset('img/enterritorio.png')}}" style="width: 90%; height: 90%;" alt="">
                </div>

            </form>
        </div>
    </div>

@endsection