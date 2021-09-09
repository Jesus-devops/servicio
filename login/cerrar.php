<?php
session_start();
//valida que tipo de usuario desea salir
if(isset($_SESSION['admin'])||isset($_SESSION['id'])){
    //Elimina la variable del usuario
    unset($_SESSION['admin']); 
    unset($_SESSION['id']); 
    unset($_SESSION['grupo']); 
    unset($_SESSION['semestre']);
   unset( $_SESSION['noControl']);
}
header("Location: index.php");
?>