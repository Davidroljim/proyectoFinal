@extends('layouts.app')

@section('template_title')
    Equipo
@endsection

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p style="text-align: center">{{ $message }}</p>
                        </div>
                    @endif
    <h1 class="mb-5" style="text-align: center;">Equipos</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alquilere') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('equipos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear equipos') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    
                        
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Caracteristicas</th>
										<th>Precio</th>
										<th>Fotos</th>
										<th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipos as $equipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $equipo->nombre }}</td>
											<td>{{ $equipo->caracteristicas }}</td>
											<td>{{ $equipo->precio }}</td>
											<td>{{ $equipo->fotos }}</td>
											<td>{{ $equipo->disponible }}</td>

                                            <td>
                                                <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
                                                   
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipos.edit',$equipo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $equipos->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
