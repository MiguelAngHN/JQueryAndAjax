@extends('plantillas.plantillaEstilos')
@section('estilos')

<div class="container-fluid mt-5">
    <div class="container">
        <div class="input-group">
            <div class="col-lg-3 col-md-4 col-6 modc">
                <a href="{{ url('/usuarios-rips') }}">
                    <div class="modulo" onmouseover="mouse(true,1)" onmouseout="mouse(false,1)">
                        <div class="circulo circulo1">
                            <img class="icono1" src="{{ asset('img/') }}" alt="">
                        </div>
                        <h5 class="texto1"></h5>
                    </div>
                </a>
            </div>
    
<div class="col-lg-3 col-md-4 col-6 modc">
    <a href="{{ url('/validaciones-automaticas') }}">
        <div class="modulo" onmouseover="mouse(true,2)" onmouseout="mouse(false,2)">
            <div class="circulo circulo2 ">
                <img class="icono2 img validacion" src="{{ asset('img/validacioness.png') }}" alt="" style=" width: 8em;">
            </div>
            <h5 class="texto2">VALIDACIONES AUTOMATICAS</h5>
        </div>
    </a>
</div>

{{-- ---------------------- --}}

<div class="col-lg-3 col-md-4 col-6 modc">
    <a href="{{ url('/configuraciones') }}">
        <div class="modulo" onmouseover="mouse(true,3)" onmouseout="mouse(false,3)">
            <div class="circulo circulo3">
                <img class="icono3 img" src="{{ asset('img/gestion usuario.png') }}" alt="">
            </div>
            <h5 class="texto3">GESTION USUARIOS</h5>
        </div>
    </a>
</div>

{{-- ------------------------- --}}

<div class="col-lg-3 col-md-4 col-6 modc">
    <a href="#" data-bs-toggle="modal" data-bs-target="#cargue-archivos">
        <div class="modulo" onmouseover="mouse(true,4)" onmouseout="mouse(false,4)">
            <div class="circulo circulo4">
                <img class="icono4 " src="{{ asset('img/cargue-archivos.png') }}" alt="">
            </div>
            <h5 class="texto4">CARGAR ARCHIVOS</h5>
        </div>
    </a>
</div>

{{-- --------------------------- --}}

<div class="col-lg-3 col-md-4 col-6 modc">
    <a href="{{ url('/panelCm') }}">
        <div class="modulo" onmouseover="mouse(true,5)" onmouseout="mouse(false,5)">
            <div class="circulo circulo5">
                <img class="icono5" src="{{ asset('img/masivo.png') }}" alt="" >
            </div>
            <h5 class="texto5">Cargues masivos</h5>
        </div>
    </a>
</div>

{{-- --------------------------- --}}

<div class="col-lg-3 col-md-4 col-6 modc">
    <a href="{{ url('/indexContrato') }}">
        <div class="modulo" onmouseover="mouse(true,6)" onmouseout="mouse(false,6)">
            <div class="circulo circulo6">
                <img class="icono6 contratos_img " src="{{ asset('img/contrato.png') }}" alt=""  style="width: 14em">
            </div>
            <h5 class="texto6">CONTRATOS</h5>
        </div>
    </a>
</div>

{{-- ---------------------------- --}}

<div class="col-lg-3 col-md-4 col-6 modc">
    <a href="{{ url('/roles') }}">
        <div class="modulo" onmouseover="mouse(true,7)" onmouseout="mouse(false,7)">
            <div class="circulo circulo7">
                <img class="icono7  roles_img" src="{{ asset('img/roles-y-permisos.png') }}" alt=""  style="width: 10em" >
            </div>
            <h5 class="texto7">Roles y permisos</h5>
        </div>
    </a>
</div>
</div>
</div>
</div>



@endsection