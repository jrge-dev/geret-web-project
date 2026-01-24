<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:./pages/login.php");
    exit();
}
header("Location:./pages/antenas.php");

?>
