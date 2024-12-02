<?php
include "./config/Database.php";
$db = new Database();
$valida = $db->connect();
if ($valida){
    echo "Conexion Exitosa :)";
}else{
    echo "Conexion Fallida:(";

}