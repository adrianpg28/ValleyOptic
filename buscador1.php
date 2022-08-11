<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Valley Optic</title>
  <script type="text/javascript">
        function confirmDelete() {
            var confirmar = confirm("¿Realmente desea eliminarlo? ");
            if (confirmar) {
                return true;
            } else {
                return false;
            }
        }
    </script>
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
<style>


.btn-secundary {
    color: #fff;
    background-color: red;
    border-color: red;
}

.btn-qwer {
    color: #fff;
    background-color: green;
    border-color: green;
}

  </style>
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
          <li><a class="nav-link scrollto active" href="buscador.php">Buscador</a></li>
          <li><a class="nav-link scrollto " href="ingresodeStock.php">Ingreso de Stock</a></li>
          <li><a class="nav-link scrollto" href="listadodelentes.php">Listado lentes</a></li>
          <li><a class="nav-link scrollto " href="rendicion.php">Rendicion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>


  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="200">
        <a href="buscador.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
            <!-- Formulario -->
            <div class="form-row">
                <center><form action="buscador1.php" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="rutp"><h6>RUT</h6></label>
                        <input type="text" minlength="10" maxlength="10" class="form-control" name="rutp" id="rutp" placeholder="19448768-1" autocomplete="off" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form></center>
            </div>
        </div>
    </section><!-- End Hero --> 
    
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Registro</span></h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">
              <?php
              echo "
                    <li>
                      <div class='row'>
                        <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        <h6>RUT</h6>
                        </div>

                        <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        <h6>Nombre</h6>
                        </div>

                        <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        <h6>Fecha y Hora</h6>
                        </div>
                        
                        <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        <h6>Estado</h6>
                        </div>
                      </div></li>";
              
              ?>
                <?php
                    include "conexion.php";
                    
                    $rut=$_REQUEST['rutp'];

                    $sql = "select * from pacientes where rutp='$rut' order by id_atencion DESC limit 20";

                    $result = $conexion->query($sql);


                    $result = $conexion->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {

                        echo "
                          <section id='clients' class='clients section-bg'>
                            <div class='row'>
                              
                              <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                                  ".$row['rutp']."
                              </div>

                              <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                                ".$row['nombre']."  
                              </div>

                              <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                                ".$row['fecha_aten']."  
                              </div>
                              
                              <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                                ".$row['estado']."  
                              </div>

                              <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                                <a class='btn btn-primary' href='ordenn.php?id=".$row['id_atencion']."' target='_self'>Orden</a> 
                              </div>

                              <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                                <a class='btn btn-qwer' href='modestado.php?id=".$row['id_atencion']."' target='_self'>Estado</a> 
                              </div>
                              &nbsp;&nbsp;
                              <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                                <a onclick='return confirmDelete();' class='btn btn-secundary' href='eliminarregistro.php?id=".$row['id_atencion']."' target='_self'>Eliminar</a> 
                              </div>
                            </div>
                          </section>
                          ";                        
                          }
                      } else {

                        echo("<br><center><h4>No existen <span>registros</span></h4></center>");
                    }
                    $conexion->close();

                ?>      
            </ul>
          </div>
        </div>

      </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>
  
  </main><!-- End #main -->
    

    
   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Proyecto <strong><span>Valley Optic</span></strong>. Universidad Playa Ancha
      </div>
      <div class="credits">
        Diseñado por <a href="#">Adrián Puentes - Diego Allende</a>
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