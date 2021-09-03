<?php 
session_start();
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "alumno";
 
	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Reporte E</title>
    <link rel="shortcut icon" href="../icono.png" />

    <style type="text/css">

    tbody, td, tfoot, th, thead, tr {
      border-color: black;
    border-style: solid;
    border-width: 1px;
    padding: 2px;
    width: 10px;
    }
    table{
        border-color: black;
        text-align: center;
        border-collapse: collapse;
    }
   body{
        font-size: 12px;            
        text-transform: uppercase;
    font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
    }
    .in{
        font-size: 14px;
        font-weight: bold;
    }
    .nom{
    }
    #col{
        border-right: solid;
        border-left: solid;
    }
    #co{
        border-right: solid;
    }
    .title{
        border-bottom: solid;

    }
    #sim{
    }
    #sim #in{
        font-weight: bold;
        width: 35px;
        text-align: center;
    }
    #sim td{
        width: 300px;
        text-align: justify;
    }



    </style>

</head> 
<center>
<body>
    <h2>ANEXO E <br>Formato para el Control de Tutorias</h2>
    <table border=3>
        <tr >
            <td class="title" id="col" rowspan="3" style="width: 1.5cm;">No.</td>
            <td class="title"   id="col" rowspan="3" style="width: 5cm;">NOMBRE ALUMNO</td>
            <td class="title"   id="col" colspan="10" style="width: 3cm;">INGLES</td>
            <td class="title"   id="col" rowspan="2" colspan="2" style="width: 1.5cm;">SERVICIO SOCIAL</td>
            <td class="title"   id="col" rowspan="2" colspan="2" style="width: 1.5cm;">RESIDENCIAS PROFESIONALES</td>
            <td class="title"   id="col" rowspan="2" colspan="7" style="width: 180px;">OTROS CREDITOS</td>
            <td class="title"   id="col" rowspan="2" colspan="3" style="width: 2cm;">TITULACION</td>
            <td class="title"   id="col" rowspan="2" colspan="2" style="width: 2cm;">ADEUDA MATERIAS</td>
        </tr>
        <tr >
            <td colspan="10" class="title">NIVEL CURSADO</td>                  
        </tr>
        <tr >
            <td class="title">1</td>
            <td class="title">2</td>
            <td class="title">3</td>
            <td class="title">4</td>
            <td class="title">5</td>
            <td class="title">6</td>
            <td class="title">7</td>
            <td class="title">8</td>
            <td class="title">9</td>
            <td class="title" id='co' >10</td>     
            <td class="title">SI</td>
            <td class="title" id='co' >NO</td>
            <td class="title">SI</td>
            <td class="title" id='co' >NO</td>
            <td class="title">C</td>
            <td class="title">CIT</td>
            <td class="title">PDS</td>
            <td class="title">PD</td>
            <td class="title">AE</td>
            <td class="title">CCB</td>
            <td class="title" id='co' >FE</td>
            <td class="title">TP</td>
            <td class="title">TPR</td>
            <td class="title" id='co' >O</td>
            <td class="title">SI</td>
            <td class="title" id='co' >NO</td>
        </tr>
<?php
 $query = "SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>180  and a.semestre='".$_GET['semestre']."' and a.grupo='".$_GET['grupo']."' ORDER By a.noControl";

$salida='';
    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
        while ($fila = $resultado->fetch_assoc()) {

        echo "<tr>
                <td  id='col' >".$fila['noControl']."</td>
                <td class='nom' id='col' >".$fila['apellidoP'].' '.$fila['apellidoM'].' '.$fila['nombres']."</td>
                <td class='in'>";if ($fila['n1']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n2']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n3']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n4']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n5']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n6']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n7']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n8']=='1') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['n9']=='1') {echo '*';}echo "</td>
                <td class='in' id='co' >";if ($fila['n10']=='1') {echo '*';}echo "</td>";

           echo"<td>";if ($fila['servicioSocial']=='si') {echo 'X';} echo "</td>
                <td id='co' >";if ($fila['servicioSocial']=='no') {echo 'X';} echo "</td>";  
           echo"<td>";if ($fila['residenciasPro']=='si') {echo 'X';} echo "</td>
                <td id='co' >";if ($fila['residenciasPro']=='no') {echo 'X';} echo "</td>";

            echo"<td class='in'>";if ($fila['C']>'0') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['CIT']>'0') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['PDS']>'0') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['PD']>'0') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['AE']>'0') {echo '*';}echo "</td>
                <td class='in'>";if ($fila['CCB']>'0') {echo '*';}echo "</td>
                <td class='in' id='co' >";if ($fila['FE']>'0') {echo '*';}echo "</td>";

            echo"<td>";if ($fila['titulacion']=='TP') {echo 'X';}  echo " </td>
                <td>";if ($fila['titulacion']=='TPR') {echo 'X';}  echo " </td>
                <td id='co' >";if ($fila['titulacion']=='O') {echo 'X';}  echo " </td>";

            echo"<td>";if ($fila['adeudaMaterias']=='si') {echo 'X';} echo " </td>
                <td>";if ($fila['adeudaMaterias']=='no') {echo 'X';}  echo " </td>
            </tr>";
        }
    }
  ?>
    </table>
    <br>
    <table id="sim">
        <tr><td colspan="4" id="in">SIMBOLOGIA</td></tr>
        <tr>
            <td id="in">C   </td>
            <td>CONGRESO    </td>
            <td id="in">CCB </td>
            <td>CONCURSO DE CIENCIAS BASICAS</td>
        </tr>
        <tr>
            <td id="in">CIT</td>
            <td>CONCURSO DE INNOVACION TECNOLOGICA</td>
            <td id="in">FE</td>
            <td>FERIA EMPRENDEDORES</td>
        </tr>
        <tr>
            <td id="in">PDS</td>
            <td>PROGRAMA DE DESARROLLO SUSTENTABLE</td>
            <td id="in">TP</td>
            <td>TITULACION POR PROMEDIO</td>
        </tr>
        <tr>
            <td id="in">PD</td>
            <td>PROGRAMA DELFIN</td>
            <td id="in">TPR</td>
            <td>TITULACION POR RESIDENCIAS PROFESIONALES</td>
        </tr>
        <tr>
            <td id="in">AE</td>
            <td>ACTIVIDADES EXTRAESCOLARES</td>
            <td id="in">O</td>
            <td>OTROS</td>
        </tr>
    </table>

</body>
</center>
</html>

