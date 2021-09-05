<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "alumno";
 
	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
$Conincidencias=0;            

session_start();

//if (isset($_POST['consulta'])&&$_POST['consulta']!='') {
if (isset($_SESSION['grupo'])&&isset($_SESSION['semestre'])&&
            $_SESSION['grupo']!=''&& $_SESSION['semestre']>0) {


    $query2 = "SELECT count(ae.noControl) cant, servicioSocial FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>182 and a.semestre='".$_SESSION['semestre']."' and a.grupo='".$_SESSION['grupo'].' '.$_SESSION['turno']."' group by servicioSocial";

    $resultado2 = $conn->query($query2);
    if ($resultado2->num_rows>0) {
        $salida.=" <center><div id='tabs'> 
        <div id='tab'>
        <table border=1 ><thead>
            <tr id='titulo'><td colspan='2' >Servicio Social</td></tr>
        </thead><tbody>";
        
        while ($fila2 = $resultado2->fetch_assoc()) {
            $salida.="<tr><td>".$fila2['cant']."</td><td";

        if ($fila2['servicioSocial']=='no') {$salida.=' style="background: #ff040494;"';}                       

            $salida.=">".$fila2['servicioSocial']."</td></tr>";
           $Conincidencias+=$fila2['cant'];         
        }
        $salida.="</tbody></table></div> ";
    }




    $query3 = "SELECT count(ae.noControl) cant, residenciasPro FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>182 and a.semestre='".$_SESSION['semestre']."' and a.grupo='".$_SESSION['grupo'].' '.$_SESSION['turno']."' group by residenciasPro";
    
    $resultado3 = $conn->query($query3);
    if ($resultado3->num_rows>0) {
        $salida.="<div id='tab'>
        <table border=1 ><thead>
        <tr id='titulo'><td colspan='2' >Residencias Prof.</td></tr>
        </thead><tbody>";

        while ($fila3 = $resultado3->fetch_assoc()) {
            $salida.="<tr><td>".$fila3['cant']."</td><td";

        if ($fila3['residenciasPro']=='no') {$salida.=' style="background: #ff040494;"';}                       

            $salida.=">".$fila3['residenciasPro']."</td></tr>";
        }
        $salida.="</tbody></table> </div> ";
    }




    $query5 = "SELECT count(ae.noControl) cant, adeudaMaterias FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>182 and a.semestre='".$_SESSION['semestre']."' and a.grupo='".$_SESSION['grupo'].' '.$_SESSION['turno']."' group by adeudaMaterias desc";
    
    $resultado5 = $conn->query($query5);
    if ($resultado5->num_rows>0) {
        $salida.="<div id='tab'>
        <table border=1 ><thead>
        <tr id='titulo'><td colspan='2' >Adeuda Materias</td></tr>
        </thead><tbody>";

        while ($fila5 = $resultado5->fetch_assoc()) {
            $salida.="<tr><td>".$fila5['cant']."</td><td";

        if ($fila5['adeudaMaterias']=='si') {$salida.=' style="background: #ff040494;"';}                       

            $salida.=">".$fila5['adeudaMaterias']."</td></tr>";
        }
        $salida.="</tbody></table></div> ";
    }




    $query4 = "SELECT count(ae.noControl) cant, titulacion FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>182 and a.semestre='".$_SESSION['semestre']."' and a.grupo='".$_SESSION['grupo'].' '.$_SESSION['turno']."' group by titulacion";
   
    $resultado4 = $conn->query($query4);
    if ($resultado4->num_rows>0) {
        $salida.="<div id='tab'>
        <table border=1 ><thead>
            <tr id='titulo'><td  colspan='2' >Titulacion</td></tr>
        </thead><tbody>";

        while ($fila4 = $resultado4->fetch_assoc()) {
            $salida.="<tr><td>".$fila4['cant']."</td><td";

        if ($fila4['titulacion']=='---') {$salida.=' style="background: #ff040494;"';}                       
            $salida.=">".$fila4['titulacion']."</td></tr>";
        }
        $salida.="</tbody></table></div></div></center> ";
    }
    
}





$query = "SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>182 and a.semestre='".$_SESSION['semestre']."' and a.grupo='".$_SESSION['grupo'].' '.$_SESSION['turno']."' ORDER By a.noControl";

if (isset($_POST['consulta'])) {
    $q = $conn->real_escape_string($_POST['consulta']);
    if ($_POST['consulta']=='servicioSocial'||
        $_POST['consulta']=='residenciasPro'||
        $_POST['consulta']=='titulacion'||
        $_POST['consulta']=='tOtrosC'||
        $_POST['consulta']=='tIngles') {
        $query = "SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE  creditosAcumulados>182 and a.semestre='".$_SESSION['semestre']."' and a.grupo='".$_SESSION['grupo'].' '.$_SESSION['turno']."' ORDER By ".$_POST['consulta'];

    }else if ($_POST['consulta']=='adeudaMaterias') {
        $query = "SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>182 and a.semestre='".$_SESSION['semestre']."' and a.grupo='".$_SESSION['grupo'].' '.$_SESSION['turno']."' ORDER By ".$_POST['consulta']." desc";

    } else{
        $_SESSION['grupo']='';
        $_SESSION['semestre']=0;
            
        $query = "SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE  creditosAcumulados>182 and a.noControl LIKE '$q%' ORDER By a.noControl limit 3";
    }
}

$resultado = $conn->query($query);

