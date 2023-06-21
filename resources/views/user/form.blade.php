{{-- <div class="box box-info padding-1" style="width: 50%">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('role') }}
            {{ Form::text('role', $user->role, ['class' => 'form-control' . ($errors->has('role') ? ' is-invalid' : ''), 'placeholder' => 'Role']) }}
            {!! $errors->first('role', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
 --}}
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
    const role = document.getElementById('role');
    const nombre = document.getElementById('name');
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    const $resultn = $('#textnombre');
    
if(nombre.value.length>1)
{
  const prueba =1;
    $resultn.text('');
    if (email.value.match(mailformat)&&nombre.value.length>1&&role.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (email.value.match(mailformat)&&nombre.value.length>1&&role.value.length>1) {
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
    const role = document.getElementById('role');
    const nombre = document.getElementById('name');
    var nameformat = /^[a-zA-Z]{2,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const $result = $('#textcorreo');
if(email.value.match(mailformat))
{
  const prueba =1;
    $result.text('');
    if (email.value.match(mailformat)&&nombre.value.length>1&&role.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (email.value.match(mailformat)&&nombre.value.length>1&&role.value.length>1) {
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

  $("#role").blur(function(){
    const nombre = document.getElementById('name');
    const role = document.getElementById('role');
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    const $role = $('#textrole');
    
if(role.value.length>1)
{
  const prueba =1;
    $role.text('');
    if (email.value.match(mailformat)&&nombre.value.length>1&&role.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
//document.form1.text1.focus();
return true;
}
else
{
  if (email.value.match(mailformat)&&nombre.value.length>1&&role.value.length>1) {
  btncompra.disabled = false;
}else{
  btncompra.disabled = true;
}
    $role.text('Introduce tu nombre');
    $role.css('color', 'red');
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
                  <h4 class="mt-1 mb-5 pb-1">Modificar Perfil</h4>
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
                    <select id="role" name="role" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>{{ $user->role }}</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <p id="textrole"></p>
                      
                  </div>
                  <input type="hidden" id="password" name="password" class="form-control" 
                    placeholder="" value="{{ $user->password }}"/>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button id="boton" type="submit" class="btn btn-primary">{{ __('Editar') }}</button>
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
