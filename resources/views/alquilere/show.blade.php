@extends('layouts.app')

@section('template_title')
    {{ $alquilere->name ?? "{{ __('Show') Alquilere" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Alquilere</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alquileres.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $alquilere->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Equipo:</strong>
                            {{ $alquilere->id_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>F Inicio:</strong>
                            {{ $alquilere->f_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>F Fin:</strong>
                            {{ $alquilere->f_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
