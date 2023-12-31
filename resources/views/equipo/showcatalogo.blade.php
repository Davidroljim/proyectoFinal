@extends('layouts.app')

@section('template_title')
    Mostrar Equipo
@endsection

@section('content')
        @if ($message = Session::get('error'))
                        <div class="alert alert-danger ">
                            <p style="text-align: center">{{ $message }}</p>
                        </div>
            @endif
    <body class="antialiased">

        <br>
            <h3 style="text-align: center; color: #1b7cb8;">{{ $equipo->nombre }}</h3>
        <br>
        <div class="row" style=" width: 95%">

            <div style="text-align: center; padding: 0px!important" class="col-6">
                <img style=" width: 70%; border-radius: 20px;" src="{{ $equipo->fotos }}">
            </div>


            

            <div style="text-align: left; padding: 0px!important" class="col-4">
                <div  class="form-group ">
                    <h3 style="text-align:center; color: #1b7cb8;"><strong>Características</strong></h3><br>
                    {{ $equipo->caracteristicas }}
                </div>
                <h2 style="text-align: center; padding-top: 2rem; color: #1b7cb8;">{{ $equipo->precio }} €/Día</h2>


                
                
                

                

                <form method="POST" action="{{ route('carritos.storeC') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    

                    <div class="box box-info padding-1">
                        <div class="box-body">
                            @Auth
                            <div class="form-group">
                                <input type="hidden" name="id_usuario" value={{ Auth::user()->id }}>
                            </div>
                            @endAuth
                            <div class="form-group">
                                <input type="hidden" name="id_equipo" value={{ $equipo->id }}>
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="datepicker" width="276" placeholder="Fecha inicio" name="f_inicio" value="{{$fechas[0]}}"/>
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="datepicker1" width="276" placeholder="Fecha Final" name="f_fin" value="{{$fechas[1]}}"/>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="precio" value='{{ $equipo->precio }}'>
                            </div>
                    
                        </div>
                        <div class="box-footer mt20" style="text-align: center; padding-top: 2rem">
                            @Auth
                            @if(Auth::user()->role=='user')
                            <button type="submit" class="btn" style="background-color:#1b7cb8; color: white;">{{ __('Añadir al Carrito') }}</button>
                            @else
                            <button type="submit" disabled class="btn hidden" style="background-color:#1b7cb8; color: white;">{{ __('Añadir al Carrito') }}</button>
                            @endif
                            
                            @else
                            
                            <a href="{{ route('login') }}" class="btn " style="background-color:#1b7cb8; color: white;">{{ __('Añadir al Carrito') }}</a>
                            @endAuth
                           
                        </div>
                        <div id="block-reassurance">
                            
                                      
                                  <div >
                                    <img class="img-responsive ls-is-cached lazyloaded" data-src="https://sonicolor.es/modules/blockreassurance/img/reassurance-1-1.png" alt="Entrega en 24 horas" src="https://sonicolor.es/modules/blockreassurance/img/reassurance-1-1.png">
                                    <span class="h6">Entrega en 24 horas</span>
                                  </div>
                                
                                      
                                  <div >
                                    <img class="img-responsive ls-is-cached lazyloaded" data-src="https://sonicolor.es/modules/blockreassurance/img/reassurance-2-1.png" alt="14 días devolución" src="https://sonicolor.es/modules/blockreassurance/img/reassurance-2-1.png">
                                    <span class="h6">Devolución por Fallos</span>
                                  </div>
                                
                                      
                                  <div >
                                    <img class="img-responsive ls-is-cached lazyloaded" data-src="https://sonicolor.es/modules/blockreassurance/img/reassurance-3-1.png" alt="Pago seguro" src="https://sonicolor.es/modules/blockreassurance/img/reassurance-3-1.png">
                                    <span class="h6">Pago seguro</span>
                                  </div>
                                
                                      
                                  <div >
                                    <img class="img-responsive ls-is-cached lazyloaded" data-src="https://sonicolor.es/modules/blockreassurance/img/reassurance-4-1.png" alt="Garantía 3 años" src="https://sonicolor.es/modules/blockreassurance/img/reassurance-4-1.png">
                                    <span class="h6">Garantía de productos</span>
                                  </div>
                                
                                  
                          </div>
                    </div>

                </form>
               
            </div>
            
        </div>
        
    </body>
    @endsection
