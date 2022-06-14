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
              <h4 class="page-title">FICHA INFORMATIVA PARA PADRES DE FAMILIA</h4>
            </div>
          </div>

          <br>

          <div class="col-lg-12">
            <div class="panel panel-border panel-info">
              <div class="panel-heading">
                <?php foreach($calendarios as $cal):?>
                  <h3 class="panel-title text-center">FICHA DEL ALUMNO:<?=$cal->nombre.' '.$cal->apaterno.' '.$cal->amaterno?></h3>
                <?php endforeach;?>
              </div>
              <div class="panel-body">
                <!-- form start -->
                <div class="card" style="width: 24rem;">
                 <!--  <img src="..." class="card-img-top" alt="..."> -->
                  <div class="card-body">
                    <?php foreach($calendarios as $cal):?>
                      <tr>
                       <div class="d-flex w-100 justify-content-between">
                          <h3 class="panel-title">Edad: <?=$cal->edad?> </h3>
                          <h3 class="panel-title">Maestro encargado: <?=$cal->maestro?> </h3>
                          <h3 class="panel-title">Horario de clases: <?=$cal->horario?> </h3>
                        </div>
                        <td><img src="https://www.google.com/search?q=ariana+grande&rlz=1C1ONGR_esMX1005MX1005&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjpqvHjnq34AhVhDEQIHQ7QCFEQ_AUoAXoECAIQAw&biw=1366&bih=663&dpr=1#imgrc=6lILwVRGJcyRGM" class="thumbnail" Width="150" height="100" alt=""></td> 
                      </tr>
                    <?php endforeach;?>
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
<!-- <?=base_url('archivos/'.$cal->imagen);?> -->