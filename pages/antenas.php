<?php
require_once "../app/models/antenas.php";
$titleName = "Antenas - Sitio Web";
require_once("header.php")

?>
<div class="container">
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
    <td><button type="button" class="btn btn-primary">Editar</button></td>

  </tr>
    <br>
    
    <?php $row?>
<?php endforeach; ?>
</tbody>
</table>

</div>
