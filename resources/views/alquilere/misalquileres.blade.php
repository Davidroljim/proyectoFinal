@extends('layouts.app')

@section('template_title')
    Mis alquileres
@endsection

@section('content')
    <body class="antialiased">
        <div class="container">

                      <br>
        @if($alquileres->isEmpty())
          
        <h2 style="text-align: center">No tienes ningún alquiler</h2>
        <h1 class="mb-5" style="text-align: center">Alquileres</h1>
        
        
            <h1 style="text-align: center">Parece que aún no alquilaste nada</h1>
        <p style="text-align: center">Agregue artículos a su carrito para alquilarlos.</p>
        <a href="{{route('catalogo')}}" class="btn  fw-bold p-3" style="width: 100%; min-width: 194px;font-size: 21px;margin-bottom: 15px color: white;
        background-color: #1b7cb8;">Seguir Alquilando</a>
         
        @else
        <h1 class="mb-5" style="text-align: center">Mis Alquileres</h1>
        <div class="album py-5 bg-light container">
            <div class="card-body">
              <div class="table-responsive">
                  <table id="myTable" class="table ">
                      <thead class="thead">
                          <tr>
                            <th>Foto</th>
                              <th>Nombre equipo</th>
                              <th>Precio</th>
                              <th>F Inicio</th>
                              <th>F Fin</th>  
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($alquileres as $alquilere)
                              <tr>
                                  <td><img class="bd-placeholder-img" width="40%" height="40%" src="{{ $alquilere->equipo["fotos"] }}" aria-hidden="true"
                                    focusable="false" style="object-fit: cover;"></td>
                                  <td>{{ $alquilere->equipo["nombre"] }}</td>
                                  <td>{{ $alquilere->equipo["precio"] }}</td>
                                  <td>{{ $alquilere->f_inicio }}</td>
                                  <td>{{ $alquilere->f_fin }}</td>

                                  
                                       {{-- <form action="{{ route('alquileres.destroy',$alquilere->id) }}" method="POST">
                                          <a class="btn btn-sm btn-primary " href="{{ route('alquileres.show',$alquilere->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                          <a class="btn btn-sm btn-success" href="{{ route('alquileres.edit',$alquilere->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                      </form>  --}}
                                  
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
        </div>

        @endif
                        

                    
                

        
        


        
    </body>
    @endsection

