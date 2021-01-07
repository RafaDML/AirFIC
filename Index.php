<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Airbnb</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Multi - v2.1.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	
</head>
<body>
  <?php include 'Header.php'; ?>

   <div className='banner' class=""  style="
    position: relative;
    background: url(assets/img/airbnbhomeimg.jpg); padding-top: 90px; height: 60vh; margin-top: 12vh;">
            <div className='banner_info'>
            <h1 style="color: white; font-weight: bold; padding-left: 30px;">Viajar cerca está de moda</h1>
            </div>
            <div className='down_banner_info'>
                <strong>
                <p style="color: white;
                 padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 30px;
    width: 500px;">Quédate por un tiempo en un lugar nuevo. 
                    Descubre alojamientos cercanos donde vivir, trabajar o simplemente relajarte.
                </p>
                </strong>
                
            </div>
            <div className="boton_banner"style="padding-left: 50px;">
            <button className="boton" style="background-color: white;
    padding-top: 7px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 7px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    border-radius: 10px;
    color: gray;
    font-weight: bold;" >Explora los alrededores</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="singup.php" method="POST">
     <div class="form-group">
      <label for="user">Usuario:</label>
         <br/><input type="text" name="usuario" class="form-control">
      </div>
         <label for="password">Password:</label>
         <br/><input type="password" name="password" class="form-control"><br/>
         <label for="password">Nombre:</label>
         <br/><input type="text" name="nombre" class="form-control"><br/>
         <label for="example-date-input" class="">Fecha de nacimiento</label><br/>
          <input class="form-control" type="date" value="2011-08-19" id="fechanac"><br/>
          <label for="password">Correo:</label>
         <br/><input type="email" name="correo" placeholder="@gmail.com" class="form-control"><br/>

          <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Aceptar términos y condiciones</label><br/>
</div>
  
         <div class="form-group row"> 

  
   
 
</div>
        <input type="submit" value="Iniciar sesión" class="btn btn-block btn-danger login-btn" >
    </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="iniciarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
     <div class="form-group">
      <label for="user">Usuario:</label>
        <input type="text" name="username" class="form-control">
      </div>
         <label for="password">Password:</label>
         <input type="password" name="password" class="form-control"><br/>
        <input type="submit" value="Iniciar sesión" class="btn btn-block btn-danger login-btn" >
    </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal language -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="languagemodal" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title container" id="exampleModalLabel">Idioma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> <br>
      <H5 class="container">Idioma y Región sugeridos</H5> <br>
      <p class="container">Español</p>
    </div>
  </div>
</div>


</body>
</html>