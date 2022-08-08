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
              <h4 class="page-title">Nivel 1 (Matro-natación)</h4>
            </div>
          </div>

          <br>

          <div class="col-lg-12">
                            <div class="panel panel-border panel-info">
                                
                                <div class="panel-heading">
                           
                                    <h3 class="panel-title">Listado de Alumnos Del Nivel 1</h3>
                                    </div>
                                    
                                
                                <div class="table-responsive">
                                
                                    <div class="panel-body">
                                    <p class="page-text" >La matronatación es ideal para los bebés de 6 a 36 meses debido a que su sistema inmunológico ha madurado y tienen menos riesgos de padecer alguna enfermedades; además este entrenamiento permite la estimulación acuática mediante juegos para que puedan aprender a flotar y moverse por el agua, es importante que los padres siempre se encuentren presentes y puedan ayudar a sus hijos.</p>
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