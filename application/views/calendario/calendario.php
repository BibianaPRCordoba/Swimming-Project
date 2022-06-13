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
    <div class="content-page">
        <!-- Start content -->
      <div class="content">
        <div class="container">
          <!-- Page-Title -->
          <div class="row">
            <div class="col-sm-12">
              <h4 class="page-title">HORARIOS</h4>
            </div>
          </div>

          <br>

          <div class="col-lg-4">
            <div class="panel panel-border panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">HORARIO DEL ALUMNO: </h3>
              </div>
              <div class="panel-body">
                <!-- form start -->
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="card-text">
                      <?php foreach($calendarios as $cal):?>
                      <tr>
                          <td><?=$cal->nombre_usuario.' '.$user->apellidos_usuario?></td>
                          <td><?=$cal->correo_usuario?></td>
                          <td><img src="<?=base_url('archivos/'.$cal->imagen);?>" class="thumbnail" Width="150" height="100" alt=""></td>
                          
                      </tr>
                  <?php endforeach;?>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div> <!-- container -->
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
