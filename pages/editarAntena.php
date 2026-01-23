<?php
$titleName = "Editar Antena";
require_once("header.php"); 
require_once ("./../app/models/antenas.php");
$id = $_GET['id'];

$antena = new Antenas();

?>

<h1>
    <?php
    echo $id;
    ?>
</h1>

<button>
    Cambiar estado
    <?php 
    $antena->updateAntena($id);
    ?>
</button>