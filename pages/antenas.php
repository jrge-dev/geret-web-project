<?php
require_once "../app/models/antenas.php";
$titleName = "Antenas - Sitio Web";

session_start();
if (!isset($_SESSION['admin'])) {
  header("Location:./login.php");
  exit();
}

require_once("header.php")


?>
<div class="container d-flex flex-column">
<div class="d-flex justify-content-between align-items-center w-100">
  <h1 class="text-primary mt-5 mb-5">Listado de antenas</h1>
  <a href="agregarAntena.php" class="btn btn-success">+ Agregar antena</a>
</div>
  
  <table class="table table-responsive align-middle  table-borderless">

    <thead class="table-light">
      <tr class="">
        <th scope="col">Código antena</th>
        <th scope="col">Ip</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
      </tr>

    </thead>
    <tbody>

      <?php
      $antenas = new Antenas();
      $getAntenas = $antenas->getAntenas();

      foreach ($getAntenas as $row): ?>
        <tr>
          <td><b><?= $row['codigo_antena'] ?> </b> </td>
          <td><?= $row['ip'] ?></td>
          <td><?= $row['estado'] ?></td>
          <td>
            <?php
            $id = $row['id'];  
            echo " <a href='/geret/web/pages/editarAntena.php?id=$id' class='btn btn-primary'> Editar </a>";

            ?>
          </td>

        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>

</div>
