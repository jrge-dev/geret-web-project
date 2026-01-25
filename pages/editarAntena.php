<?php
$titleName = "Editar Antena";
require_once("header.php"); 
require_once ("./../app/models/antenas.php");
session_start();
if(!isset($_SESSION['admin'])){
  header("Location:./login.php");
  exit();
}



$id = $_GET['id'];
$codigo =$_GET['codigo'];
$estadoActual = $_GET['estado'];
$antena = new Antenas();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $estado = $_POST['cambio-estado'];
    $antena->updateAntena($id,$estado);
    echo "<script>
    alert('estado actualizado');
    
    </script>";
    
}

?>

<div class="container">
    <h1 class="text-center mb-5" >Editar estado </b></h1>
    
    <table class="table table-responsive align-middle  table-borderless">
        <thead class="table-light">
            <tr>
                <th>Código antena</th>
                <th>Estado actual</th>
                <th>Accion</th>
            </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php echo $codigo;?>
            </td>
            <form method="POST">
            <td class="col-2">
                
                    <select name="cambio-estado" class="form-select" aria-label="Selecciones nuevo estado">
                        <option selected>
                            <?php echo $estadoActual;?>
                        </option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>

                   
                
            </td>
            <td>
                 <button type="submit" class="btn btn-primary">
                    Cambiar estado
                    </button>
            </td>
            </form>
        </tr>
    </tbody>
    </table>
</div>

    