if ($resultado->num_rows>0) {
    	
    if ($_SESSION['semestre']>0 && $_SESSION['grupo']!='') {
           $salida.='<center><h4   style="width: fit-content;" >'.$_SESSION['semestre'].' '.$_SESSION['grupo'].'</h4></center>';
    }
    $salida.=" <center>
        <table border=1 class='tabla_datos'  style='font: menu; width: 95%;    max-width: 1100px;'><thead>
    		<tr id='titulo'>
    			<td id='nb'>No. Control</td>
                <td id='nomb'>Nombre</td>
                <td id='sb'>servicio Social</td>
                <td id='rb'>residencias</td>
                <td id='ab'>Adeuda Materias</td>
                <td id='tb'>Titulacion</td>
                <td id='ib'>Ingles</td>
                <td id='ob'>Otros Creditos</td>
                <td id='sb'>total creditos</td>
                <td id='sb' class='cel' style='background: black;'>Celulares</td>
                <td id='sb'class='campomodi'>mod.</td>
                <td id='sb'>.</td>
    		</tr>
        </thead><tbody>";

    while ($fila = $resultado->fetch_assoc()) {
        $sumO=0;$sumI=0;
        $sumO=$fila['C']+$fila['CIT']+$fila['PDS']+$fila['PD']+$fila['AE']+$fila['CCB']+$fila['FE'];

        $sumI=$fila['n1']+$fila['n2']+$fila['n3']+$fila['n4']+$fila['n5']+
            $fila['n6']+$fila['n7']+$fila['n8']+$fila['n9']+$fila['n10'];

        $salida.="
        <tr>
            <td>".$fila['noControl']."</td>
            <td>".$fila['nombres'].' '.$fila['apellidoP'].' '.$fila['apellidoM']."</td>
            <td";
if ($fila['servicioSocial']=='no') {
            $salida.=' style="background: #ff040494;"';}
if ($fila['servicioSocial']=='si') {
            $salida.=' style="background: #17e217d4;"';}
            $salida.=">".$fila['servicioSocial']."</td>
            <td";
if ($fila['residenciasPro']=='no') {
            $salida.=' style="background: #ff040494;"';}
if ($fila['residenciasPro']=='si') {
            $salida.=' style="background: #17e217d4;"';}
            $salida.=">".$fila['residenciasPro']."</td>
            <td";
if ($fila['adeudaMaterias']=='si') {
            $salida.=' style="background: #ff040494;"';}
if ($fila['adeudaMaterias']=='no') {
            $salida.=' style="background: #17e217d4;"';}
            $salida.=">".$fila['adeudaMaterias']."</td>
            <td";
if ($fila['titulacion']=='---') {
            $salida.=' style="background: #ff040494;"';}
if ($fila['titulacion']!='---') {
            $salida.=' style="background: #17e217d4;"';}
            $salida.=">".$fila['titulacion']."</td>
            <td>
    <div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='10' style='width: ".$fila['tIngles']."0%'>".$fila['tIngles']."
        </div>
    </div>
            </td>
            <td id='ing'>
                <table class='tabla_datos3'><thead>
                    <tr id='titulo3'>
                        <td>C</td>
                        <td>CIT</td>
                        <td>PDS</td>
                        <td>PD</td>
                        <td>AE</td>
                        <td>CCB</td>
                        <td>FE</td>
                    </tr>
                </thead><tbody>
                    <tr>
                        <td>".$fila['C']."</td>
                        <td>".$fila['CIT']."</td>
                        <td>".$fila['PDS']."</td>
                        <td>".$fila['PD']."</td>
                        <td>".$fila['AE']."</td>
                        <td>".$fila['CCB']."</td>
                        <td>".$fila['FE']."</td>
                    </tr>
                </tbody></table> 
            </td>               
            <td ";

    if ($sumO==0) { $salida.=' style="background: #ff040494";"';}
    if ($sumO>0&&$sumO<5) {$salida.=' style="background: orange";"';}
    if ($sumO>=5) {$salida.=' style="background: #17e217;"';}
            $salida.=">".$fila['tOtrosC']."
            </td>
            <td>";

$queryT = "SELECT celular1,celular2 FROM celular c join alumno a on a.noControl=c.noControl WHERE a.noControl=".$fila['noControl'];
$resultadoT = $conn->query($queryT);

while ($fila2 = $resultadoT->fetch_assoc()) {
        $sumO=0;$sumI=0;
    if ($fila2['celular1']>0) { $salida.="".$fila2['celular1']."";}
                $salida.="<br>";
    if ($fila2['celular2']>0) {$salida.="".$fila2['celular2']."";}
}
    $salida.="</td>
            <td class='campomodi'>
        <form action='modificar.php' method = 'post' enctype='multipart/form-data'>
            <input type='hidden' name='noControl' required value='".$fila['noControl']."' >";

            $salida.="
            <input  name='accion' value='Modificar' id='aceptar' class='btn'src='modificar.png' type='image'>

        </form>
        </td>
        <td>
        <form action='eliminar.php' method = 'post' enctype='multipart/form-data'>
            <input type='hidden' name='noControl' required value='".$fila['noControl']."' >";

            $salida.="
            <input  name='accion' value='ELIMINAR' id='aceptar' class='btn'type='submit'>

        </form>
        </td>
    			</tr>";
    	}
        $salida.="</tbody></table></center><br>"; 

        if ($Conincidencias>0) {$salida.="Coincidencias encontradas:".$Conincidencias;} 

    $salida.="<br> <center>
    <form action='reporteE2.php' method = 'post' enctype='multipart/form-data'>

        <input type='hidden' name='semestre' value='".$_SESSION['semestre']."' >
        <input type='hidden' name='grupo' value='".$_SESSION['grupo']."' >

        <input type='submit' name='accion' value='Imprimir reporte' id='aceptar' class='btn btn-primary' >
    </form></center>"; 

    }else{
    	$salida.="<br>NO HAY DATOS :(";
    }

    echo $salida;
    $conn->close();

?>