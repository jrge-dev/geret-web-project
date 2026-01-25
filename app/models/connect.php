<?php
// Agregar datos de conexión a DB
$connectDb = new mysqli("", "", "", "");

if ($connectDb->connect_error) {
    die($connectDb->connect_error);
}
