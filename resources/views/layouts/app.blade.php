<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <link href="/estilos.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="/javascript.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js']) 

    <style>

.maincontainer
{
    
    width: 302px;
    height: 290px;
    margin: 15px;
    float: left; 
}



img
{
   border-radius: 0px;
}

.back h2
{
    
    /* top: 90px; */
    padding-top: 2rem;
    text-align: center;
    display: flex;
    justify-content: center;
}

.back p
{
    position: absolute;
    top: 100px;
    font-size: 15px;
}
.back h4
{
    padding-top: 2rem;
    text-align: center;
    display: flex;
    justify-content: center;
}

.divboton{
    padding-top: 2rem;
    text-align: center;
    display: flex;
    justify-content: center;
}

.divboton button:hover{
    color: #1b7cb8;
    background-color: white!important;
}


.front h2
{
    position: absolute;
    padding: 10px;
    top: 200px;
    color: #000;
}

/* style the maincontainer class with all child div's of class .front */
.maincontainer > .front
{
    position: absolute;
    transform: perspective(600px) rotateY(0deg);
    
    width: 302px;
    height: 290px;
    
    backface-visibility: hidden; /* cant see the backside elements as theyre turning around */
    transition: transform .0s linear 0s;
}

/* style the maincontainer class with all child div's of class .back */
.maincontainer > .back
{
    position: absolute;
    transform: perspective(600px) rotateY(180deg);
    background: #1b7cb8;
    color: #fff;
    width: 302px;
    height: 290px;
    
    backface-visibility: hidden; /* cant see the backside elements as theyre turning around */
    transition: transform .0s linear 0s;
}
@media only screen and (max-width: 600px) {
    .maincontainer
{
    width: 300px;
    height: 290px;
    margin: 15px;
    margin-left: 30px;
    float: left; 
}
    .maincontainer > .front
{
    position: absolute;
    transform: perspective(600px) rotateY(0deg);
    margin-left: 18px;
    width: 300px;
    height: 290px;
    
    backface-visibility: hidden; /* cant see the backside elements as theyre turning around */
    transition: transform .0s linear 0s;
}
.maincontainer > .back
{
    position: absolute;
    transform: perspective(600px) rotateY(180deg);
    background: #1b7cb8;
    color: #fff;
    width: 300px;
    height: 290px;
    margin-left: 18px;
    backface-visibility: hidden; /* cant see the backside elements as theyre turning around */
    transition: transform .0s linear 0s;
}
  }



/* Tablet */


  @media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 2) {
     
    div> img{
        width: 200px!important;
        height: 200px!important;
    }

    .maincontainer
{
    width: 200px;
    height: 200px;
    
    float: left; 
}
        .maincontainer > .front
    {
        position: absolute;
        transform: perspective(600px) rotateY(0deg);
        
        width: 200px;
        height: 200px;
        
        backface-visibility: hidden; /* cant see the backside elements as theyre turning around */
        transition: transform .0s linear 0s;
    }
    .maincontainer > .back
    {
        position: absolute;
        transform: perspective(600px) rotateY(180deg);
        background: #1b7cb8;
        color: #fff;
        width: 200px;
        height: 200px;
        
        backface-visibility: hidden; /* cant see the backside elements as theyre turning around */
        transition: transform .0s linear 0s;
    }

}

.maincontainer:hover > .front
{
    transform: perspective(600px) rotateY(-180deg);
}

.maincontainer:hover > .back
{
    transform: perspective(600px) rotateY(0deg);
}

.botonCard{
    color: #1b7cb8;
    background-color: white!important;
}

.botonCard:hover{
    color: white;
    background-color: black!important;
}

.disabled {
    color: white;
    cursor: not-allowed;
    pointer-events: none;
}

