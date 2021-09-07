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
    $totalA=0;

    $query = "SELECT count(noControl) cant FROM anexoe  where estado='activo' and  creditosAcumulados>182 ";
    $resultado = $conn->query($query);
    $salida.="<label>alumnos registrados con mas del 70% de creditos acumulados: </label>";
    if ($resultado->num_rows>0) {
    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.=" ".$fila['cant'];
            $totalA=$fila['cant'];
    	}
    }else{
    	$salida.="<br>NO HAY DATOS :(<br>";
    }

$query2 = "SELECT count(noControl) cant, servicioSocial from anexoe where  estado='activo' and creditosAcumulados>182 group by servicioSocial";
    $resultado2 = $conn->query($query2);

if ($resultado2->num_rows>0) {
    $salida.=" <div class='tabs2'>
    <div class='tabin'> 
        <table border=1 ><thead>
            <tr id='titulo'><td id='s' colspan='3' >Servicio Social</td></tr>
        </thead><tbody>";

    while ($fila2 = $resultado2->fetch_assoc()) {
        $servi=0;
        $servi=$fila2['cant'];
        $salida.="
            <tr>
                <td>".$fila2['cant']."</td><td";
    if ($fila2['servicioSocial']=='no') {$salida.=' style="background: #ff040494;"';}

      $salida.=">".$fila2['servicioSocial']."</td>
                <td>".number_format(($servi*100)/$totalA, 0, '.', ',')."%</td>
            </tr>";
        }
        $salida.="</tbody></table></div> ";
    }



$query3 = "SELECT count(noControl) cant, residenciasPro from anexoe where  estado='activo' and creditosAcumulados>182  group by residenciasPro";
    $resultado3 = $conn->query($query3);

if ($resultado3->num_rows>0) {
    $salida.="<div class='tabin'>
        <table border=1 ><thead>
            <tr id='titulo'><td id='r' colspan='3' >Residencias Profesionales</td></tr>
        </thead><tbody>";

    while ($fila3 = $resultado3->fetch_assoc()) {
        $resi=0;
        $resi=$fila3['cant'];
        $salida.="
            <tr>
                <td>".$fila3['cant']."</td><td";
    if ($fila3['residenciasPro']=='no') {$salida.=' style="background: #ff040494;"';}
    
      $salida.=">".$fila3['residenciasPro']."</td>
                <td>".number_format(($resi*100)/$totalA, 0, '.', ',')."%</td>
            </tr>";
        }
        $salida.="</tbody></table></div> ";
    }



$query5 = "SELECT count(noControl) cant, adeudaMaterias from anexoe where  estado='activo' and creditosAcumulados>182  group by adeudaMaterias ";
    $resultado5 = $conn->query($query5);

if ($resultado5->num_rows>0) {
    $salida.="<div class='tabin'>
    <table border=1 ><thead><tr id='titulo'><td id='a' colspan='3' >Adeuda Materias</td></tr>
    </thead><tbody>";

    while ($fila5 = $resultado5->fetch_assoc()) {
        $ade=0;
        $ade=$fila5['cant'];
        $salida.="
        <tr>
            <td>".$fila5['cant']."</td><td";
    if ($fila5['adeudaMaterias']=='si') {$salida.=' style="background: #ff040494;"';}
    
      $salida.=">".$fila5['adeudaMaterias']."</td>
            <td>".number_format(($ade*100)/$totalA, 0, '.', ',')."%</td>
        </tr>";
        }
        $salida.="</tbody></table></div> ";
    }




$query4 = "SELECT count(noControl) cant, titulacion from anexoe where estado='activo' and  creditosAcumulados>182  group by titulacion";
    $resultado4 = $conn->query($query4);

if ($resultado4->num_rows>0) {
    $salida.="<div class='tabin'>
    <table border=1 ><thead><tr id='titulo'><td  id='t' colspan='3' >Titulacion</td> </tr>
    </thead><tbody>";

    while ($fila4 = $resultado4->fetch_assoc()) {
        $titu=0;
        $titu=$fila4['cant'];
        $salida.="
        <tr>
            <td>".$fila4['cant']."</td><td";
    if ($fila4['titulacion']=='---') {$salida.=' style="background: #ff040494;"';}
      $salida.=">".$fila4['titulacion']."</td>
            <td>".number_format(($titu*100)/$totalA, 0, '.', ',')."%</td>
        </tr>";
        }
        $salida.="</tbody></table></div> </div>";
    }




