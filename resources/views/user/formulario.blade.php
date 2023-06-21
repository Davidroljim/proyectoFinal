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
  

  $("#name").blur(function(){
    const nombre = document.getElementById('name');
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    const $resultn = $('#textnombre');
    
if(nombre.value.length>1)
{
  const prueba =1;
    $resultn.text('');
    if (email.value.match(mailformat)&&nombre.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (email.value.match(mailformat)&&nombre.value.length>1) {
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
    const nombre = document.getElementById('name');
    var nameformat = /^[a-zA-Z]{2,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $result = $('#textcorreo');
if(email.value.match(mailformat))
{
  const prueba =1;
    $result.text('');
    if (email.value.match(mailformat)&&nombre.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (email.value.match(mailformat)&&nombre.value.length>1) {
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



  });</script>

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
                    <input id="name" type="text" name="name" class="form-control "
                      placeholder="Ingresa tu nombre" value="{{ $user->name }}"/>
                      <p id="textnombre"></p>
                    
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control "
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
                    <button id="boton" type="submit" class="btn btn-primary">{{ __('Editar') }}</button>
                  </div>


                

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Somos más que una empresa</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>