<?php
session_start();
//valida que tipo de usuario desea salir
if(isset($_SESSION['admin'])){
    //Elimina la variable del usuario
    unset($_SESSION['admin']); 
    unset($_SESSION['id']); 
    unset($_SESSION['grupo']); 
    unset($_SESSION['semestre']); 
}
header("Location: index.php");
?>