@extends('layouts.app')

@section('content')

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
   const btncompra = document.getElementById('boton');
   btncompra.disabled = true;
  });

$(document).ready(function(){
  const btncompra = document.getElementById('boton');
  const prueba =0;


  $("#password").blur(function(){
    var password1 = document.getElementById('password_confirmation');
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $resultp = $('#resultp');
if(password.value.match(passformat))
{
    $resultp.text('');
  if (password.value.match(passformat)&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}

    if (prueba==1) {
      prueba=1;
    }
//document.form1.text2.focus();
return true;
}
else
{
  if (password.value.match(passformat)&&email.value.match(mailformat)&&nombre.value.length>1&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
  
    $resultp.text('Contraseña no valida, necesitas una mayuscula un número y 8 caracteres.');
    $resultp.css('color', 'red');
//document.form1.text2.focus();
return false;
}

  });


  $("#password_confirmation").blur(function(){
    var password1 = document.getElementById('password_confirmation');
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $textcontraseña1 = $('#textcontraseña1');
if(password1.value==password.value)
{
    $textcontraseña1.text('');
  if (password.value.match(passformat)&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}

    if (prueba==1) {
      prueba=1;
    }
//document.form1.text2.focus();
return true;
}
else
{
    $textcontraseña1.text('No coincide con la anterior contraseña');
    $textcontraseña1.css('color', 'red');
  if (password.value.match(passformat)&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
  
    
//document.form1.text2.focus();
return false;
}

  });


  });</script>


<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{ URL::to('/img/DRSOUNDTRANS1.png') }}"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Somos el equipo Doble R Sound</h4>
                  </div>
  
                  <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row mb-4">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="disabledBoton form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <p id="resultp"></p>
                             {{-- @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror  --}}
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password_confirmation" type="password" class="form-control passwordconfirm" name="password_confirmation" required autocomplete="new-password">
                            <p id="textcontraseña1"></p>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button id="boton" type="submit" class="btn btn-primary">
                                {{ __('Restablecer Contraseña') }}
                            </button>
                        </div>
                    </div>
                </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Somos más que una empresa</h4>
                  <p class="small mb-0">En Doble R Sound os ofrecen una forma diferente de hacer las cosas. DR Sound se centra en ir más allá en cada evento, buscando la excelencia. Son un equipo de profesionales con el propósito de llevar vuestros eventos al más alto nivel y hacer de ellos días únicos e inolvidables. Para ello, cuentan con los mejores profesionales, con años de experiencia en el sector, que se encargarán de que vuestro evento sea tal y como lo habíais soñado.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
