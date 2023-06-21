@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Comentario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="contenedor">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class=" card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Comentario</span>
                    </div>
                    <div class=" card-body">
                        <form method="POST" action="{{ route('comentarios.update', $comentario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <style>
                                .hidden { display: none; }
                            </style>
                            <div class=" box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class=" form-group hidden">
                                        {{ Form::label('id_usuario') }}
                                        {{ Form::text('id_usuario', $comentario->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
                                        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group hidden">
                                        {{ Form::label('nombre_usuario') }}
                                        {{ Form::text('nombre_usuario', $comentario->nombre_usuario, ['class' => 'form-control' . ($errors->has('nombre_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
                                        {!! $errors->first('nombre_usuario', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    
                                        {{ Form::label('asunto') }}
                                        {{ Form::text('asunto', $comentario->asunto, ['class' => 'form-control' . ($errors->has('asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto']) }}
                                        {!! $errors->first('asunto', '<div class="invalid-feedback">:message</div>') !!}
                                    
                                    
                                        {{ Form::label('descripcion') }}
                                        {{ Form::text('descripcion', $comentario->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
                                    
                            
                                </div>
                                
                                <div class="contenedor box-footer mt20">
                                    <button type="submit" class="btn btn-primary">{{ __('Editar') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
