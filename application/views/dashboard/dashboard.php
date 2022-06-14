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
                                  ¡Bienvenido a nuestras clases de natación de nadando ando!
                                </h1>

                                <!-- Features -->                        
                                <section id="features">
                                  <!-- #1 -->
                                  <div class="card-box">
                                    <div class="box-body">
                                      <h3 class="feature-title">
                                        ¿Cómo trabajamos? 
                                      </h3>
                                      <p class="feature-text">
                                        Con más de 20 años de experiencia, en Nadando Ando, ofrecemos clases personalizadas, de grupo, matro-natación y más. 
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
                                       Contamos con maestros certificados en la enseñanza, al igual que en primeros auxilios. 
                                      </p>
                                    </div>
                                  </div>
                                  <!-- #3 -->
                                  <div class="card-box">
                                    <div class="box-body">
                                      <h3 class="feature-title">
                                        Sobre las clases...
                                      </h3>
                                      <h2>Matro-natación:</h2>
                                      <p class="feature-text">
                                        La matronatación es ideal para los bebés de 6 a 36 meses debido a que su sistema inmunológico ha madurado y tienen menos riesgos de padecer alguna enfermedades; además este entrenamiento permite la estimulación acuática mediante juegos para que puedan aprender a flotar y moverse por el agua, es importante que los padres siempre se encuentren presentes y puedan ayudar a sus hijos.
                                      </p>
                                      <h2>Personalizado:</h2>
                                      <p class="feature-text">
                                        Las natación es capaz de mejorar la coordinación y equilibrio de los niños, pero no es sino hasta que el aparato locomotor se encuentra los suficientemente desarrollado cuando pueden comenzar las clases de natación para niños; mientras son bebés lo principal es que aprendan a adaptarse al agua, pero cuando empiezan a poder controlar sus movimientos pueden aprender las técnicas adecuadas de natación. Por lo regular las edades de los niños abarcan desde los 3 hasta los 6 años
                                      </p>
                                      <h2>Grupo:</h2>
                                      <p class="feature-text">
                                        Las natación para una competencia requiere de un entrenamiento constante que desarrolle la fuerza y la velocidad; ya sea para un triatlón de atletas infantiles, juveniles o másteres, se requiere de un entrenador profesional que brinde una rutina de ejercicios que sean variados y de gran intensidad. El entrenador será el encargado de supervisar los resultados obtenidos para cambiar o mejorar las rutinas y alcanzar los objetivos del equipo.
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
