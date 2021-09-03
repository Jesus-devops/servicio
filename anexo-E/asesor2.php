<?php
    include ("../conexion.php");
session_start(); 

    $Sql="SELECT noControl FROM alumno WHERE semestre=".$_POST['semestre']." and grupo='".$_POST['grupo']."' and turno='".$_POST['turno']."' and idAsesor=".$_SESSION['id'];
    $resultado = $mysql->query($Sql)or die($mysql-> error);

    if ($resultado->num_rows>0) {
        while ($noC = $resultado->fetch_assoc()) {
            echo $noC['noControl']."<br>";
            $Sql2="UPDATE alumno set semestre=(semestre+1) where noControl=".$noC['noControl'];

            $mysql->query($Sql2)or die($mysql-> error);

            echo '<script type="text/javascript">  alert("Modificado correctamente"); window.location.href="asesor.php";</script>';

        }
    }
    else {
        echo '<script type="text/javascript">  alert("No hay alumnos con esos datos"); window.location.href="asesor.php";</script>';

    }