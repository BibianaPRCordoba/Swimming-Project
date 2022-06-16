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
              <h4 class="page-title">FICHA INFORMATIVA PARA MAESTROS</h4>
            </div>
          </div>

          <br>

          <div class="col-lg-12">
            <div class="panel panel-border panel-info">
              <div class="panel-heading">
                <?php foreach($calendariosmaestros as $calm):?>
                  <h3 class="panel-title text-center">FICHA DEL MAESTROS: <?=$calm->nombre.' '.$calm->apaterno.' '.$calm->amaterno?></h3>
                <?php endforeach;?>
              </div>
              <div class="panel-body">


                <!-- form start -->
                <?php foreach($calendariosmaestros as $calm):?>
                <div class="card" style="width: 24rem;">
                  <div class="card-body">
                      <tr>
                       <div class="d-flex w-100 justify-content-between">
                          <h3 class="panel-title">Nivel: <?=$calm->nivel?> </h3>
                            <?php if($calm->nivel == '1') { ?>
                                <h3 class="panel-title">Horario de clases: 9am-10am</h3>
                            <?php } ?>
                            <?php if(@$calm->nivel == '2') { ?>
                                <h3 class="panel-title">Horario de clases: 11am-12pm</h3>
                            <?php } ?>
                            <?php if(@$calm->nivel == '3') { ?>
                                <h3 class="panel-title">Horario de clases: 1pm-2pm</h3>
                            <?php } ?>
                        </div>
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
<!--  -->