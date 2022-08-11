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
          <li><a class="nav-link scrollto " href="buscador.php">Buscador</a></li>
          <li><a class="nav-link scrollto " href="ingresodeStock.php">Ingreso de Stock</a></li>
          <li><a class="nav-link scrollto active" href="listadodelentes.php">Modificar lentes</a></li>
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
    
            <?php
                  include "conexion.php";

                  $id=$_REQUEST['id'];

                  $sql = "select * from marcos where id_marcos='$id' ";

                  $result = $conexion->query($sql);


                  $result = $conexion->query($sql);
                  if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {

                    echo "  <form action='modmarco.php' method='post'>

                            <div class='section-title'>
                                <h1>Modificar marco<span> ".$row['nombremarco']."</span></h1><br>
                                <h5>N° Serie<br> ".$row['numeroserie']."</h5>
                            </div>

                        <br><input type='hidden' id='id' name='id' value='".$row['id_marcos']."'>

                           <center><div class='form-row'> 

                                <div class='form-group col-md-3'>
                                    <label for='precio'><h6>Precio</h6></label>
                                    <input type='text' class='form-control' name='precio' id='precio' value='".$row['precio']."'  autocomplete='off' >
                                </div><br>
        
                                <div class='form-group col-md-3'>
                                    <label for='cantidad'><h6>Cantidad</h6></label>
                                    <input type='text' class='form-control' name='cantidad' id='cantidad' value='".$row['cantidad']."' placeholder='3' autocomplete='off' >
                                </div><br>

                              

                            </div><br>
                            <button type='submit' class='btn btn-primary'>Actualizar</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href='listadodelentes.php' class='btn btn-secundary'>Cancelar</a></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            ";
                            

                  }
                  } else {

                  echo("<center><h1>Inventario <span>vacio</span></h1></center> ");
                  
                  }
                  $conexion->close();

              ?>
                    

            
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