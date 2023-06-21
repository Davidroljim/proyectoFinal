@extends('layouts.app')

@section('content')

<script src="/javascript.js"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
   const btncompra = document.getElementById('boton');
   btncompra.disabled = true;
  });

$(document).ready(function(){
  const btncompra = document.getElementById('boton');
  const prueba =0;
  $("#email").blur(function(){
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $result = $('#result');
if(email.value.match(mailformat))
{
  const prueba =1;
    $result.text('');
    if (password.value.match(passformat)&&email.value.match(mailformat)) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (password.value.match(passformat)&&email.value.match(mailformat)) {
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
  if (password.value.match(passformat)&&email.value.match(mailformat)) {
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
  if (password.value.match(passformat)&&email.value.match(mailformat)) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
  
    $resultp.text('Contraseña no valida');
    $resultp.css('color', 'red');
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
  
                  <form id="formulario" method="POST" action="{{ route('login') }}">
                    @csrf
                    <p>Por favor ingrese a su cuenta</p>
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Usuario</label>
                      <input id="email" type="email" name="email" class="form-control"
                        placeholder="Ingresa tu correo" />
                        <p id="result"></p>
                      
                    </div>
                    
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Contraseña</label>
                      <input type="password" id="password" name="password" class="form-control" 
                      placeholder="Ingresa tu contraseña"/>
                      <p id="resultp"></p>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button id="boton" class="btn btn-primary btn-block fa-lg " style="color: white;
                      background-color: #1b7cb8!important;" type="submit">Log
                        in</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">¿No tienes cuenta?</p>
                      <a type="button" class="btn btn-outline-danger" href="{{ route('register') }}">Registrate</a>
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
