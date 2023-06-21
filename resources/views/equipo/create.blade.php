@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Equipo
@endsection

@section('content')
<div class="container">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Equipo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('equipos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        {{ Form::label('nombre') }}
                                        {{ Form::text('nombre', $equipo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('caracteristicas') }}
                                        {{ Form::text('caracteristicas', $equipo->caracteristicas, ['class' => 'form-control' . ($errors->has('caracteristicas') ? ' is-invalid' : ''), 'placeholder' => 'Caracteristicas']) }}
                                        {!! $errors->first('caracteristicas', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('precio') }}
                                        {{ Form::number('precio', $equipo->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
                                        {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('fotos') }}
                                        {{ Form::text('fotos', $equipo->fotos, ['class' => 'form-control' . ($errors->has('fotos') ? ' is-invalid' : ''), 'placeholder' => 'Fotos']) }}
                                        {!! $errors->first('fotos', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="disponible">Tipo</label>
                                            <select id="disponible" name="disponible" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value=0>Sonido</option>
                                                <option value=1>Iluminación</option>
                                                <option value=2>Accesorios</option>
                                            </select>   
                                    </div>
                            
                                </div>
                                <div class="contenedor box-footer mt20">
                                    <button type="submit" class="btn btn-primary">{{ __('Crear Equipo') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
