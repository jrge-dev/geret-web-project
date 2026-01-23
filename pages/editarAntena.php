<?php
$titleName = "Editar Antena";
require_once("header.php"); 
require_once ("./../app/models/antenas.php");
$id = $_GET['id'];
$codigo =$_GET['codigo'];
$estadoActual = $_GET['estado'];
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

<div class="container">
    
    <table class="table">
        <thead>
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

    




