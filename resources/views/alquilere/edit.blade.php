@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Alquilere
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Alquilere</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('alquileres.update', $alquilere->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('alquilere.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
