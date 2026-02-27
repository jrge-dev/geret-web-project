
<?php
require_once('header.php');
$error = $_GET['error'];
session_start();
if(isset($_SESSION['admin'])){
  header("Location: ./logout.php");
}
?>
<body class="text-center">
    <div class="mt-5 container d-flex justify-content-center ">
    <form class="form-signin" action="../app/functions/validarSesion.php" method="POST">
      <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
      </svg>
     <h1 class="h3 mb-5 font-weight-normal">Inice sesión</h1>
        <label for="inputUsuario" class="sr-only">Usuario</label>
      <input name="username" type="text" id="inputUsuario" class="mt-2 form-control" placeholder="Correo electrónico" required="" autofocus="">
         <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="mt-2 form-control" placeholder="Contraseña" required="">
      <button class="mt-3 mb-3 btn btn-lg btn-primary btn-block" type="submit">Confirmar</button>
      <?php
      if($error){
        echo "<p class='fs-6 text-danger'>$error</p>";
      }
      ?>
      <p class="mt-5 mb-3 text-muted">© geret - prueba técnica</p>
      
    </form>
    </div>
    
</body>


