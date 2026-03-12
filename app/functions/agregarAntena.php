<?php
session_start();
require_once "../models/antenas.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $codigo = $_POST['codigo-antena' ?? ''];
  $ip   = $_POST['ip-antena'] ?? '';
  $estado = $_POST['cambio-estado'] ?? '';

  $antenaModel = new Antenas();

  $request = $antenaModel->addAntena($codigo, $ip, $estado);
  if($request){
    $_SESSION['flash_message'] = "Agregada correctamente";
    $_SESSION['flash_type'] = "success";
  }else{
    $_SESSION['flash_message'] = "Error al guardar";
    $_SESSION['flash_type'] = "danger";
  }
  header("Location: ../../pages/agregarAntena.php");
  exit();
}
?>
