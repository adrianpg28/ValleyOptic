<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Valley Optic</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="indexa.html">Valley Optic<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="indexa.html">Inicio</a></li>
          <li><a class="nav-link scrollto " href="ingresoPaciente.php">Ingreso pacientes</a></li>
          <li><a class="nav-link scrollto " href="buscador.php">Buscador</a></li>
          <li><a class="nav-link scrollto " href="ingresodeStock.php">Ingreso de Stock</a></li>
          <li><a class="nav-link scrollto " href="listadodelentes.php">Listado lentes</a></li>
          <li><a class="nav-link scrollto active" href="rendicion.php">Rendicion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>


  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container" data-aos="zoom-out" data-aos-delay="200">
        <h2><span>Ingreso Entrega De Lentes</span></h2>
        <!-- Formulario -->
        <div class="form-row">
            <form action="insertrendicion.php" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-5">
                    <label for="entregaefectivo"><h6>Entrega Lentes Efectivo</h6></label>
                    <input type="text" class="form-control" name="entregaefectivo" id="entregaefectivo" placeholder="$" autocomplete="off" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="entregatransbank"><h6>Entrega Lentes Transbank</h6></label>
                    <input type="text" class="form-control" name="entregatransbank" id="entregatransbank" placeholder="$" autocomplete="off" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="entregatransferencia"><h6>Depositos - Transferencia</h6></label>
                    <input type="text" class="form-control" name="entregatransferencia" id="entregatransferencia" placeholder="$" autocomplete="off" required>
                </div>

                
                <br>
                <h2><span>Ingreso Ventas</span></h2>

                <div class="form-group col-md-5">
                    <label for="ventasefectivo"><h6>Ventas Efectivo</h6></label>
                    <input type="text" class="form-control" name="ventasefectivo" id="ventasefectivo" placeholder="$" autocomplete="off" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="ventastransbank"><h6>Ventas Transbank</h6></label>
                    <input type="text" class="form-control" name="ventastransbank" id="ventastransbank" placeholder="$" autocomplete="off" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="ventastransferencia"><h6>Ventas Depositos - Transferencia</h6></label>
                    <input type="text" class="form-control" name="ventastransferencia" id="ventastransferencia" placeholder="$" autocomplete="off" required>
                </div>
                <br>
                <h2><span>Gastos</span></h2>

                <div class="form-group col-md-5">
                    <label for="gastospersonal"><h6>Personal</h6></label>
                    <input type="text" class="form-control" name="gastospersonal" id="gastospersonal" placeholder="$" autocomplete="off" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="gastosmateriales"><h6>Materiales - Otros</h6></label>
                    <input type="text" class="form-control" name="gastosmateriales" id="gastosmateriales" placeholder="$" autocomplete="off" required>
                </div>
                <br>

                    
                <br><br><button type="submit" class="btn btn-primary">Registar</button>
            </form>
        </div>
  </section><!-- End Hero -->
  </main><!-- End #main -->
    

    
   <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Proyecto <strong><span>Valley Optic</span></strong>. Universidad Playa Ancha
      </div>
      <div class="credits">
        Diseñado por <a href="https://bootstrapmade.com/">Adrián Puentes - Diego Allende</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  
  </body>
</html>