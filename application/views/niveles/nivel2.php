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
                <br>s
              <h4 class="page-title">Nivel 2 (Personalizado)</h4>
            </div>
          </div>

          <br>

          <div class="col-lg-12">
                            <div class="panel panel-border panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Listado de Alumnos Del Nivel 2</h3>
                                </div>    
                                <div class="table-responsive">
                                    <div class="panel-body">
                                    <p class="page-text" >Las natación es capaz de mejorar la coordinación y equilibrio de los niños, pero no es sino hasta que el aparato locomotor se encuentra los suficientemente desarrollado cuando pueden comenzar las clases de natación para niños; mientras son bebés lo principal es que aprendan a adaptarse al agua, pero cuando empiezan a poder controlar sus movimientos pueden aprender las técnicas adecuadas de natación. Por lo regular las edades de los niños abarcan desde los 3 hasta los 6 años</p>
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