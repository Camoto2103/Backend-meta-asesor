<?php
    require_once "clases/conexion/conexion.php";
    $conexion = new conexion;
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	header('Access-Control-Allow-Headers: X-Requested-With');
	header('Content-Type: text/html; charset=utf-8');
	header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');
	
        $periodoActual = $_POST['periodo'];
    
        $query = "SELECT * FROM meta_asesores_fvd_bitacoras WHERE Periodo = '$periodoActual'";
    
        header('Content-Type: application/json');
        echo json_encode($conexion->obtenerDatos($query));

?>