$query6 = "SELECT count(n1) cant, n1 from anexoe where estado='activo' and  creditosAcumulados>182  group by n1";
$query7 = "SELECT count(n2) cant, n2 from anexoe where estado='activo' and  creditosAcumulados>182  group by n2";
$query8 = "SELECT count(n3) cant, n3 from anexoe where estado='activo' and  creditosAcumulados>182  group by n3";
$query9 = "SELECT count(n4) cant, n4 from anexoe where estado='activo' and  creditosAcumulados>182  group by n4";
$query10 = "SELECT count(n5) cant, n5 from anexoe where estado='activo' and  creditosAcumulados>182  group by n5";
$query11 = "SELECT count(n6) cant, n6 from anexoe where estado='activo' and  creditosAcumulados>182  group by n6";
$query12 = "SELECT count(n7) cant, n7 from anexoe where estado='activo' and  creditosAcumulados>182  group by n7";
$query13 = "SELECT count(n8) cant, n8 from anexoe where estado='activo' and  creditosAcumulados>182  group by n8";
$query14 = "SELECT count(n9) cant, n9 from anexoe where estado='activo' and  creditosAcumulados>182  group by n9";
$query15 = "SELECT count(n10) cant, n10 from anexoe where estado='activo' and  creditosAcumulados>182  group by n10";

    $resultado6 = $conn->query($query6);
    $resultado7 = $conn->query($query7);
    $resultado8 = $conn->query($query8);
    $resultado9 = $conn->query($query9);
    $resultado10 = $conn->query($query10);
    $resultado11 = $conn->query($query11);
    $resultado12 = $conn->query($query12);
    $resultado13 = $conn->query($query13);
    $resultado14 = $conn->query($query14);
    $resultado15 = $conn->query($query15);

    if ($resultado6->num_rows>0) {
        $salida.="<label>INGLES</label><div class='tabs2'>
        <div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 1</td> </tr></thead><tbody>";
        while ($fila6 = $resultado6->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n1']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n1']==1){$salida.="<td>SI</td>";} 
            ;
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado7->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 2</td> </tr></thead><tbody>";
        while ($fila6 = $resultado7->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n2']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n2']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado8->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 3</td> </tr></thead><tbody>";
        while ($fila6 = $resultado8->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n3']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n3']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado9->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 4</td> </tr></thead><tbody>";
        while ($fila6 = $resultado9->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n4']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n4']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado10->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 5</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado10->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n5']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n5']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado11->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 6</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado11->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n6']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n6']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado12->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 7</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado12->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n7']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n7']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado13->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 8</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado13->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n8']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n8']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado14->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 9</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado14->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n9']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n9']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado15->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'><td colspan='2' id='n'>Nivel 10</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado15->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
            if($fila6['n10']==0) {$salida.="<td style='background: #ff040494;'>NO</td>";}
            if($fila6['n10']==1){$salida.="<td>SI</td>";} 
    $salida.="</tr>"; }
    $salida.="</tbody></table></div></div><br>";
    }





$query16 = "SELECT count(C) cant from anexoe where estado='activo' and  creditosAcumulados>182 and C>0";
$query17 = "SELECT count(CIT) cant from anexoe where estado='activo' and  creditosAcumulados>182 and CIT>0";
$query18 = "SELECT count(PDS) cant from anexoe where estado='activo' and  creditosAcumulados>182 and PDS>0";
$query19 = "SELECT count(PD) cant from anexoe where estado='activo' and  creditosAcumulados>182 and PD>0";
$query20 = "SELECT count(AE) cant from anexoe where estado='activo' and  creditosAcumulados>182 and AE>0";
$query21 = "SELECT count(CCB) cant from anexoe where estado='activo' and  creditosAcumulados>182 and CCB>0";
$query22 = "SELECT count(FE) cant from anexoe where estado='activo' and  creditosAcumulados>182 and FE>0";

    $resultado16 = $conn->query($query16);
    $resultado17 = $conn->query($query17);
    $resultado18 = $conn->query($query18);
    $resultado19 = $conn->query($query19);
    $resultado20 = $conn->query($query20);
    $resultado21 = $conn->query($query21);
    $resultado22 = $conn->query($query22);

    if ($resultado16->num_rows>0) {
        $salida.="<label>Otros Creditos</label><div class='tabs2'><div class='tabin'><table border=1 ><thead>
        <tr id='titulo'>
            <td>C</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado16->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado17->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'>
            <td>CIT</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado17->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado18->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'>
            <td>PDS</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado18->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado19->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'>
            <td>PD</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado19->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado20->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'>
            <td>AE</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado20->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado21->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'>
            <td>CCB</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado21->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
    $salida.="</tr>"; }
    $salida.="</tbody></table></div>";
    }

    if ($resultado22->num_rows>0) {
        $salida.="<div class='tabin'><table border=1 ><thead>
        <tr id='titulo'>
            <td>FE</td>
            </tr></thead><tbody>";
        while ($fila6 = $resultado22->fetch_assoc()) {
            $salida.="<tr><td>".$fila6['cant']."</td>";
    $salida.="</tr>"; }
    $salida.="</tbody></table></div></div>";
    }

    echo $salida;

    $conn->close();

?>