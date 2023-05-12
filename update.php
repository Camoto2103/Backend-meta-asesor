<?php
    require_once "clases/conexion/conexion.php";
    $conexion = new conexion;
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	header('Access-Control-Allow-Headers: X-Requested-With');
	header('Content-Type: text/html; charset=utf-8');
	header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');
	
        $antiguedad = $_POST['Antiguedad'];
        $periodo = $_POST['Pediodo'];
        $metaBitacora = $_POST['Meta_bitacoras'];
        $metaBitacora1 = $_POST['Meta_bitacoras_s1'];
        $metaBitacora2 = $_POST['Meta_bitacoras_s2'];
        $metaBitacora3 = $_POST['Meta_bitacoras_s3'];
        $metaBitacora4 = $_POST['Meta_bitacoras_s4'];
        $metaBitacora5 = $_POST['Meta_bitacoras_s5'];
        $metaDia = $_POST['Meta_dia'];
        $metaDia1 = $_POST['Meta_dia_s1'];
        $metaDia2 = $_POST['Meta_dia_s2'];
        $metaDia3 = $_POST['Meta_dia_s3'];
        $metaDia4 = $_POST['Meta_dia_s4'];
        $metaDia5 = $_POST['Meta_dia_s5'];
    
        $query = "UPDATE meta_asesores_fvd_bitacoras
                    SET  Periodo = $periodo ,
                    Meta_bitacoras = $metaBitacora,
                    Meta_bitacoras_s1 = $metaBitacora1,
                    Meta_bitacoras_s2 = $metaBitacora2,
                    Meta_bitacoras_s3 =$metaBitacora3,
                    Meta_bitacoras_s4 = $metaBitacora4,
                    Meta_bitacoras_s5 = $metaBitacora5,
                    Meta_dia = $metaDia,
                    Meta_dia_s1 = $metaDia1,
                    Meta_dia_s2 = $metaDia2,
                    Meta_dia_s3 = $metaDia3,
                    Meta_dia_s4 = $metaDia4,
                    Meta_dia_s5 = $metaDia5
                    WHERE Antiguedad = '$antiguedad'
                    ";


// SET @periodo := '2023-05';
// SET @antiguedad := '>60';

// UPDATE meta_asesores_fvd_bitacoras
// SET  Periodo = @periodo ,
// Meta_bitacoras = 1,
// Meta_bitacoras_s1 = 11,
// Meta_bitacoras_s2 = 12,
// Meta_bitacoras_s3 =13,
// Meta_bitacoras_s4 = 14,
// Meta_bitacoras_s5 = 15,
// Meta_dia = 1,
// Meta_dia_s1 = 11,
// Meta_dia_s2 = 12,
// Meta_dia_s3 = 13,
// Meta_dia_s4 = 14,
// Meta_dia_s5 = 15
// WHERE Antiguedad = @antiguedad;
    
        header('Content-Type: application/json');
        echo json_encode($conexion->obtenerDatos($query));

?>