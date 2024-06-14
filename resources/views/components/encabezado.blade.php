<link rel="stylesheet" href="{{ asset('css/encabezado.css') }}">

<nav class="navbar barra">
    <div class="logo">
        <img class="logo-ags" src="{{ asset('img/agSalud.png') }}" alt="user">
    </div>
    <div class="casa ml-3">
        <div class="tooltip-container">
            <a href="{{ url('/panel') }}" class="button">
                <i class="fa-solid fa-house-chimney fa-2xl"  style="color: #12AA9E;"></i>
            </a>
            <span class="tooltip">INICIO</span>
        </div>
    
        <div class="navegacion">
            <div class="tooltip-container">
                <a href="{{ url('/configuraciones') }}" class="button">
                    <i class="fa-solid fa-users fa-2xl" style="color: #12AA9E;"></i>
                </a>
                <span class="tooltip" style="width:150%">GESTION DE USUARIOS</span>
            </div>
            <div class="tooltip-container">
                <a href="{{ url('/panel') }}" class="button">
                    <i class="fa-solid fa-clipboard-check fa-2xl" style="color: #12AA9E"></i>
                </a>
                <span class="tooltip" style="width:150%">VALIDACIONES AUTOMATICAS</span>
            </div>
            <div class="tooltip-container">
                <a href="{{ url('/panel') }}" class="button">
                    <i class="fa-solid fa-arrows-rotate fa-2xl" style="color: #12AA9E;"></i>
                </a>
                <span class="tooltip" style="width:150%; margin:auto">GLOSAS Y DEVOLUCIONES</span>
            </div>
        </div>
        
</nav>