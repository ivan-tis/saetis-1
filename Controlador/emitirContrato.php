<?php

include '../Modelo/conexion.php';

$con = new conexion();

if (isset($_POST['grupoempresa'])) {
    $nombreLargo = $_REQUEST['grupoempresa'];
    if(strnatcasecmp($nombreLargo, "Seleccione una grupo empresa")!=0)
    {
        $cc1="SELECT `NOMBRE_CORTO_GE` FROM `grupo_empresa` WHERE `NOMBRE_LARGO_GE` = '$nombreLargo'";            
        $aa1= $con->consulta($cc1);
        $vv1 =  mysql_fetch_array($aa1);
        $nombreCorto = $vv1[0]; 
        $asesor = 'Leticia Blanco';
        $representante = "Representante";
        //$sistema = "SISTEMA DE APOYO A LA EMPRESA TIS";
        //$convocatoria = "CPTIS-1707-2014";

        $buscar    = array(
            'empresa_nombre_largo' => '[[empresa-nombre-largo]]',
            'empresa_nombre_corto' => '[[empresa-nombre-corto]]',
            'rep_legal'            => '[[rep-legal]]',
            'asesor'               => '[[asesor]]',
            'fecha_actual'         => '[[fecha-actual]]',
            'hora_actual'          => '[[hora-actual]]',
        );


        $remplazo['empresa_nombre_largo'] = $nombreLargo;
        $remplazo['empresa_nombre_corto'] = $nombreCorto;
        $remplazo['rep_legal']            = $representante;
        $remplazo['asesor']               = $asesor;
        $remplazo['fecha_actual']         = date('Y/m/d');

        $ruta = "..\\Repositorio\\asesor";
        chdir($ruta);
        $id = "contrato";

        $tex = $id.".tex"; 
        $log = $id.".log"; 
        $aux = $id.".aux"; 
        $pdf = $id.".pdf"; 


        $plantilla = "contrato.tex";

        $texto = file_get_contents($plantilla);
        $textoAux = file_get_contents($plantilla);


        $texto = str_replace($buscar['empresa_nombre_largo'], $remplazo['empresa_nombre_largo'], $texto);
        $texto = str_replace($buscar['empresa_nombre_corto'], $remplazo['empresa_nombre_corto'], $texto);
        $texto = str_replace($buscar['rep_legal'], $remplazo['rep_legal'], $texto);
        $texto = str_replace($buscar['asesor'], $remplazo['asesor'], $texto);
        $texto = str_replace($buscar['fecha_actual'], $remplazo['fecha_actual'], $texto);

        file_put_contents($tex,$texto);

        exec("pdflatex -interaction=nonstopmode $tex",$final);

        file_put_contents($tex, $textoAux);
        unlink($log);
        unlink($aux);
        
        
       header("location:../Vista/contrato.php");
    }
    else{        
       echo"<script type=\"text/javascript\">alert('Seleccione una grupo empresa'); window.location='../Vista/contrato.php';</script>";  
    }
    
    

}

?>