.disabledBoton {
    
    cursor: not-allowed;
    pointer-events: none;
}



        /* Inicio layouts */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }
        
        h1,h2,h3,h4{
            font-weight: 900!important;
        }

        .menuDerecha{
            width: 254.75px;
            display:flex;
            padding-right:12px;
            margin-right:40px;
            align-items:center;
        }

        
        .prodRel{
            text-decoration:none;
            color:black;
        }

        .prodRel:hover{
            color:black;
        }

        .carta{
        display:flex;
        justify-content: center;
        align-items: center;
        }

        .infoProcuto button.btn.agotado{
            color: #B3B3B3;
            background-color: #EFEFEF!important;
            pointer-events: none;
        }

        #buttomRegister{
            color:rgb(255, 192, 32)!important;
            background-color: white!important;
            border:1px solid rgb(255, 192, 32)!important;
        }
        
        #buttomRegister:hover{
            color: black !important;
        }


        .imagen{
        position:relative;
        }
        
        .bg-warning{
            background-color: rgb(255, 192, 32)!important;
            color:black;
        }

        .page-link{
            color:black!important;
            
        }

        .active span{
            background-color:rgb(255, 192, 32)!important;
            border-color:rgb(255, 192, 32)!important;
        }

        .seleccionado{
            text-decoration: underline;
            text-decoration-color: rgb(255, 192, 32)!important;
            font-weight: 700;
        }

        button.btn:hover{
        color: white;
        background-color: black!important;
        }

        .infobox{
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); 
        width: 50%;
        height: 25%;
        background-color:rgb(255, 192, 32)!important;   
        
        display:flex;
        justify-content: center;
        align-items: center;
        color:black;
        opacity:0;
        }

        .menu{
        margin:10px;
        border-radius: 25px;
        position:absolute;
        top: 0%;
        right:0%;
        background-color:white;   
        color:black;
        }
        .infoMenu{
            display:flex;
            justify-content: space-between;
            margin:10px;
        }


        .menuEditar{
        margin:10px;
        border-radius: 25px;
        position:absolute;
        top: 0%;
        left:0%;
        background-color:white;   
        color:black;
        }

        .infoMenuEditar{
            display:flex;
            justify-content: space-between;
            margin:10px;
        }

        .carta .imagen{
            object-fit: cover;  
            
        }

        .carta:hover .infobox{
                opacity:1;
                transition: 0.4s;
        }

        .carta a:link, a:visited {
            text-decoration:none;
            text-transform:uppercase;
        }

        .info h1{
            font-size: 1.4rem;
            text-decoration: none;
        }

        .tallas p:focus{
            color:red!important;
        }


        .navbar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            background-color: #fd5647;
            transition: 0.4s;
            z-index: -1;
        }

        .navbar-nav.w-100{
            display: flex;
            flex-direction: column;
            padding: 19px;
        }

        .nav-link{
            font-size: 1.25em;
        }

        .container{
            transition: 0.4s;
            margin-top: 20px;
        }

        .active-nav{
            margin-left: 0;
            z-index: 3;
        }

        ul.navbar-nav.d-flex.flex-colum.w-100 {
            padding-top: 98px;
        }

        .active-cont{
            filter: opacity(0.5);
        }

        .lbl-menu{
            margin-left: 40px;
            width: 30px;
            height: 25px;
            top:10px;
            position: relative;
            cursor: pointer;
            transform: scale(0.9);
        }
        .lbl-menu #spn1,#spn2,#spn3{
            
            position: absolute;
            content: '';
            background:black;
            width: 30px;
            height: 2.2px;
            border-radius: 5px;
            transition: 0s;
        }

        #spn1{
            top: 4px;
        }
        #spn2{
            top: 12px;
        }
        #spn3{
            top: 20px;
        }

        #btn-menu{
            display: none;
        }
        
        #btn-menu:checked ~ .lbl-menu #spn1{
            transform: rotate(50deg);
            transform-origin: right;
            transition: 0.0s;
            width: 27px;
            top: 21px;
        }

        #btn-menu:checked ~ .lbl-menu #spn2{
            opacity: 0;
        }

        
        #btn-menu:checked ~ .lbl-menu #spn3{
            transform: rotate(-50deg);
            transition: 0.0s;
            transform-origin: right;
            width: 27px;
            top: 0;
        }

        .btn.btn-link{
            color: black;
            text-decoration: none;
        }
      
        .layoutFooter__inner{
            display: grid;
            align-items: baseline;
            padding-top: 54px;
        }

        
            .layoutFooter {
                padding-top: 2.5em;
                padding-bottom: 1em;
            }

            .layoutFooter__inner {
                grid-row-gap: 2.25em;
                row-gap: 2.25em;
            }

        .layoutFooter__pages {
            display: grid;
            font-size: .75em;
            padding-left: 2rem;
            padding-right: 2rem;
        }
         .logo{
             margin-left: 232px; 
        } 
        @media only screen and (max-width:660px){
            .lbl-menu{
            margin-left: 0px;
            }
            .menuDerecha{
            width: 145px;
            padding-right:0px;
            margin-right:2px;
            }
            .logo{
             margin-left: 125px; 
        }
        

        }


        @media only screen and (max-width: 1200px){
            .infobox{
        margin-top:15px;
        position:static;
        top: initial;
        bottom: initial;
        transform: none;
        width: 100%;
        height: 15%;
        background-color:transparent;  
        opacity:1; 
        }
        .infobox{
                display:block;
                text-align: center;
                
            }
        }

        @media only screen and (min-width: 660px) and (max-width: 899px){
            .layoutFooter__pages {
                grid-template-columns: repeat(3,1fr);
            }
        }

        @media only screen and (min-width: 900px) and (max-width: 1199px){
            .layoutFooter__pages {
                grid-template-columns: repeat(6,1fr);
            }
            .row{
                justify-content: center;
            }
        }

        @media only screen and (min-width: 1200px){
            .contenedorProducto{
                display: flex;
                justify-content: space-between;
            }

            .infoProcuto{
                padding-left: 186px;
            }

            .layoutFooter {
                padding-top: 2em;
                padding-bottom: 2em;
            }

            .row{
                justify-content: center;
            }

            .layoutFooter__pages {
                grid-template-columns: repeat(6,1fr);
            }

    
            .precioTotal,.finalizarComopra{
                margin-left: 15%;
            }

            .direccionDeEntrega{
                width: 818px;
            }


        }

        @media only screen and (min-width: 1400px){
            .row{
                justify-content: center;
            }
        }

        .layoutFooter__pages li {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 0.375em 1em;
        }

        .layoutFooter__pages li a{
        color: black;
        text-decoration: none;
        }

        .layoutFooter__item{
        text-align: center;
        }

        .layoutFooter__copyright {
        font-size: .75em;
        text-align: center;
        grid-row: 2;
        }

         main{
        font-family: system-ui;
        min-height: 100vh;
        
        
        padding-top: 5.0rem !important;
        padding-bottom: 1.5rem !important;
        } 

        .productoIndividual{
            display:Flex;
            flex-direction: column;
        }

        .navbarRight{
            margin-left:20px!important;
        }

        .comentarios{
            width:100%!important;
        }


