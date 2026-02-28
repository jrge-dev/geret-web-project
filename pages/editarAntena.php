 <?php
$titleName = "Editar Antena";
require_once("header.php"); 
require_once ("./../app/models/antenas.php");
session_start();

if(!isset($_SESSION['admin'])){
  header("Location:./login.php");
  exit();
}

$antena = new Antenas();
$id_url = $_GET['id'];


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nuevoEstado = $_POST['cambio-estado'];
    $antena->updateAntena($id_url, $nuevoEstado);

    header("Location: editarAntena.php?id=" . $id_url );
    exit();
}
$data = $antena->getAntenaById($id_url);

if (!$data) {
    die("Antena no encontrada.");
}

$id = $data['id'];
$codigo = $data['codigo_antena'];
$estadoActual = $data['estado'];
?>

<div class="container">
    <?php if(isset($_GET['success'])): ?>
        <div class="alert alert-success">¡Estado actualizado correctamente!</div>
    <?php endif; ?>

    <h1 class="text-center mb-5">Editar estado</h1>
    
    <table class="table table-responsive align-middle table-borderless">
        <thead class="table-light">
            <tr>
                <th>Código antena</th>
                <th>Estado actual</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $codigo; ?></td>
                <form method="POST">
                    <td class="col-2">
                        <select name="cambio-estado" class="form-select">
                            <option value="activo" <?php echo ($estadoActual == 'activo') ? 'selected' : ''; ?>>Activo</option>
                            <option value="inactivo" <?php echo ($estadoActual == 'inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Cambiar estado</button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>   




