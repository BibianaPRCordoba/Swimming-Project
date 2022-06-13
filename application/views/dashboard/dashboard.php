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
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/myapp/css/dashboard.css" media="screen" />

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
                        <section id="page-title">
                          <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Inicio</h4>
                            </div>
                          </div>
                          <br>
                          <br>
                        </section>
                        <div class="col-lg-12">
                          <div class="panel panel-border panel-info">
                            <div class="table-responsive">
                              <!-- Panel Title -->
                              <div class="panel-heading">
                                <h3 class="panel-title">Bienvenido!</h3>
                              </div>

                              <div class="panel-body">
                                <h1>
                                  Bienvenido a nuestras clases de natación!
                                </h1>

                                <!-- Features -->                        
                                <section id="features">
                                  <!-- #1 -->
                                  <div class="card-box">
                                    <div class="box-body">
                                      <h3 class="feature-title">
                                        Horario flexible
                                      </h3>
                                      <p class="feature-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis pellentesque urna, et bibendum mi euismod eget. Phasellus tincidunt in libero at suscipit. Nam sagittis, neque porta consequat tristique, turpis arcu feugiat risus, at commodo nisl risus quis ligula. In sodales placerat est, vel dignissim nisl luctus nec. Nullam vel vulputate magna. Vivamus vitae semper enim. Vestibulum quis scelerisque enim. Vivamus nisi ligula, imperdiet at ultricies ac, varius faucibus sem. In id tincidunt erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam arcu neque, posuere in venenatis ut, rutrum ac arcu. Praesent lectus nisl, pellentesque ac finibus non, rhoncus non mi. In lectus turpis, blandit mattis orci vitae, vulputate elementum enim. Curabitur vehicula egestas facilisis. Praesent ut luctus purus.
                                      </p>
                                    </div>
                                  </div>
                                  <!-- #2 -->
                                  <div class="card-box">
                                    <div class="box-body">
                                      <h3 class="feature-title">
                                        Maestros certificados
                                      </h3>
                                      <p class="feature-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis pellentesque urna, et bibendum mi euismod eget. Phasellus tincidunt in libero at suscipit. Nam sagittis, neque porta consequat tristique, turpis arcu feugiat risus, at commodo nisl risus quis ligula. In sodales placerat est, vel dignissim nisl luctus nec. Nullam vel vulputate magna. Vivamus vitae semper enim. Vestibulum quis scelerisque enim. Vivamus nisi ligula, imperdiet at ultricies ac, varius faucibus sem. In id tincidunt erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam arcu neque, posuere in venenatis ut, rutrum ac arcu. Praesent lectus nisl, pellentesque ac finibus non, rhoncus non mi. In lectus turpis, blandit mattis orci vitae, vulputate elementum enim. Curabitur vehicula egestas facilisis. Praesent ut luctus purus.
                                      </p>
                                    </div>
                                  </div>
                                  <!-- #3 -->
                                  <div class="card-box">
                                    <div class="box-body">
                                      <h3 class="feature-title">
                                        Seguridad
                                      </h3>
                                      <p class="feature-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis pellentesque urna, et bibendum mi euismod eget. Phasellus tincidunt in libero at suscipit. Nam sagittis, neque porta consequat tristique, turpis arcu feugiat risus, at commodo nisl risus quis ligula. In sodales placerat est, vel dignissim nisl luctus nec. Nullam vel vulputate magna. Vivamus vitae semper enim. Vestibulum quis scelerisque enim. Vivamus nisi ligula, imperdiet at ultricies ac, varius faucibus sem. In id tincidunt erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam arcu neque, posuere in venenatis ut, rutrum ac arcu. Praesent lectus nisl, pellentesque ac finibus non, rhoncus non mi. In lectus turpis, blandit mattis orci vitae, vulputate elementum enim. Curabitur vehicula egestas facilisis. Praesent ut luctus purus.
                                      </p>
                                    </div>
                                  </div>
                                </section>

                                <div class="column">
                                  <section class="video-section">
                                    <h2 id="video-title">
                                      Que esperas para ser como ellos!
                                    </h2>
                                    <div class="video-natacion">
                                      <iframe width="560" height="315" src="https://www.youtube.com/embed/ikg5HEDg0zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                  </section>

                                  <!-- Mapa -->
                                  <section class="mapa-section">
                                    <h2 id="video-title">
                                      Ven a vernos pronto, te estaremos esperando
                                    </h2>
                                    <div class="mapa">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19259261.85384036!2d-46.03760623672876!3d-53.89648631545837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb09dff882a7809e1%3A0xb08d0a385dc8c7c7!2z5Y2X5qW15aSn6Zm4!5e0!3m2!1sja!2smx!4v1654798002741!5m2!1sja!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                  </section>
                                </div>
                                <!-- Video -->
                                

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
