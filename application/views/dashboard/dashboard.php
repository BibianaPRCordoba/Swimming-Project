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
                                <h4 class="page-title">Inicio</h4>

                            </div>
                        </div>

                        <br>

                         <div class="col-lg-12">
                          <div class="panel panel-border panel-info">
                              <div class="panel-heading">
                                  <h3 class="panel-title">Titulo</h3>
                              </div>
                              <div class="table-responsive">
                                <div class="panel-body">

                                  <div class="card-box">
                                    <div class="box-body">

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="text" required="" id="nombre" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Nombre">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="text" required="" id="apaterno" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Apellido paterno">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="text" required="" id="amaterno" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Apellido materno">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="text" required="" id="telefono" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Telefono">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="text" required="" id="email" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Correo Eléctronico">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="text" required="" id="username" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Nombre de Usuario">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="password" required="" id="password" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Contraeña">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-xs-12">
                                              <input class="form-control" type="text" required="" id="ocupacion" onkeypress="return verifyenterkeypressed(event)"
                                              placeholder="Ocupacion">
                                          </div>
                                      </div>

                                      <div align="center">
                                        <button class="btn btn-primary waves-effect waves-light" onClick="GuardarUsuario();">Guardar</button>
                                      </div>

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
