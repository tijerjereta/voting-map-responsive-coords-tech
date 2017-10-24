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

	$menu = $_POST['menu'];
	
    /* Consulta */  
    if($menu == 'generales'){
    	$qry = "SELECT * FROM generales;";
	}
    $res = mysqli_query($conexion, $qry);

	header('Content-Type: application/json');
    /*$datos = array();*/

    while($registro = mysqli_fetch_assoc($res)) {
    	/*$nvoitem = array($linea['ciudad'], $linea['partido'], $linea['lista'], $linea['candidatos'], $linea['votos'], $linea['porcentual'], $linea['lat'], $linea['lng']);*/
	
		$datos.=$registro['id'].";".$registro['partido'].";".$registro['lista'].";".$registro['candidatos'].";".$registro['votos'].";".$registro['porcentual'].";".$registro['img'].";".$registro['color'].";";
			
	}
	
	/*$datos = array(
    	"Cajon" => "Cajonazo",
    	"Arpon" => "Arponazoo",
    );*/
	
	$datos = utf8_encode($datos); /* JSON TIRABA ERROR AL NO DETECTAR CARACTERES UTF8 !!!!! ------------------------- */
	
	echo json_encode($datos, JSON_FORCE_OBJECT);
    
    /*echo json_encode(array("resultado"=>$return));*/
    

    mysqli_free_result($res);  
	
    
    mysqli_close($conexion);
	
   /*mail('diegorivastw@hotmail.com', 'testeo', $datos);*/
?>



