<?php
//include('../Vista/recursosasesor.php');
include('../Modelo/crearimagen.php');

    $conexion = mysql_connect("localhost","root","");
	//Control
	if(!$conexion){die('La conexion ha fallado por:'.mysql_error());}
	mysql_select_db("saetis",$conexion);
   session_start();
 $UsuarioActivo = $_SESSION['usuario'];
//$usuario ='leticia';

	$graficorecurso     = new Recurso($UsuarioActivo);
	$indice = 1;
	$descripcion  =	$graficorecurso->obtenerPropiedades();
	$tabla ='';

	if($descripcion != null){
		foreach($descripcion as $key ) {
			$tipo  =strstr($key['RUTA_D'], '.');
			echo $tipo;
			$icono = '../Librerias/images/ico/'.$tipo.'.jpg';
		   
		 // echo 'Nombre >>'  .$key['NOMBRE_R']. ' DESCRIPCION_D >> ' .$key['DESCRIPCION_D'].'RUTA >> '.$key['RUTA_D'].' ICONO >> '.$icono.'<br>';
		 
		 $aux=$key['DESCRIPCION_D'];
         //$delimitador = "*";
       
         
            //list ($nombre,$numero) = explode($delimitador,$aux);

                $ubi= $key['RUTA_D'];
               // $del= "/";
               //list ($r1,$r2,$r3,$r4,$r5,$r6,$r7)=explode($del,$ubi);
               //$com=$r5."/".$r6."/".$r7;
               //echo $com."</br>";
                 
                

			$tabla .= '<tr>
			           <td>'.$indice.'</td>
			           <td>
		               <img class="img-rounded" width="35px" height="35px" alt=" " src="'.$icono.'"></img>
                       </td>
			           <td>
                       <a class="link-dos" href='.$ubi.' onclick="">'.$key['NOMBRE_R'].'<span class="instancename">    
 
                       <span class="accesshide "></span></a>
                       </td>
			           <td>'.$aux.'
			           </td>
			           </tr>';

                                  
			 $indice++;
		}  
	}else{		$tabla = 'No existen publicaciones';
	
	}
	///echo $tabla;

			$template = file_get_contents("../Vista/recursosasesor.php");
			$template = str_replace('{change}',$tabla, $template);
			print($template); 
?>