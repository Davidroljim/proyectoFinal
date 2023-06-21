@extends('layouts.app')

@section('template_title')
    Equipo
@endsection

@section('content')

    
    @if ($message = Session::get('succes'))
                        <div class="alert alert-danger ">
                            <p style="text-align: center">{{ $message }}</p>
                        </div>
            @endif
            
    <body class="antialiased">
      <div id="myCarousel" class=" carousel slide" data-bs-ride="carousel" style="align-content: center; width: 100%;  margin: 0 auto";>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="bd-placeholder-img" width="100%" height="80%" src="{{ URL::to('/img/montaje2.jpeg') }}" aria-hidden="true"
              focusable="false" style="object-fit: cover;">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1 class="fw-bold">Gran variedad de equipos</h1>
                <p class="fw-normal">Alquila y personaliza tu fiesta a tu gusto</p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="80%" src="{{ URL::to('/img/montaje3.jpeg') }}" aria-hidden="true"
              focusable="false" style="object-fit: cover;">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="fw-bold">Bastantes años en el sector</h1>
                <p class="fw-normal">Tenemos bastante experiencia en bodas comuniones y fiestas privadas</p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="80%" src="{{ URL::to('/img/montaje5.JPG') }}" aria-hidden="true"
              focusable="false" style="object-fit: cover;">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1 class="fw-bold">Confía en nosotros</h1>
                <p class="fw-normal">Haremos de tu fiesta un día inolvidable</p>
                
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
      <div >
      

      

    {{-- <div style="align-content: center; width: 50%;  margin: 0 auto; ">
      <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div  class="carousel-inner ">
          <div class="carousel-item active">
            <img  src="{{ URL::to('/img/montaje2.jpeg') }}" class="d-block w-100 " alt="...">
          </div>
          <div class="carousel-item">
            <img  src="{{ URL::to('/img/montaje3.jpeg') }}" class="d-block w-100 " alt="...">
          </div>
           <div class="carousel-item">
            <img src="{{ URL::to('/img/montaje5.jpeg') }}" class="d-block w-100" alt="...">
          </div> 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </div> --}}



    <div class="container mt-5 mb-5" style="width: 99%">
      <div class="d-flex justify-content-center row">
          <div class="col-md-8">
              <div class="p-2">
                  <h4>Comentarios</h4>
                  
              </div>
              <div class="row">
              @foreach ($comentarios as $comentario)
              
              <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded" style="text-align: center">
                  <div class="col-2">
                  <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$comentario->nombre_usuario}}</span>
                      <div class="d-flex flex-row product-desc">
                          <div class="size mr-1">{{$comentario->updated_at}}</div>
                          
                      </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                      <h6 class="asunto text-grey mt-1 mr-1 ml-1" style="text-align: center">{{$comentario->asunto}}</h6><i class="fa fa-plus text-success"></i>
                    </div>
                </div>
                <div class="col-7">
                  <div>
                      <p class="comentario text-grey" style="text-align: left">{{$comentario->descripcion}}</p>
                  </div>
                  
                </div>
              </div>
              @endforeach
              
              
              <div class=" contenedor d-flex flex-row align-items-center mt-3 p-2  rounded"><button type="button" class="btn" style="background-color:#1b7cb8; color: white; " data-bs-toggle="modal" data-bs-target="#exampleModal" >Añadir Comentario</button></div>
              
                
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      @Auth
                      <h1  class="modal-title fs-5" id="exampleModalLabel">Inserta un comentario {{ Auth::user()->name }}.</h1>
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
                          <input type="text" class="form-control" id="recipient-name" name="asunto" placeholder="asunto">
                        </div>
                        <div class="mb-3">
                          <label maxlength="20" for="message-text" class="col-form-label">Descripcion:</label>
                          <textarea maxlength="30" class="comentario form-control" id="message-text" style="height: 191px;" name="descripcion"></textarea>
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
  
</div>
    
    
    @endsection
    
