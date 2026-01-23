<?php
$titleName = "Editar Antena";
require_once("header.php"); 
require_once ("./../app/models/antenas.php");
$id = $_GET['id'];

$antena = new Antenas();

#Verifica si se envió el form. Envia alerta y redirige
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $estado = $_POST['cambio-estado'];
    $antena->updateAntena($id,$estado);
    echo "<script>
    alert('estado actualizado');
    
    </script>";
    
}

?>

<h1>
    <?php
    echo $id;
    ?>
</h1>

<form method="POST">
    <select name="cambio-estado" class="form-select" aria-label="Selecciones nuevo estado">
        <option selected>Cambiar Estado</option>
        <option value="activo">Activo</option>
        <option value="inactivo">Inactivo</option>
    </select>

    <button type="submit" class="btn btn-primary">
    Cambiar estado
</button>
</form>

