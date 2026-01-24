<?php
require_once "../app/models/antenas.php";
$titleName = "Antenas - Sitio Web";

session_start();
if(!isset($_SESSION['admin'])){
  header("Location:./login.php");
  exit();
}

require_once("header.php")


?>
<div class="container">
<h1 class="text-center mt-5">Listado de antenas</h1>

<table class="table">

<thead>
  <tr>
    <th>Código antena</th>
    <th>Ip</th>
    <th>Estado</th>
    <th>Acciones</th>
  </tr>

</thead>
<tbody>
  
    <?php 
$antenas = new Antenas();
$getAntenas = $antenas->getAntenas();

foreach ($getAntenas as $row): ?>
  <tr>
    <td><?= $row['codigo_antena'] ?> </td>
    <td><?= $row['ip'] ?></td>
    <td><?= $row['estado'] ?></td> 
    <td>
      <?php 
      $id = $row['id'];
      $codigo = $row['codigo_antena'];
      $estado = $row['estado'];
        echo " <a href='/web/pages/editarAntena.php?codigo=$codigo&id=$id&estado=$estado' class='btn btn-primary'> Editar </a>";

       ?>
    </td>

  </tr>
    
<?php endforeach; ?>
</tbody>
</table>

</div>
