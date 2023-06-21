@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')


{{-- <script src="/javascript.js"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
   const btncompra = document.getElementById('boton');
   btncompra.disabled = true;
   const inputrole = document.getElementById('role');
   inputrole.disabled = true;
  });

$(document).ready(function(){
  const btncompra = document.getElementById('boton');
  const prueba =0;

  $("#name").blur(function(){
    
    const name = document.getElementById('name');
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    const $resultn = $('#textnombre');
    console.log($resultn);
if(name.value.length>1)
{
  const prueba =1;
    $resultn.text('');
    if (email.value.match(mailformat)&&name.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (email.value.match(mailformat)&&name.value.length>1) {
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
    
    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $result = $('#textcorreo');
if(email.value.match(mailformat))
{
  const prueba =1;
    $result.text('');
    if (email.value.match(mailformat)&&name.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (email.value.match(mailformat)&&name.value.length>1) {
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

  });</script> --}}
 


 <section class="h-100 gradient-form" >
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
                    <h4 class="mt-1 mb-5 pb-1">Tu perfil {{Auth::user()->name}}</h4>
                  </div>
  
                  
                    @csrf
                    
                    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Nombre</label>
                      <input id="name" type="text" name="name" class="form-control disabledBoton"
                        placeholder="" value="{{ $user->name }}"/>
                        <p id="textnombre"></p>
                      
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                      <input id="email" type="email" name="email" class="form-control disabledBoton"
                        placeholder="Ingresa tu correo" value="{{ $user->email }}"/>
                        <p id="textcorreo"></p>
                      
                    </div>
                    
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="role">Role</label>
                      <input type="role" id="role" name="role" class="form-control disabledBoton" 
                      placeholder="" value="{{ $user->role }}"/>
                      <p id=""></p>
                    </div>
                    <input type="hidden" id="password" name="password" class="form-control" 
                      placeholder="" value="{{ $user->password }}"/>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                        <a class="btn btn-sm btn-success" style="color: white #1b7cb8; background-color: #1b7cb8!important;" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw"></i> {{ __('Editar Datos') }}</a>
                      
                        <a class="btn btn-sm btn-danger" href="{{ route('logout') }}" class="nav-link pl-4"
                           onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><strong>Cerrar Sesión</strong></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
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