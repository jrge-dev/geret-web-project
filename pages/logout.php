<?php
require_once("./header.php");
session_start()
?>

<div class="container">
<h2 class="text-center ">
    Bienvenido <span class="text-primary">
        <?php echo $_SESSION['admin'];?>
</span>
</h2>
<p class="text-center">Ya te encuentras logueado. Si deseas puedes cerrar tu sesión</p>

<div class=" d-flex justify-content-center">
<a type="button" href="../app/functions/cerrarSession.php" class="btn btn-danger col-2">Cerrar sesión</a>

</div>
</div>

