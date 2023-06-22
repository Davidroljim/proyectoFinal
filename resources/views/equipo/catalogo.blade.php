@extends('layouts.app')

@section('template_title')
    Catalogo
@endsection

@section('content')
    
<link href="/catalogoestilos.css" rel="stylesheet">

      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script>
 $(document).ready(function(){
   const btncompra = document.getElementById('boton');
   btncompra.disabled = true;
  });


function recargar(){
    var formatdate=/^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
    var fechainicial = document.getElementById("datepicker").value;
    var fechafinal = document.getElementById("datepicker1").value;
    var formulario = document.getElementById("myform");
    const btncompra = document.getElementById('boton');
    const $result = $('#result');
    var first = new Date(fechainicial);
    var second = new Date(fechafinal);
    const fecha = new Date();
    
    if(datepicker1.value.match(formatdate) && datepicker.value.match(formatdate))
    {
      if (first < fecha ||second < fecha) {
        $result.text('La fecha seleccionada no puede ser anterior a la fecha actual');
        $result.css('color', 'red');
        btncompra.disabled = true;
        return false;
        
      }else if(first > second){
        $result.text('La fecha final no puede ser anterior a la fecha inicio');
        $result.css('color', 'red');
        btncompra.disabled = true;
        return false;
     
      }else if(first < second){
        
        $result.text('');
        btncompra.disabled = false;
        return true;
        
      }else if(first > fecha && second > fecha){
        
        $result.text('');
        btncompra.disabled = false;
        return true;
        
      }else{
        $result.text('');
        btncompra.disabled = false;
        return true;
      }
       
    //document.form1.text1.focus();
    
    }
    else
    {
      btncompra.disabled = true;
        $result.text('Introduce las dos fechas con el Formato del calendario');
        $result.css('color', 'red');
    //document.form1.text1.focus();
    return false;
    }
  };
    
    </script>

          <p style="padding-top: 1.0rem !important; display: flex; justify-content: center;" id="result"></p>
          <div class="contenedor">
          
                      
          
          <form id="myform" method="POST" action="{{ route('catalogoFilter') }}" class="formulario" role="form" enctype="multipart/form-data">
            @csrf
            
            <div class="box box-info padding-1 " >
                <div class="box-body">
                   
                    <input id="datepicker" width="276" placeholder="Fecha inicio" onChange="javascript:recargar();" name="fecha_inicio" min="2023-05-31"/>
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap5'
                        });
                    </script>
                    
                    <input id="datepicker1" width="276" placeholder="Fecha Final" onChange="javascript:recargar();" name="fecha_fin"/>
                    <script>
                        $('#datepicker1').datepicker({
                            uiLibrary: 'bootstrap5'
                        });
                    </script> 
                    
                    {{-- <div class="form-group">
                      <label class="form-label" for="disponible">Tipo de producto</label>
                          <select id="disponible" name="disponible" class="form-select form-select-sm" aria-label=".form-select-sm example">
                              <option selected value=5>Todos</option>
                              <option value=0>Sonido</option>
                              <option value=1>Iluminación</option>
                              <option value=2>Accesorios</option>
                          </select>   
                  </div> --}}
            
                </div>
                
                <div class=" box-footer mt20" style="padding-top: 1.0rem !important; display: flex; justify-content: center;">
                    
                    <button id="boton"type="submit" onsubmit="return enviar();" class="btn btn-primary ">{{ __('Comprobar Disponibilidad') }}</button>
                    
                </div>
            </div>

        </form>
      </div>


          <div class="contenedor album py-5 bg-light" style="background-color: #eee!important;">
            
            <div class="container" style="background-color: #eee;">
        
              
                @if ($_SERVER['REQUEST_METHOD']=='POST')
                 
                <h3 style="text-align: center">Productos disponibles entre el {{$fechas[0]}} y el {{$fechas[1]}}</h3>
                <br>
                @php
                          //  $disponible=  (int)$disponible;
                            //  var_dump($disponible);
                              
                        @endphp
                <div class=" row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($equipos as $equipo)
                        @php
                            $bandera=false;
                            // var_dump($equipo->disponible);
                        @endphp

                          @foreach($equipoSinStock as $sinStock)


                          @if ($sinStock == $equipo->id )
                          @php
                              $bandera=true;
                          @endphp
                          @endif

                      @endforeach

                          @if($bandera==false)
                          <div class="col" style="align-items: center!important; display: flex!important; justify-content: center!important;">
                            {{-- <div class="card text-center shadow-sm">

                              <img  src="{{ $equipo->fotos }}" class="bd-placeholder-img card-img-top" width="100%" height="300" role="img" alt="...">
                              <div class="card-body">
                                <p class="card-text">{{ $equipo->nombre }}</p>
                                <h4 class="card-title pricing-card-title">{{ $equipo->precio }} <small class="text-muted"> €/ Día</small></h4> --}}

                                {{-- <form action="{{ route('carrito.crear') }}" method="POST">
                                  <input type="hidden" name="fecha_inicio" value={{$fechas[0]}}>
                                  <input type="hidden" name="fecha_fin" value={{$fechas[1]}}>
                                  <input type="hidden" name="id_equipo" value={{$equipo->id}}>
                                  <button type="submit" style="background-color:white;border:none;color: red;font-weight: 700;text-decoration: none;font-size: 20px"><i class="fa fa-fw fa-trash"></i> Añadir al Carrito</button>
                                </form> --}}
                                <div class="maincontainer contenedor">
                              
                                  <div class="back" style="border-radius: 5px;">
                                    
                                      <h2>{{ $equipo->nombre }}</h2>
                                      
                                      
                                      <h4 class="card-title pricing-card-title">{{ $equipo->precio }}  €/ Día</h4>
                                      <form method="POST" action="{{ route('carrito.crear') }}"  role="form" enctype="multipart/form-data">
                                        @csrf
                                      <div class="box box-info padding-1" >
                                        <div class="box-body" >
                                            
                                            <div class="form-group">
                                              <input type="hidden" name="fecha_inicio" value={{$fechas[0]}}>
                                            </div>
                                            <div class="form-group">
                                              <input type="hidden" name="fecha_fin" value={{$fechas[1]}}>
                                            </div>
                                            <div class="form-group">
                                              <input type="hidden" name="id_equipo" value={{$equipo->id}}>
                                            </div>
                                    
                                        </div>
                                        <div class="divboton box-footer mt20">
                                            <button type="submit" class="btn btn-primary">{{ __('Alquilar') }}</button>
                                        </div>
                                    </div>
                                      </form>
                                    
                                    
                                    </div>
                                  <div class="front">
                                      <div class="image">
                                      <img src="{{ $equipo->fotos }}" style="border-radius: 5px!important;" class="botonCard bd-placeholder-img card-img-top" width="300" height="300" role="img" alt="...">
                                     
                                      </div>
                                      
                                  </div>
                              
                                {{-- <form method="POST" action="{{ route('carrito.crear') }}"  role="form" enctype="multipart/form-data">
                                  @csrf
                                <div class="box box-info padding-1">
                                  <div class="box-body">
                                      
                                      <div class="form-group">
                                        <input type="hidden" name="fecha_inicio" value={{$fechas[0]}}>
                                      </div>
                                      <div class="form-group">
                                        <input type="hidden" name="fecha_fin" value={{$fechas[1]}}>
                                      </div>
                                      <div class="form-group">
                                        <input type="hidden" name="id_equipo" value={{$equipo->id}}>
                                      </div>
                              
                                  </div>
                                  <div class="box-footer mt20">
                                      <button type="submit" class="btn btn-primary">{{ __('Alquilar') }}</button>
                                  </div>
                              </div>
                                </form> --}}
                                </div>
                            
                              {{-- </div> --}}
                            {{-- </div> --}}
                          {{-- </div> --}}
                          </div>
                          @endif

                        @endforeach
                        </div>
                @else
                
                <div class="alert alert-danger ptexto" role="alert">
                  Indica alguna fecha para mostrarte los productos disponibles
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($equipos as $equipo)
                         <div class="col" style="align-items: center!important; display: flex!important; justify-content: center!important;">
                          {{-- <div class="card text-center shadow-sm">

                            <img  src="{{ $equipo->fotos }}" class="bd-placeholder-img card-img-top" width="100%" height="300" role="img" alt="...">
                            <div class="card-body">
                              <p class="card-text">{{ $equipo->nombre }}</p>
                              <h4 class="card-title pricing-card-title">{{ $equipo->precio }} <small class="text-muted"> €/ Día</small></h4>

                              <a href="{{ route('carrito.crear',$equipo->id) }}" class="btn btn-lg btn-block btn-outline-primary disabled">Alquilar</a>
                              <p>Inicia sesión para poder acceder al alquiler de equipos.</p>

                            </div>
                          </div> --}}
                          
                          
                            
                            <div class="maincontainer contenedor">
                              
                                <div class="back" style="border-radius: 5px;">
                                  <a class="disabled" href="{{ route('carrito.crear',$equipo->id) }}" >
  
                                    <h2>{{ $equipo->nombre }}</h2>
                                    
                                    
                                    <h4 class="card-title pricing-card-title">{{ $equipo->precio }}  €/ Día</h4>
                                  </a>
                                  
                                  </div>
                                <div class="front" >
                                    <div class="image">
                                    <img src="{{ $equipo->fotos }}" style="border-radius: 5px!important;" class="botonCard bd-placeholder-img card-img-top" width="300" height="300" role="img" alt="...">
                                   
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                      
                    
                        
                        @endforeach

                @endif

                       </div>
                            </div>
                          

                
                    </tbody>
                </table>

        </div>
        
    
    @endsection

