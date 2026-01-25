<?php
require_once('header.php');
$error = $_GET['error'];
session_start();
if (isset($_SESSION['admin'])) {
  header("Location: ./logout.php");
}

?>

<body class="text-center">
  <div class="mt-5 container d-flex justify-content-center ">
    <form class="form-signin" action="../app/functions/validarSesion.php" method="POST">
      <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-person-circle mb-4" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
      </svg>
      <h1 class="h3 mb-5 font-weight-normal text-primary">Iniciar sesión</h1>
      <label for="inputUsuario" class="sr-only">Usuario</label>
      <input name="username" type="text" id="inputUsuario" class="mt-2 form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="mt-2 form-control" placeholder="Password" required="">
      <button class="mt-3 mb-3 btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
      <?php
      if ($error) {
        echo "<p class='fs-6 text-danger'>$error</p>";
      }
      ?>
      <p class="mt-5 mb-3 text-muted">© geret - prueba técnica</p>

    </form>
  </div>

</body>