<!-- Ventana Modal Iniciar sesion -->
<div id="iniciarSesion" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">
        <svg width="30" height="30">
	        <line x1="0" y1="0" x2="30" y2="30" style="stroke:rgb(200,200,200);stroke-width:1"></line>
          <line x1="0" y1="30" x2="30" y2="0" style="stroke:rgb(200,200,200);stroke-width:1"></line>
        </svg>
      </span>
    </div>
    <div class="modal-body">
      <h4>Inicio de Sesión</h4>
      <form name="inicia-sesion" action="sesion.php" method="post">
        <div class="row">
          <div class="twelve columns">
            <label for="usuario">Usuario</label>
            <input type="text" name="txtusuario" maxlength="12" placeholder="Ingrese su nombre de usuario" value="">
            <br>
            <label for="password">Contraseña</label>
            <input type='password' name='txtclave' maxlength='12' placeholder='Ingrese su contraseña' id='txtclave' value=''>
            <br>
            <input type='submit' name='BtnEnviar' id='BtnEnviar' class='btn btn-azul' value='Iniciar Sesión'>
       </form>
            <a href="#" style="margin-top:1rem;">¿Ha olvidado su usuario o contraseña?</a>
            <hr>
            <button class="btn btn-success"><a href="#">Registrarse</a></button>
          </div>
        </div>

    </div>
    <div class="modal-footer"></div>
  </div>
</div>
