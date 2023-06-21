@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? "{{ __('Show') Equipo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $equipo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Caracteristicas:</strong>
                            {{ $equipo->caracteristicas }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $equipo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Fotos:</strong>
                            {{ $equipo->fotos }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $equipo->disponible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
