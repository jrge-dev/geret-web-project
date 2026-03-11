<?php
session_start(); 

$titleName = "Editar Antena";
require_once("header.php"); 
require_once ("./../app/models/antenas.php");

if(!isset($_SESSION['admin'])){
    header("Location:./login.php");
    exit();
}

$antena = new Antenas();
$id_url = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cambio-estado'])){
    $nuevoEstado = $_POST['cambio-estado'];
    $antena->updateAntena($id_url, $nuevoEstado);
    
    header("Location: editarAntena.php?id=" . $id_url . "&success=1");
    exit();
}

$data = $antena->getAntenaById($id_url);
if (!$data) {
    die("Antena no encontrada.");
}

$codigo = $data['codigo_antena'];
$estadoActual = $data['estado'];
?>

<div class="container mt-5">
    <?php if(isset($_GET['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            ¡Estado actualizado correctamente!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <h1 class="text-center mb-5">Editar estado</h1>
    
    <form method="POST">
        <table class="table table-responsive align-middle table-borderless">
            <thead class="table-light">
                <tr>
                    <th>Código antena</th>
                    <th>Estado actual</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($codigo); ?></td>
                    <td class="col-2">
                        <select name="cambio-estado" class="form-select">
                            <option value="activo" <?php echo ($estadoActual == 'activo') ? 'selected' : ''; ?>>Activo</option>
                            <option value="inactivo" <?php echo ($estadoActual == 'inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                        </select>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Cambiar estado 
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Atención</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Desea cambiar el estado actual de la antena?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
