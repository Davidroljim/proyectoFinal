@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">

            <div class="col-md-12">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-danger">
                            <p style="text-align: center">{{ $message }}</p>
                        </div>
                        @endif
                    @includeif('partials.errors')

                
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            
                            @if ((Auth::user()->role=='admin'))
                            @include('user.form')
                            @else
                            @include('user.formulario')

                            @endif
                            

                        </form>
                    
                
            </div>
        </div>
    </section>
@endsection
