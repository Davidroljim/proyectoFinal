{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DobleRsound') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

    <header class="p-3 bg-dark text-white">
      <nav class=" navbar navbar-expand-md navbar-dark bg-dark text-white shadow-sm">
          <div class="container" style="">
            <a href="{{ url('/') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img  src="{{ URL::to('/img/DRSOUNDTRANS2.png') }}" class="bi me-2" width="55" height="55" role="img" aria-label="Bootstrap">
            </a>
              <a class="navbar-brand" href="{{ url('/') }}">
                  Home
              </a>
              <a href="{{route('catalogo')}}" class="nav-link px-2 text-white">Catalogo</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav me-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto ">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                          
                      @else
                      
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('users.index')}}">Usuarios</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('alquileres.index')}}">Alquileres</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('comentarios.index')}}">Comentarios</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('equipos.index')}}">Equipos</a>
                      </li>
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
      </header> --}}
      @extends('layouts.app')

      @section('template_title')
          Mis Comentarios
      @endsection
      
      @section('content')
    @if ($message = Session::get('succes'))
                        <div class="alert alert-danger ">
                            <p style="text-align: center">{{ $message }}</p>
                        </div>
            @endif
    <body class="antialiased">
      
    


        @if($comentarios->isEmpty())

        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <h2 style="text-align: center">Parece que no has añadido ningún comentario</h2>
                        
                    </div>

        <div class="contenedor d-flex flex-row align-items-center mt-3 p-2  rounded"><button type="button" class="btn " style="color: white;
            background-color: #1b7cb8;" data-bs-toggle="modal" data-bs-target="#exampleModal" >Añadir Comentario</button></div>
          
            
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  @Auth
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Inserta un comentario {{ Auth::user()->name }}.</h1>
                  @else
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Inserta un comentario.</h1>
                  @endAuth
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{ route('comentarios.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    @Auth
                    <input type="hidden" class="form-control" id="recipient-name" name="id_usuario" value="{{ Auth::user()->id }}">
                    <input type="hidden" class="form-control" id="recipient-name" name="nombre_usuario" value="{{ Auth::user()->name }}">
                    @endAuth
                    <div class="mb-3">
                      {{-- <label for="recipient-name" class="col-form-label">Asunto:</label> --}}
                      <input type="text" class="form-control" id="recipient-name" name="asunto" placeholder="asunto">
                    </div>
                    <div class="mb-3">
                      <label for="message-text" class="col-form-label">Descripcion:</label>
                      <textarea class="form-control" id="message-text" style="height: 191px;" name="descripcion"></textarea>
                    </div>
                  
                </div>
                <div class="modal-footer">
                        @Auth
                        <button type="submit" class="btn btn-primary">{{ __('Comentar') }}</button>
                        @else
                        
                        <a href="{{ route('login') }}" class="btn btn-primary ">{{ __('Comentar') }}</a>
                        @endAuth
                </div>
              </form>
              </div>
            </div>
          </div>
          
        </div>
  </div>
</div>

        @else
    <div class="container mt-5 mb-5">
      <div class="d-flex justify-content-center row">
          <div class="col-md-8">
            @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p style="text-align: center">{{ $message }}</p>
                        </div>
                    @endif
              <div class="p-2">
                  <h4>Tus Comentarios</h4>
                  
              </div>
              @Auth
              
              @foreach ($comentarios as $comentario)
              <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded" style="text-align: center; height:auto;">
                  
                  <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$comentario->nombre_usuario}}</span>
                      <div class="d-flex flex-row product-desc">
                          <div class="size mr-1">{{$comentario->updated_at}}</div>
                          
                      </div>
                  </div>
                  <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                      <h6 class="asunto text-grey mt-1 mr-1 ml-1">{{$comentario->asunto}}</h6><i class="fa fa-plus text-success"></i></div>
                  <div>
                      <p class="comentario text-grey">{{$comentario->descripcion}}</p>
                  </div>
                  
                  <form class="" action="{{ route('comentarios.destroy',$comentario->id) }}" method="POST">
                    <a class="btn btn-sm btn-success" href="{{ route('comentarios.edit',$comentario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                </form> 
              </div>
              @endforeach
              @endAuth
              
              
              <div class="contenedor d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button type="button" class="btn " style="color: white;
                background-color: #1b7cb8;" data-bs-toggle="modal" data-bs-target="#exampleModal" >Añadir Comentario</button></div>
              
                
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      @Auth
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Inserta un comentario {{ Auth::user()->name }}.</h1>
                      @else
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Inserta un comentario.</h1>
                      @endAuth
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{ route('comentarios.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        @Auth
                        <input type="hidden" class="form-control" id="recipient-name" name="id_usuario" value="{{ Auth::user()->id }}">
                        <input type="hidden" class="form-control" id="recipient-name" name="nombre_usuario" value="{{ Auth::user()->name }}">
                        @endAuth
                        <div class="mb-3">
                         <label for="recipient-name" class="col-form-label">Asunto:</label>
                          <input maxlength="50" type="text" class="form-control" id="recipient-name" name="asunto" placeholder="asunto">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Descripcion:</label>
                          <textarea maxlength="150" class="form-control" id="message-text" style="height: 191px;" name="descripcion"></textarea>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                            @Auth
                            <button type="submit" class="btn btn-primary">{{ __('Comentar') }}</button>
                            @else
                            
                            <a href="{{ route('login') }}" class="btn btn-primary ">{{ __('Comentar') }}</a>
                            @endAuth
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              
            </div>
      </div>
  </div>
        @endif




</body>
    
    
    @endsection
