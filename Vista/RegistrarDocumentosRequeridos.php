<?php
include '../Modelo/conexion.php';
    $con=new conexion(); 
   session_start();
   $UsuarioActivo = $_SESSION['usuario'];
   //include("controlSesion.php");
  
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Apoyo a la Empresa TIS</title>

    <!-- Core CSS - Include with every page -->
    <link href="../Librerias/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Librerias/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="../Librerias/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="../Librerias/css/plugins/timeline/timeline.css" rel="stylesheet">   
    
    <link rel="stylesheet" type="text/css" media="all" href="../Librerias/calendario/daterangepicker-bs3.css" />
     <script type="text/javascript" src="../Librerias/js/jquery.min.js"></script> 
      <script type="text/javascript" src="../Librerias/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../Librerias/calendario/moment.js"></script>
      
      <script type="text/javascript" src="../Librerias/calendario/daterangepicker.js"></script>

    <!-- SB Admin CSS - Include with every page -->
    <link href="../Librerias/css/sb-admin.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../Librerias/calendario2/jquery.datetimepicker.css"/>
    <script type="text/javascript" src="js/validacionCamposFecha.js"></script>
    <script type="text/javascript">
      
    </script>
</head>

<body>
           
	
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="inicio_asesor.php">Inicio </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $UsuarioActivo.' '; ?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
  
                        <li><a href="modificar_asesor.php"><i class="fa fa-user fa-fw"></i> Modificar Datos personales</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="unlog.php"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="AdministrarGrupoEmpresa.php"><i class="fa fa-book"></i> Administrar Grupo Empresas</a>
                        </li>
                        <li>
                                        <a href="#"><i class="glyphicon glyphicon-th-list"></i> Evaluacion Grupo Empresa<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="CrearModalidadEvaluacion.php">Criterio de Evaluaci&oacute;n </a>                             
                                                </li>
                                                
                                                <li>
                                                    <a href="#">Criterio de Calificaci&oacute;n<span class="fa arrow"></span></a>
                                                    <ul class="nav nav-third-level">
                                                        <li>
                                                            <a href="CrearModalidadCalificacion.php"> Crear Criterio de Calificaci&oacute;n</a>
                                                        </li>
                                                        <li>
                                                            <a href="EliminarCriterioCalificacion.php"> Eliminar Criterio de Calificaci&oacute;n</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                 
                                                <li>
                                                    <a href="#">Formulario de Evaluacion<span class="fa arrow"></span></a>
                                                    <ul class="nav nav-third-level">
                                                        <li>
                                                            <a href="CrearFormulario.php">Crear Formulario de Evaluacion</a>
                                                        </li>
                                                        <li>
                                                            <a href="SeleccionarFormulario.php"> Habilitar Formulario de Evaluacion </a>   
                                                        </li>
                                                        <li>
                                                            <a href="EliminarFormulario.php">Eliminar Formulario de Evaluacion</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="EvaluarGrupoEmpresa.php">Evaluar Grupo Empresa </a>   
                                                </li>
                                                <li>
                                                    <a href="../Vista/EvaluacionGeneral.php">Evaluacion Final </a>   
                                                </li>
                                            </ul>
                                </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-files-o "></i> Documentos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                            <a href="../Vista/subirarchivoasesor.php">Subir Documentos</a>
                                </li>
                                <li>
                                    <a href="../Vista/RegistrarDocumentosRequeridos.php">Registrar Documentos</a>
                                </li>
                                <li>
                                    <a href="../Vista/documentos_generados.php">Contratos Emitidos</a>
                                </li>
                                
                                
                                <li>
                                    <a href="#">Publicaci&oacute;n Documentos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        
                                        
                                        <li>
                                            <a href="../Vista/publicar_asesor.php">Nueva Publicaci&oacute;n </a>
                                        </li>
                                        <li>
                                            <a href="../Controlador/publicaciones.php">Publicaciones </a>
                                        </li>
                                       
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Recepci&oacute;n Documentos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="documentos_recibidos.php">Documentos Recibidos</a>
                                        </li>
                                        <li>
                                            <a href="ConfiguracionFechasRecepcion.php" ><span class="fa fa-calendar-o"></span> Configuraci&oacute;n de Fechas para la Recepci&oacute;n de Documentos</a>
                                            
                                        </li>
         
                                    </ul>
                                </li>
                               
                            </ul>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Tareas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="contrato.php">Emitir Contrato </a>
                                </li>
                                <li>
                                    <a href="../Vista/RegistrarFirma.php">Firma de Contratos</a>
                                </li>
                                <li>
                                    <a href="ordenDeCambio.php">Emitir Orden de Cambio</a>
                                </li>
                                <li>
                                    <a href="notificacion_conformidad.php">Emitir Notificaci&oacute;n de Conformidad</a>
                                </li>
                                <li>
                                    <a href="InscripcionProyecto.php">Registrar Proyecto</a>
                                </li>
                                <li>
                                    <a href="#">Seguimiento Grupo Empresa <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        
                                        <li>
                                            <a id="Seguimiento" href="#">Seguimiento</a>
                                        </li>
  
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
          
                         <li>
                              <a href="lista_doc_subidos.php"><i class="fa fa-tasks fa-fw"></i>Documentos Subidos </a>  
                                              
                          </li>
                       
                        <li>
                            <a href="lista-de-noticias.php"><i class="fa fa-comment"></i> Foro</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div class="modal fade modalRegistroAsistencia" role="dialog" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Asistencia</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade modalRegistroReportes" role="dialog" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Reportes</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>
    <!---->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"  >Registrar Documentos Requeridos</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" id="configuracionFechas">
                        <div class="panel-body"> 
                            <form  method="POST" name="formulario" id="formulario" action="GuardarDocumento.php">
                                <p>
                                    <label class="default" >Escriba el nombre del documento requerido</label>
                                </p>
                                 <div class="form-group">
                                     <input type="text" name="nombreDocumento" id="" class="form-control" pattern="^[a-zA-Z\s]*$" required>
                                 </div>
                                 <div class="form-group">
                                     <input type="text" name="DescripcionDocumento" id="" class="form-control" pattern="^[a-zA-Z\s]*$" placeholder="Descripcion" required>
                                 </br>
                                     <select name="proyecto" class="form-control">
                                    <option>Seleccione un proyecto</option>
                                    <?php
                                        $idGE= $UsuarioActivo  ;

                                        $conGestion="SELECT id_g "
                                                . "FROM gestion "
                                                . "WHERE DATE (NOW()) > DATE(FECHA_INICIO_G) and DATE(NOW()) < DATE(FECHA_FIN_G)";
                                        $conGestion_=$con->consulta($conGestion);
                                        $idGestion=mysql_fetch_row($conGestion_);
                                        $idGestion_=$idGestion[0];
                                                                       
                                        $c1="SELECT p.`NOMBRE_P` FROM `proyecto` AS `p`, `gestion` AS `g` WHERE p.`ID_G` = g.`ID_G` AND p.`ID_G` LIKE '".$idGestion_."'";
                                 
                                        $a1=$con->consulta($c1);
                
                                        while($v1 =  mysql_fetch_array($a1)){
                                            echo "<option>".$v1[0]."</option>";
                                        }
                                    echo "<input type='hidden' name='idGE' value='$idGE'>";
            
                                    ?>
                                     </select><br>
                                 </div> 
                        
                                <p>
                                    <label for="fechaInicioE"></label>
                                </p>

                                <div class="row show-grid">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="default" for="fechaInicioE">Fecha Inicio de  Entrega</label>
                                            
                                            <div class="form-group">
                                                <label>
                                                <input class ="form-control" placeholder="AAAA-MM-DD" type="date" name="fechaInicioE" id="fechaInicioE" required/>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <label class="default">
                                               Hora Inicio de Entrega:<span id="sprytextfield1"></label>
                                            <div class="form-group">
                                                <label for="horaInicioE">
                                                <input  class ="form-control" placeholder="HH:MM"  type="time" name="   horaInicioE"  required />
                                                </label>
                                            </div>
                                    </div>
                                        
                                </div> 
                                 
                                        
                                <div class="row show-grid">
                                      <div class="col-md-6">
                                          <label class="default" for="fechaFinalE">Fecha Final de Entrega</label>
                                        <div class="form-group">
                                            <label>
                                            <input  class ="form-control" placeholder="AAAA-MM-DD"  type="date" name="fechaFinalE"  required/>
                                            </label>
                                        </div>
                                        

                                      </div>

                                       <div class="col-md-6">
                                        <label class="default">
                                            Hora Final de Entrega :<td><span id="sprytextfield2"></label>
                                        <div class="form-group">
                                            <label for="horaLimite">
                                            <input  class ="form-control"  placeholder="HH:MM" type="time" name="horaFinalE" id="horaFinalE" required/>
                                            </label>
                                        </div>
                                        
                                        </div>
                                </div>
                                  <p>&nbsp;</p>
                                  <p>
                                      <input type="submit" class="btn btn-primary" name="aceptarFecha" id="aceptarFecha" value="Aceptar"/>
                                      
                                      <input type="reset"class="btn btn-default" name="btnVover2" id="btnVover2" value="Limpiar Formulario" />
                                  </p>
                            </form>          
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->      
            </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
   <!-- <script src="js/jquery-1.10.2.js"></script>-->
   
    <!--script src="../Librerias/js/bootstrap.min.js"></script-->
    <script src="../Librerias/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="../Librerias/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../Librerias/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../Librerias/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="../Librerias/js/demo/dashboard-demo.js"></script>

</body>

</html>


