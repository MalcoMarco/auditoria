<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auditoria de Sistemas</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!--Nuestro Slider-->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top" style="background: #3c3d41; border-radius: 0px;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Auditoria</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                <?php 

                  echo $this->Html->link('Auditar',['controller' => 'empresas','action' => 'add'],
                      ['target' => '_blank']
                  );

                 ?>
                 </li>
                <li><a href="#ancla">Contactos</a></li>
              </ul>

            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/fondo5.jpg" alt="Auditoria UNS">
          <div class="container">
            <div class="carousel-caption">
              <h1>Auditoria de Calidad de Software</h1>
              <p>La Auditoría de Software es un trabajo interno o externo que consiste en identificar los activos de software y hardware instalados en una organización, equipo o dispositivo para generar un inventario.</p>
              <p><?php 

                  echo $this->Html->link('Auditar',['controller' => 'empresas','action' => 'add'],
                      ['class' => 'btn btn-lg btn-warning', 'target' => '_blank']
                  );

                 ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/fondo4.jpg" alt="Auditoria UNS">
          <div class="container">
            <div class="carousel-caption">
              <h1>Software de auditoria</h1>
              <p>Son una herramienta de gran valor para la mejora continua gracias a su carácter de actividad de análisis que permite comprobar el seguimiento y la verificación de la implementación eficaz del sistema de gestión, entre otros aspectos.</p>
              <p><a class="btn btn-lg btn-warning" href="datos_generales.html" role="button">AUDITAR</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/fondo6.jpg" alt="Auditoria UNS">
          <div class="container">
            <div class="carousel-caption">
              <h1>Aspectos de auditoria de Software</h1>
              <p>Es el conjunto de técnicas, actividades y procedimientos, destinados a analizar, evaluar, verificar y recomendar en asuntos relativos a la planificación, control, eficacia, seguridad y adecuación del servicio informático en la empresa, por lo que comprende un examen metódico, puntual y discontinuo del servicio informático. </p>
              <p><a class="btn btn-lg btn-warning" href="datos_generales.html" role="button">AUDITAR</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->




    <div class="container text-center">
        <div class="row">
          <h1 class="page-header" style="color: #ffc107">AUDITORIA DE SOFTWARE</h1>
          <br>
        </div>
        <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/rawpixel-250087-unsplash.jpg" alt="Generic placeholder image" width="240" height="240">
          <h2>Objetivos</h2>
          <br>
          <p>El objetivo principal es revisar que software y hardware que tiene una organización y mejorar el rendimiento de las inversiones realizadas.</p>
          <br>
          <p><a class="btn btn-warning" href="#" role="button">Ver Detalles&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/helloquence-61189-unsplash.jpg" alt="Generic placeholder image" width="240" height="240">
          <h2>Componentes</h2>
          <br>
          <p>Todos los equipos físicos, virtuales, servidores, puestos de trabajo, dispositivos móviles y todo el software, incluyendo sistemas operativos y antivirus.</p>
          <br>
          <p><a class="btn btn-warning" href="#" role="button">Ver Detalles&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/rawpixel-550994-unsplash.jpg" alt="Generic placeholder image" width="240" height="240">
          <h2>Recursos Intervinientes</h2>
          <br>
          <p>Responsable de Sistemas es quién implantea, administra sistemas, aplicaciones y programas de software dentro de una organización.</p>
          <br>
          <p><a class="btn btn-warning" href="#" role="button">Ver Detalles&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>


<br>        <!----------- Footer ------------>
<br>        <!----------- Footer ------------>
<br>        <!----------- Footer ------------>
    <a name="ancla"></a>
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <h2>Auditoria</h2>
                    <p class="text-justify">El curso de auditoria de sistemas dictado en la Universidad Nacional del Santa, es un curso especializado, para la compresión del análisis de software, que son implementados en las empresas. De la mano de las Tecnologías de Información cada vez mas crecientes</p>
                    <p class="text-justify">© 2018 Nuevo Chimbote, Todos los derechos Reservados</p>
                </div>
                <div class="col-md-3 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-12">
                        <ul class="pages">
                            <li><a href="datos_generales.html"">AUDITAR</a></li>
                          <li><a href="index.html#ancla">CONTACTOS</a></li>
                          <li><a href="files/Cómo usar el sistema.pdf">AYUDA</a></li>
                          <li><a href="#">UNS</a></li>
                            <li><a href="#">CECOMP</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-social animated fadeInDown">
                    <h4>Redes Sociales</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Gmail</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Suscribite</h4>
                    <p>Te enviaremos información que actualizemos día a día todo al alcanze de un click</p>
                    <p>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Ingrese email...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                          </span>
                        </div><!-- /input-group -->
                     </p>
                </div>
            </div>
        </footer>
    

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</body>
</html>