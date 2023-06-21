@extends('layouts.app')

@section('template_title')
    Alquilere
@endsection

@section('content')

<div class="container">
    <h1 class="mb-5" style="text-align: center;">Alquileres</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alquileres') }}
                            </span>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                        
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Usuario</th>
										<th>Id Equipo</th>
                                        <th>Precio</th>
										<th>F Inicio</th>
										<th>F Fin</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alquileres as $alquilere)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $alquilere->id_usuario }}</td>
											<td>{{ $alquilere->id_equipo }}</td>
                                            <td>{{ $alquilere->stock }}</td>
											<td>{{ $alquilere->f_inicio }}</td>
											<td>{{ $alquilere->f_fin }}</td>

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $alquileres->links() !!}
            </div>
        </div>
    </div>
</div>
    




@endsection
