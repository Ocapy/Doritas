
  <?php include('html/overall/header.html'); ?>
    <div class="backimg">

    </div>
    <div class="login" rol="form" onkeypress='return pulseEnter(event)'>
      <img src="view/img/coca.svg" alt="" class="logolog"/>
      <input type="text" id="user" placeholder="Cuenta"/>
      <input type="password" id="pass" placeholder="Contraseña"/>
      <input type="checkbox" id="rename"> Recordarme
      <button rol="button" id="login" onclick="goLogin()">Iniciar <i class="fa fa-sign-in"></i></button>
      <a href="?view=registro">Registrar!</a>

      <div id='_AJAX_LOGIN_'>
        <!-- <span class="alertInfo">
          <p>
            <i class="fa fa-exclamation"></i> <strong>Error:</strong> Ocurrio un error.
            <i class="fa fa-exclamation-triangle"></i> <strong>Warning:</strong> Espere...
            <i class="fa fa-check"></i> <strong>Success:</strong> Bienvenido.
            <i class="fa fa-spinner fa-pulse"></i> <strong>Cargando...</strong>
          </p>
        </span> -->
      </div>
    </div>
    <script src='view/js/login.js'>

    </script>

  <?php include("html/overall/footer.php"); ?>
