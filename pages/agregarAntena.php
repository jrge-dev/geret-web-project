<?php
session_start();
require_once('./header.php');
$error = $_GET['error'];
if(!isset($_SESSION['admin'])){
  header("Location: ./login.php");
  exit();
}

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white p-3">
                    <h4 class="mb-0"><i class="bi bi-broadcast"></i> Agregar Nueva Antena</h4>
                </div>
                
                <div class="card-body p-4">
                    <form action="procesar_antena.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="codigo-antena" class="form-label fw-bold">Código de antena</label>
                            <input type="text" id="codigo-antena" name="codigo-antena" 
                                   class="form-control" placeholder="Ej: ANT-770" required>
                            <div class="form-text">Identificador único de la antena.</div>
                        </div>

                        <div class="mb-3">
                            <label for="ip-antena" class="form-label fw-bold">Dirección IP</label>
                            <input type="text" id="ip-antena" name="ip-antena" 
                                   class="form-control" placeholder="192.168.1.1" required>
                        </div>

                        <div class="mb-4">
                            <label for="cambio-estado" class="form-label fw-bold">Estado inicial</label> 
                            <select name="cambio-estado" id="cambio-estado" class="form-select">
                                <option value="activo" <?php echo ($estadoActual == 'activo') ? 'selected' : ''; ?>>🟢 Activo</option>
                                <option value="inactivo" <?php echo ($estadoActual == 'inactivo') ? 'selected' : ''; ?>>🔴 Inactivo</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Guardar Antena
                            </button>
                            <a href="antenas.php" class="btn btn-link text-muted">Cancelar y volver</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
