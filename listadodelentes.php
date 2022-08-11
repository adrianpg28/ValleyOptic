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
          <li><a class="nav-link scrollto" href="buscador.php">Buscador</a></li>
          <li><a class="nav-link scrollto " href="ingresodeStock.php">Ingreso de Stock</a></li>
          <li><a class="nav-link scrollto  active" href="listadodelentes.php">Listado lentes</a></li>
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
            <!-- Formulario -->
            <div class="form-row">
                <center><form action="buscador_lentes1.php" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="nombremarco"><h6>Nombre marco</h6></label>
                        <input type="text"  class="form-control" name="nombremarco" id="nombremarco" placeholder="OPCION 1" autocomplete="off" style="text-transform:uppercase;" 
                           onkeyup="javascript:this.value=this.value.toUpperCase();"required>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form></center>
            </div>
        </div>
    </section><!-- End Hero --> 
    
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
      
        <div class="section-title">
          <h3><span>Inventario de lentes</span></h3>
        </div>
        

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">
            <?php echo "
                  
                  <li><div class='row'>
                    <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                      <h6>Lentes</h6>
                    </div>

                    <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                    <h6>Color</h6>  
                    </div>

                    <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                    <h6>Precio</h6>   
                    </div>
                    
                    <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                    <h6>Cantidad</h6>  
                    </div>

                    <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                    <h6>Categoria</h6> 
                    </div>
                    
                  </div></li>";
               ?>
              <?php
                  include "conexion.php";

                  $sql = "select * from marcos where nombremarco <> 'NINGUNO' order by nombremarco";

                  $result = $conexion->query($sql);


                  $result = $conexion->query($sql);
                  if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {

                  echo "
                  <section id='clients' class='clients section-bg'>
                    <div class='row'>
                      <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        ".$row['nombremarco']."  
                      </div>

                      <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        ".$row['color']."  
                      </div>

                      <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        ".$row['precio']."  
                      </div>
                      
                      <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        ".$row['cantidad']."  
                      </div>

                      <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        ".$row['tipo']."  
                      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        <a class='btn btn-primary' href='form_mod_marco.php?id=".$row['id_marcos']."' target='_self'>Modificar</a> 
                      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <div class='col-lg-1 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                        <a onclick='return confirmDelete();' class='btn btn-secundary' href='eliminarmarco.php?id=".$row['id_marcos']."' target='_self'>Eliminar</a> 
                      </div>
                          
                    </div>
                    
                  </section><br>
                  ";


                  }
                  } else {

                  echo("<br><center><h1>Inventario <span>vacio</span></h1></center> ");
                  }
                  $conexion->close();

              ?>
            </ul>
          </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </section>
  
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