</style>
</head>
<body>

    <div id="app">
        {{-- NAVBAR --}}
        <div class=" footer container-fluid " style=" display: flex;justify-content: space-between; align-items: center;z-index: 4;position: fixed">
            <div>
                <input type="checkbox" id="btn-menu" class="checar">
                <label for="btn-menu" class="lbl-menu" id="sidebarButton">
                    <span id="spn1"></span>
                    <span id="spn2"></span>
                    <span id="spn3"></span>
                </label>
                
            </div>
            <div class="logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                    <img  src="{{ URL::to('/img/DRSOUNDTRANS1.png') }}" class="bi me-2" width="80" height="80" role="img" aria-label="Bootstrap">
                </a>
            </div>
                <div class="menuDerecha">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}" style="color: black;margin-right: 12px;font-size: 15px" ><span class="icon iconSize-16"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.696.074a3.841 3.841 0 1 1 1.498 7.534A3.841 3.841 0 0 1 7.696.074ZM9 1.049a2.85 2.85 0 1 0-1.112 5.59 2.85 2.85 0 0 0 1.112-5.59Z"></path> <path d="M3.887 10.813A6.444 6.444 0 0 1 14.89 15.37a.494.494 0 1 1-.988 0v-.003a5.457 5.457 0 0 0-10.913 0v.003a.494.494 0 1 1-.988 0c0-1.71.679-3.348 1.887-4.557Z"></path></svg>&nbsp&nbsp</span> {{ __('Login') }}</a>
                        @endif
        
                    @else
                        <li class="nav-item dropdown" style="list-style: none;font-size: 11px;padding-right: 16px;">
                            <a class="nav-link" href="{{route ('user.showMiuser',Auth::user()->id )}}"><span class="icon iconSize-16"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.696.074a3.841 3.841 0 1 1 1.498 7.534A3.841 3.841 0 0 1 7.696.074ZM9 1.049a2.85 2.85 0 1 0-1.112 5.59 2.85 2.85 0 0 0 1.112-5.59Z"></path> <path d="M3.887 10.813A6.444 6.444 0 0 1 14.89 15.37a.494.494 0 1 1-.988 0v-.003a5.457 5.457 0 0 0-10.913 0v.003a.494.494 0 1 1-.988 0c0-1.71.679-3.348 1.887-4.557Z"></path></svg>&nbsp&nbsp</span>
                                @Auth
                                    @if(Auth::user()->role=='admin')
                                    ADMIN
                                    @endif
                                @endAuth 
                            {{ Auth::user()->name }}</a>
                        </li>
                    @endguest
                    @Auth
                    @if(Auth::user()->role=='user')
                    @php
                    $comp=0;
                    @endphp
                    <a href="{{route('carritos.mostrarCarrito','comp')}}" class="nav-link pl-4" style="font-size: 15px"><span class="icon iconSize-16"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M14.387 5.16h-2.79V3.152a3.21 3.21 0 0 0-6.42 0V5.16H2.384l-.383 9.58a1.2 1.2 0 0 0 1.2 1.252h10.4a1.207 1.207 0 0 0 1.2-1.22l-.414-9.612ZM5.98 3.152a2.407 2.407 0 1 1 4.814 0V5.16H5.98V3.153Zm7.623 12.036h-10.4a.4.4 0 0 1-.4-.417l.352-8.81h2.022v1.6h.8v-1.6h4.814v1.6h.8v-1.6h2.023l.384 8.826a.4.4 0 0 1-.395.4v.001Z"></path></svg>&nbsp&nbsp</span>Carrito</a>
                    @endif
                    @endAuth
                </div>
            </div>
        
        {{-- SIDEBAR --}}
        <nav class=" navbar navbar-expand d-flex flex-column align-items-center" style="font-family: system-ui;" id="sidebar">
            <ul class="navbar-nav d-flex flex-colum w-100">
                <li class="nav-item w-100">
                    <a href="{{ url('/') }}" class="nav-link pl-4"><strong>Home</strong></a>
                </li>
                
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{route('catalogo')}}"><strong>Catalogo</strong></a>
                </li>
                
                
                @auth
                @if(Auth::user()->role=='admin')

                    
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{route('users.index')}}">Listado usuarios</a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{route('alquileres.index')}}">Listado Alquileres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comentarios.index')}}">Listado Comentarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('equipos.index')}}">Listado Equipos</a>
                </li>
                
                
                @else
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{route('comentario.miscomentarios', Auth::user()->id)}}">Mis Comentarios</a>
                </li>
                
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{route('carritos.misAlquileres')}}">Mis Alquileres</a>
                </li>
                
                @endif
                
                @endauth
                @guest
                @if (Route::has('login'))
                <li class="nav-item w-100">
                    <a href="{{ route('login') }}" class="nav-link pl-4"><strong>Login</strong></a>
                </li>
                @endif
                @if (Route::has('register'))
                <li class="nav-item w-100">
                    <a href="{{ route('register') }}" class="nav-link pl-4"><strong>Registrarse</strong></a>
                </li>
                @endif
                @else
                    <li class="nav-item w-100">
                        <a href="{{ route('logout') }}" class="nav-link pl-4"
                           onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><strong>Cerrar Sesión</strong></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>
        {{-- CONTENT --}}
        <main class="mainContent" style="background-color: #eee;">
            @yield('content')
            <script>src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"</script>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script>
          let table = new DataTable('#myTable');
        </script>
        </main>
    </div>
    {{-- FOOTER --}}
    <div class="footer layoutContainer">
        <div class="layoutFooter__inner">
            <p class="layoutFooter__item layoutFooter__copyright">
                ©2023. Doble R Sound Todos los derechos reservados.
            </p>
    
            <div class="layoutFooter__item">
                <ul class="layoutFooter__pages">
                    <li>
                        <a href="{{route('equipo.politicaenvios')}}" class="">POLÍTICA DE ENVÍOS</a>
                    </li>
                    <li>
                        <a href="{{route('equipo.contacto')}}" class="">CONTACTO</a>
                    </li>
                    <li>
                        <a href="{{route('equipo.condicionesventa')}}" class="">CONDICIONES DE VENTA</a>
                    </li>
                    <li>
                        <a href="{{route('equipo.politicaprivacidad')}}" class="">POLÍTICA DE PRIVACIDAD</a>
                    </li>
                    <li>
                        <a href="{{route('equipo.politicacookies')}}" class="">POLÍTICA DE COOKIES</a>
                    </li>
                    <li>
                        <a href="{{route('equipo.avisolegal')}}" class="">AVISO LEGAL</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
<script>
    

    var menu_btn = document.querySelector(".checar")
    var sidebar = document.querySelector("#sidebar")
    var container = document.querySelector(".mainContent")
    var footer = document.querySelector(".layoutContainer")

    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav")
        container.classList.toggle("active-cont")
        footer.classList.toggle("active-cont")
    })

    container.addEventListener("click", () => {
        sidebar.classList.remove("active-nav")
        container.classList.remove("active-cont")
        footer.classList.remove("active-cont")
        menu_btn.checked = false
    })

    footer.addEventListener("click", () => {
        sidebar.classList.remove("active-nav")
        container.classList.remove("active-cont")
        footer.classList.remove("active-cont")
        menu_btn.checked = false
    })




</script>
@yield('scripts')

</body>
</html>