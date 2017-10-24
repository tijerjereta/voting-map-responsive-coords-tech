<?php
    $serverdb='localhost';
    $usuariobd='COMPLETAR';
    $passwddb='COMPLETAR';
    $basedb='COMPLETAR';
    $conexion = mysqli_connect("$serverdb", "$usuariobd", "$passwddb", "$basedb");
    /*mysqli_set_charset($conexion, 'utf8');*/
    if (!$conexion) {
        die('<strong>No pudo conectarse a la bse de datos:</strong> ' . mysqli_connect_error());
    }

	$departamento = $_POST['departamento'];
	$menuespe = $_POST['menuespe'];
    /* Consulta */  
    //mail('diegorivastw@hotmail.com', 'testeo Departa', $departamento);
   	if($departamento == 'comodoro' || $departamento == 'trelew' || $departamento == 'madryn' || $departamento == 'rawson' || $departamento == 'esquel'){
				$qry = "SELECT * FROM candidatosporlocalidad WHERE ciudadlocalidad = '$departamento';";   		
	}else{		
			if($departamento == 'rawsond'){
				$departamento = 'rawson';
			}
				
			$qry = "SELECT * FROM candidatosporlocalidad WHERE departamento = '$departamento' AND ciudadlocalidad <> 'TRELEW' AND ciudadlocalidad <> 'RAWSON' AND ciudadlocalidad <> 'MADRYN' AND ciudadlocalidad <> 'COMODORO' AND ciudadlocalidad <> 'ESQUEL' AND ciudadlocalidad <> 'RADA TILLY' AND ciudadlocalidad <> 'PUERTO PIRÁMIDES' AND ciudadlocalidad <> 'PUERTO PIRAMIDES';";
	}
	if($menuespe == 'fpv'){
		if($departamento == 'comodoro' || $departamento == 'trelew' || $departamento == 'madryn' || $departamento == 'rawson' || $departamento == 'esquel'){
				$qry = "SELECT * FROM candidatosfpvporlocalidad WHERE ciudadlocalidad = '$departamento';";   		
		}else{
				if($departamento == 'rawsond'){
					$departamento == 'rawson';
				}
						
				$qry = "SELECT * FROM candidatosfpvporlocalidad WHERE departamento = '$departamento' AND ciudadlocalidad <> 'TRELEW' AND ciudadlocalidad <> 'RAWSON' AND ciudadlocalidad <> 'MADRYN' AND ciudadlocalidad <> 'COMODORO' AND ciudadlocalidad <> 'ESQUEL' AND ciudadlocalidad <> 'RADA TILLY' AND ciudadlocalidad <> 'PUERTO PIRÁMIDES' AND ciudadlocalidad <> 'PUERTO PIRAMIDES';";
		}
	}
   $res = mysqli_query($conexion, $qry);

	//mail('diegorivastw@hotmail.com', 'testeo Departa Datos', $menuespe);

	header('Content-Type: application/json');
    $datosdep = array();

    while($registro = mysqli_fetch_assoc($res)) {
    	/*$nvoitem = array($linea['ciudad'], $linea['partido'], $linea['lista'], $linea['candidatos'], $linea['votos'], $linea['porcentual'], $linea['lat'], $linea['lng']);*/	
		//$datos.=$registro['id'].";".$registro['partido'].";".$registro['lista'].";".$registro['candidatos'].";".$registro['votos'].";".$registro['porcentual'].";".$registro['img'].";".$registro['color'].";";
		$datosdep.= ";".$registro['posicion'].";".$registro['ciudadlocalidad'].";".$registro['partido'].";".$registro['lista'].";".$registro['candidatos'].";".$registro['votos']." Votos".";".$registro['porcentual'].";".$registro['img'].";".$registro['color'];	
		//$datosdep['ciudadlocalidad'].= ";".$registro['ciudadlocalidad'].";";
	}
	//mail('diegorivastw@hotmail.com', 'testeo Departa Datos', $datosdep);
	/*$datos = array(
    	"Cajon" => "Cajonazo",
    	"Arpon" => "Arponazoo",
    );*/
	
	$datosdep = utf8_encode($datosdep); /* JSON TIRABA ERROR AL NO DETECTAR CARACTERES UTF8 !!!!! ------------------------- */
	
	echo json_encode($datosdep, JSON_FORCE_OBJECT);
    
    /*echo json_encode(array("resultado"=>$return));*/
    

    mysqli_free_result($res);  
	
    
    mysqli_close($conexion);
	
	
  //mail('diegorivastw@hotmail.com', 'DEPART fINAL', $datosdep);
?>



