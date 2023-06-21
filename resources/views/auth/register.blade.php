@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
   const btncompra = document.getElementById('myButton');
   btncompra.disabled = true;
  });


  function recargar(){
    const myButton = document.getElementById('myButton');

    $("#nombre").blur(function(){
    
    const $textnombre = $('#textnombre');
if(nombre.value.length>1)
{
    myButton.style.opacity = 1;
        myButton.disabled = false;
    $textnombre.text('');
//document.form1.text1.focus();
return true;
}
else
{
    myButton.disabled = true;
    myButton.style.opacity = 0.7;
    $textnombre.text('Introduce tu nombre');
    $textnombre.css('color', 'red');
//document.form1.text1.focus();
return false;
}
  });
  
  $("#email").blur(function(){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $textcorreo = $('#textcorreo');
if(email.value.match(mailformat))
{
    myButton.style.opacity = 1;
        myButton.disabled = false;
    $textcorreo.text('');
//document.form1.text1.focus();
return true;
}
else
{
    myButton.disabled = true;
    myButton.style.opacity = 0.7;
    $textcorreo.text('No es valido este correo');
    $textcorreo.css('color', 'red');
//document.form1.text1.focus();
return false;
}
  });




  $("#password").blur(function(){
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    const $textcontraseña = $('#textcontraseña');
if(password.value.match(passformat))
{
    myButton.style.opacity = 1;
        myButton.disabled = false;
$textcontraseña.text('');
    
//document.form1.text2.focus();
return true;
}
else
{
    myButton.disabled = true;
    myButton.style.opacity = 0.7;
    $textcontraseña.text('Contraseña no valida debe tener 8 caracteres como mínimo introduce al menos un signo de puntuación un número y una mayúscula');
    $textcontraseña.css('color', 'red');
//document.form1.text2.focus();
return false;
}
  });

  $("#password1").blur(function(){
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    const $textcontraseña1 = $('#textcontraseña1');
if(password1.value==password.value)
{
    myButton.style.opacity = 1;
        myButton.disabled = false;
$textcontraseña1.text('');
    
//document.form1.text2.focus();
return true;
}
else
{
    myButton.disabled = true;
    myButton.style.opacity = 0.7;
    $textcontraseña1.text('Contraseña no valida, introduce la misma contraseña');
    $textcontraseña1.css('color', 'red');
//document.form1.text2.focus();
return false;
}
  });

  

  };</script> --}}

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
   const btncompra = document.getElementById('boton');
   btncompra.disabled = true;
  });

$(document).ready(function(){
  const btncompra = document.getElementById('boton');
  const prueba =0;

  $("#nombre").blur(function(){
    
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    const $resultn = $('#textnombre');
    
if(nombre.value.length>1)
{
  const prueba =1;
    $resultn.text('');
    if (password.value.match(passformat)&&email.value.match(mailformat)&&nombre.value.length>1&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (password.value.match(passformat)&&email.value.match(mailformat)&&nombre.value.length>1&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
    $resultn.text('Introduce tu nombre');
    $resultn.css('color', 'red');
//document.form1.text1.focus();
return false;
}

  });



  $("#email").blur(function(){
    
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $result = $('#textcorreo');
    
if(email.value.match(mailformat))
{
  const prueba =1;
    $result.text('');
    if (password.value.match(passformat)&&email.value.match(mailformat)&&nombre.value.length>1&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (password.value.match(passformat)&&email.value.match(mailformat)&&nombre.value.length>1&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
    $result.text('No es valido este correo');
    $result.css('color', 'red');
//document.form1.text1.focus();
return false;
}

  });




  $("#password").blur(function(){
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $resultp = $('#resultp');
if(password.value.match(passformat))
{
  if (password.value.match(passformat)&&email.value.match(mailformat)&&nombre.value.length>1&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
$resultp.text('');
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


  $("#password1").blur(function(){
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $textcontraseña1 = $('#textcontraseña1');
if(password1.value==password.value)
{
  if (password.value.match(passformat)&&email.value.match(mailformat)&&nombre.value.length>1&&password1.value==password.value) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
$textcontraseña1.text('');
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
  
    $textcontraseña1.text('No coincide con la anterior contraseña');
    $textcontraseña1.css('color', 'red');
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
                    <h4 class="mt-1 mb-5 pb-1">Somos el equido Doble R Sound</h4>
                  </div>
  
                  <form id="formulario" method="POST" action="{{ route('register') }}">
                    @csrf
                    <p>Por favor registrese</p>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="nombre">Nombre</label>
                      <input id="nombre" type="text" name="name" class="form-control"
                        placeholder="Ingresa tu nombre" />
                        <p id="textnombre"></p>
                      
                    </div>
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Correo</label>
                      <input id="email" type="email" name="email" class="form-control"
                        placeholder="Ingresa tu correo" />
                        <p id="textcorreo"></p>
                      
                    </div>
                    
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Contraseña</label>
                      <input type="password" id="password" name="password" class="form-control" 
                      placeholder="Ingresa tu contraseña"/>
                      <p id="resultp"></p>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Confirmar Contraseña</label>
                      <input type="password" id="password1" name="password_confirmation" class="form-control" 
                      placeholder="Vuelve a ingresar tu contraseña"/>
                      <p id="textcontraseña1"></p>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button id="boton" class="btn btn-primary btn-block fa-lg  mb-3" style="color: white #1b7cb8; background-color: #1b7cb8!important;" onsubmit="return enviar();" type="submit">Registrarse</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">¿Tienes cuenta?</p>
                      <a type="button" class="btn btn-outline-danger" href="{{ route('login') }}">Inicia Sesión</a>
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
