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
          <li><a class="nav-link scrollto active" href="ingresoPaciente.php">Ingreso pacientes</a></li>
          <li><a class="nav-link scrollto" href="buscador.php">Buscador</a></li>
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
        <h2><span>Datos personales</span></h2>
        <!-- Formulario -->
        <div class="form-row">
            <form action="insertpaciente.php" method="post" enctype="multipart/form-data"> 
                <div class="form-group col-md-6">
                    <label for="nombre"><h6>Nombre Apellido</h6></label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Apellido" autocomplete="off" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="rutp"><h6>RUT</h6></label>
                    <input type="text" minlength="10" maxlength="10" class="form-control" name="rutp" id="rutp" placeholder="19448768-1" autocomplete="off" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="direccion"><h6>Dirección</h6></label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Avenida 1234" autocomplete="off" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="comuna"><h6>Comuna</h6></label>
                    <input type="text" class="form-control" name="comuna" id="comuna" placeholder="San Felipe" autocomplete="off" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="email"><h6>Email</h6></label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" autocomplete="off">
                </div>

                <div class="form-group col-md-6">
                    <label for="telefono"><h6>Número de teléfono</h6></label>
                    <input type="text" value="+56 9" minlength="13" maxlength="13" class="form-control" name="telefono" id="telefono" placeholder="+569 4033 4682" autocomplete="off">
                </div>

                <!-- Datos sobre los lentes -->
                <br>
                <h2><span>Ingreso cristales y lentes</span></h2>
                <h2> Para lejos </h2>
                    <h5> Ojo derecho </h5><br>
                        <div class="form-group col-md-6">
                            <label for="lejosojoderechoESF"><h6>Esfera</h6></label>
                            <input type="text" class="form-control" name="lejosojoderechoESF" id="lejosojoderechoESF" value="-" placeholder="Esfera Derecho" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lejosojoderechoCYL"><h6>Cilindro</h6></label>
                            <input type="text" class="form-control" name="lejosojoderechoCYL" id="lejosojoderechoCYL" value="-" placeholder="Cilindro Derecho" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lejosojoderechoEJE"><h6>Eje</h6></label>
                            <input type="text" class="form-control" name="lejosojoderechoEJE" id="lejosojoderechoEJE" value="-" placeholder="Eje Derecho" autocomplete="off">
                        </div>
                    <br>
                    <h5> Ojo izquierdo </h5>
                        <div class="form-group col-md-6">
                            <label for="lejosojoizquierdoESF"><h6>Esfera</h6></label>
                            <input type="text" class="form-control" name="lejosojoizquierdoESF" id="lejosojoizquierdoESF" value="-" placeholder="Esfera Izquierdo" autocomplete="off" > 
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lejosojoizquierdoCYL"><h6>Cilindro</h6></label>
                            <input type="text" class="form-control" name="lejosojoizquierdoCYL" id="lejosojoizquierdoCYL" value="-" placeholder="Cilindro Izquierdo" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lejosojoizquierdoEJE"><h6>Eje</h6></label>
                            <input type="text" class="form-control" name="lejosojoizquierdoEJE" id="lejosojoizquierdoEJE" value="-" placeholder="Eje Izquierdo" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lejosDP"><h6>Distancia pupilar</h6></label>
                            <input type="text" class="form-control" name="lejosDP" id="lejosDP" value="-" placeholder="DP" autocomplete="off">
                        </div> 

                        <div class="form-group col-md-6">
                            <label for="lejosarmazon"><h6>Armazón</h6></label>
                            <input value="NINGUNO" type="text"  class="form-control"  name="lejosarmazon" id="lejosarmazon"  placeholder="Armazón" style="text-transform:uppercase;" 
                           onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
                        </div> 
                        
                        <br><h6>Tipo de cristal<h6>
                        
                        <select class="custom-select" size="1" name="lejoscristales" id="lejoscristales">
                            <option value="NINGUNO">Ninguno</option>
                            <option value="ANTI REFLEJO">Anti reflejo</option>
                            <option value="FILTRO LUZ AZUL">Filtro Luz Azul</option>
                            <option value="FOTOCROMATICO - GRIS">Fotocromático - Gris</option>
                            <option value="FOTOCROMATICO - CAFE">Fotocromático - Café</option>
                        </select>

            <br><br><br><h2> Para cerca</h2>
                        <h5> Ojo derecho </h5><br>

                        <div class="form-group col-md-6">
                            <label for="cercaojoderechoESF"><h6>Esfera</h6></label>
                            <input type="text" class="form-control" name="cercaojoderechoESF" id="cercaojoderechoESF" value="-" placeholder="Esfera Derecho" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cercaojoderechoCYL"><h6>Cilindro</h6></label>
                            <input type="text" class="form-control" name="cercaojoderechoCYL" id="cercaojoderechoCYL" value="-" placeholder="Cilindro Derecho" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cercaojoderechoEJE"><h6>Eje</h6></label>
                            <input type="text" class="form-control" name="cercaojoderechoEJE" id="cercaojoderechoEJE" value="-" placeholder="Eje Derecho" autocomplete="off">
                        </div>
                    
                        <br><h5> Ojo izquierdo </h5>

                        <div class="form-group col-md-6">
                            <label for="cercaojoizquierdoESF"><h6>Esfera</h6></label>
                            <input type="text" class="form-control" name="cercaojoizquierdoESF" id="cercaojoizquierdoESF" value="-" placeholder="Esfera Izquierdo" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cercaojoizquierdoCYL"><h6>Cilindro</h6></label>
                            <input type="text" class="form-control" name="cercaojoizquierdoCYL" id="cercaojoizquierdoCYL" value="-" placeholder="Cilindro Izquierdo" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cercaojoizquierdoEJE"><h6>Eje</h6></label>
                            <input type="text" class="form-control" name="cercaojoizquierdoEJE" id="cercaojoizquierdoEJE" value="-" placeholder="Eje Izquierdo" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cercaDP"><h6>Distancia pupilar</h6></label>
                            <input type="text" class="form-control" name="cercaDP" id="cercaDP" value="-" placeholder="DP" autocomplete="off">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cercaarmazon"><h6>Armazón</h6></label>
                            <input value="NINGUNO" type="text" class="form-control" name="cercaarmazon" id="cercaarmazon" value="NINGUNO"placeholder="Armazón" style="text-transform:uppercase;" 
                           onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
                        </div> 

                        <br><h6>Tipo de cristal</h6>
                        
                        <select class="custom-select" size="1" name="cercacristales" id="cercacristales">
                            <option value="NINGUNO">Ninguno</option>
                            <option value="ANTI REFLEJO">Anti reflejo</option>
                            <option value="FILTRO LUZ AZUL">Filtro Luz Azul</option>
                            <option value="FOTOCROMATICO - GRIS">Fotocromático - Gris</option>
                            <option value="FOTOCROMATICO - CAFE">Fotocromático - Café</option>
                        </select><br><br>

                        <h6>Estado</h6>

                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="estado" id="estado" value="Enviado a Confección" autocomplete="off" required>
                          <label class="form-check-label" for="estado" required>Enviado a Confección</label>
                        </div>

                
                <br><br><button type="submit" class="btn btn-primary">Enviar Orden</button>
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