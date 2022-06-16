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
  <!-- Begin page -->
  <div id="wrapper">
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!-- <div class="content-page"> -->
        <!-- Start content -->
      <div class="content">
        <div class="container">
          <!-- Page-Title -->
          <div class="row">
            <div class="col-sm-12">
                <br>
                <br>
                <br>
              <h4 class="page-title">Nivel 3 (Grupo)</h4>
            </div>
          </div>

          <br>

          <div class="col-lg-12">
                            <div class="panel panel-border panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Listado de Alumnos Del Nivel 3</h3>
                                </div>    
                                <div class="table-responsive">
                                    <div class="panel-body">
                                    <p class="page-text" >Las natación para una competencia requiere de un entrenamiento constante que desarrolle la fuerza y la velocidad; ya sea para un triatlón de atletas infantiles, juveniles o másteres, se requiere de un entrenador profesional que brinde una rutina de ejercicios que sean variados y de gran intensidad. El entrenador será el encargado de supervisar los resultados obtenidos para cambiar o mejorar las rutinas y alcanzar los objetivos del equipo.</p>
                                    <br>
                                        <table id="datatable" class="table table-striped table-bordered table-responsive">   
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Nivel</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $valores = count($ninos);
                                                    for ($i=0; $i < $valores ; $i++) { 
                                                        $res = $ninos[$i];
                                                        $nombre = $res -> nombre_nino;
                                                        $apaterno= $res -> apaterno_nino;
                                                        $amaterno = $res -> amaterno_nino;;
                                                        $nivel = $res -> nivel;

                                                        $nombre_completo = $nombre . ' ' .$apaterno. ' ' .$amaterno;

                                                        echo "
                                                        <tr>
                                                        <td>$nombre_completo</td>
                                                        <td>$nivel</td>
                                                        ";

                                                        
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
      </div> <!-- content -->

      <footer class="footer">
           <?= date('Y')?> &copy;
      </footer>

    </div>
<!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->



  </div>
  <!-- END wrapper -->

</body>
</html>
<!-- <?=base_url('archivos/'.$cal->imagen);?> -->