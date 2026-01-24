<?php
require_once('header.php');
$error = $_GET['error'];

?>
<body class="text-center">
    <div class="mt-5 container d-flex justify-content-center ">
    <form class="form-signin" action="../app/functions/validarSesion.php" method="POST">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-5 font-weight-normal">Please sign in</h1>
        <label for="inputUsuario" class="sr-only">Usuario</label>
      <input name="username" type="text" id="inputUsuario" class="mt-2 form-control" placeholder="Email address" required="" autofocus="">
         <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="mt-2 form-control" placeholder="Password" required="">
      <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© geret - prueba técnica</p>
      <?php
      if($error){
        echo "<p>$error</p>";
      }
      ?>
    </form>
    </div>
    
</body>


