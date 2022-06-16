<!-- Content Wrapper. Contains page content -->
     
<?php
    /* Dependencias requeridas para el funcionamiento de la DataTable */
    /* ==============================================================
        <---  CSS TEMPLATE  --->
        ============================================================== */
        echo link_tag('assets/darktemplate/plugins/bootstrap-sweetalert/sweet-alert.css');            
    /* ==============================================================
        <---  JS TEMPLATE  --->
        ============================================================== */
        echo script_tag("assets/darktemplate/plugins/bootstrap-sweetalert/sweet-alert.js");
        echo script_tag("assets/darktemplate/pages/jquery.sweet-alert.init.js");          
    /* ==============================================================
        <---  JS MYAPP  --->
        ============================================================== */
        echo script_tag("assets/myapp/js/MY_Functions.js");
?>

<html>
    <head>
        <meta charset="utf-8">        
    </head>
    <script>
        var resizefunc = [];
        $(document).ready(function() {

        });
    </script>
    <body class="fixed-left">
        <!-- Start - Wrapper -->
        <div id="wrapper">
            <!-- Start - Right Content here -->                   
            <!-- <div class="content-page"> -->
                <!-- Start - Content -->
                <div class="content">
                    <!-- Start - Container -->
                    <div class="container">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <br>
                                <br>
                                <br>
                            <h4 class="page-title">Registrar Alumnos</h4>                               
                            </div>
                        </div>
                        <br>
                        <!-- Start - Form Padres -->
                        <div class="col-lg-4">
                            <div class="panel panel-border panel-info">
                                <div class="panel-heading"> 
                                    <h3 class="panel-title" align="center">Registrar</h3>
                                </div>
                                <div class="panel-body">                                                
                                    <div class="box-body">
                                        <div class="form-group ">
                                            <label for="nombre">Nombre</label>
                                            <input class="form-control" type="text" required="" id="id_alumno" placeholder="Nombre" style="display:none">
                                            <input class="form-control" type="text" required="" id="nombre" placeholder="Nombre">
                                        </div>

                                        <div class="form-group ">   
                                            <label for="nombre">Apellido paterno</label>
                                            <input class="form-control" type="text" required="" id="apaterno" placeholder="Apellido paterno">
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre">Apellido Materno</label>
                                            <input class="form-control" type="text" required="" id="amaterno" placeholder="Apellido Materno">
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre">Telefono de Emergencia</label>
                                            <input class="form-control" type="text" required="" id="tel_emergencia" placeholder="Telefono de Emergencia">
                                        </div>

                                        <div class="form-group">
                                            <label for="nivel">Nivel</label>
                                            <select id="nivel" name="nivel" class="form-control" style="">
                                                <option value="" >Elije Nivel</option>                                             
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                            </select>
                                        </div>                                    

                                        <div class="form-group" id="div-estado" style="display:none">
                                            <label for="div-estado" >Estado</label>
                                            <select id="estado" name="estado" class="form-control">
                                                <option value="" >Elije Estado</option>
                                                <option value="1" >Activo</option>
                                                <option value="0" >Inactivo</option>                             
                                            </select>
                                        </div>

                                        <div class="form-group" id="div-padre" style="display:none">
                                            <label for="padre">Padre</label>
                                            <select id="padre" name="padre" class="form-control">
                                                <option value="" >Elije Padre</option>
                                                <?php
                                                    $valores = count($padres);
                                                    for ($i=0; $i < $valores ; $i++) {
                                                        $res = $padres[$i];
                                                        $id = $res -> id_padre;
                                                        $nombre = $res -> nombre;
                                                        $apaterno = $res -> apaterno;
                                                        $amaterno = $res -> amaterno;
                                                        $nombrecompleto;
                                                        $nombrecompleto = $nombre . ' ' . $apaterno . ' ' . $amaterno;

                                                        echo "<option value='$id' >$nombrecompleto</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>        
                                    <div align="center">
                                        <button class="btn btn-primary waves-effect waves-light" onClick="GuardarAlumno();" id="btn-guardar">Guardar</button>
                                    </div>
                                    <div align="center">
                                        <button class="btn btn-primary waves-effect waves-light" onClick="ActualizarAlumno();" style="display:none" id="btn-update">Actualizar</button>
                                    </div>                                                
                                </div>                                                    
                            </div>
                        </div>
                        <!-- End - Form Padres -->

                        <!-- Start - Table Padres -->
                        <div class="col-lg-8">
                            <div class="panel panel-border panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Listado de Alumnos</h3>
                                </div>
                                <div class="table-responsive">
                                    <div class="panel-body">
                                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Telefono</th>
                                                    <th>Nivel</th>
                                                    <th>Editar</th>
                                                    <th>Borrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $valores = count($ninos);
                                                    for ($i=0; $i < $valores ; $i++) { 
                                                        $res = $ninos[$i];
                                                        $id = $res -> id_nino;
                                                        $nombre = $res -> nombre_nino;
                                                        $apaterno= $res -> apaterno_nino;
                                                        $amaterno = $res -> amaterno_nino;
                                                        $telefono = $res -> tel_emergencia;
                                                        $nivel = $res -> nivel;

                                                        $nombre_completo = $nombre . ' ' .$apaterno. ' ' .$amaterno;

                                                        echo "
                                                        <tr>
                                                        <td>$nombre_completo</td>
                                                        <td>$telefono</td>
                                                        <td>$nivel</td>
                                                        ";

                                                        echo "<td>";
                                                        echo "<a href='#' id='Editar' onclick='EditarAlumno($id)'><i class='fa fa-pencil'></i> </a>
                                                        </td>";
                                                        echo "<td>";
                                                        echo "<a href='#' id='Borrar' onclick='BorrarAlumno($id)'><i class='fa fa-close'></i> </a>
                                                        </td>";
                                                        
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End - Table Padres -->
                    </div>
                    <!-- End - Container -->
                </div>
                <!-- End - Content -->

                <!-- Start - Footer -->
                <footer class="footer">
                    <?= date('Y')?> &copy; 
                </footer>
                <!-- End - Footer -->
            </div>
            <!-- End - Right content here -->
        </div>
        <!-- End - Wrapper -->
    </body>
</html>