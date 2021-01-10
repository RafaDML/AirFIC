 <?php
session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location:myaccount/profile.php');
            break;

            case 2:
            header('location: rt.php');
            break;

            default:
        }
    }
    

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Airbnb</title>
  

  <!-- Favicons -->
 

  
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 
</head>
<body>
	<?php include 'header_account_settings.php'; 
	  $mensaje="";


   
?>
<?php 
    session_start();
    $Correo=$_SESSION['Correo'];
    $Nombre=$_SESSION['Nombre'];
    if(!isset($Correo)){
        header("location: Server/login.php");
    }
?>   




  <div class="container" style="margin-top: 100px;">
    <label><h2 style="font-weight: bold;">Cuenta</h2></label></br>
    <label>
      <h3 class="display-4" style="  font-size: 22px; font-weight: 400">
        <span style="font-weight: bold;"><?= $Nombre?></span>, 
         <span><?= $Correo?></span>  <a style="color: #2596be" href="">- Ir a tu perfil</a>
      </h3>
      </br>
    </label>

  </div>

  <div class="container">
          <div class="card-deck">
          
            <div  class="card">
            <img class="card-img-top" src="../assets/img/infosettings.jpg" alt="Card image cap">
            <div class="card-body">
             <a href="informacion_personal.php"> <h5 class="card-title">Información Personal</h5></a>
              <p class="card-text">Proporciona tus datos personales e indícanos cómo podemos ponernos en contacto contigo</p>
              
            </div>
          </div>
          

          <div class="card">
            <img class="card-img-top" src="../assets/img/inicioseguridadsettings.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Inicio de sesión y seguridad</h5>
              <p class="card-text">Actualiza tu contraseña y protege tu cuenta</p>
              
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../assets/img/pagosycobros.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pagos y cobros</h5>
              <p class="card-text">Revisar pagos, cobros, cupones, tarjetas de regalo e impuestos</p>
              
            </div>
          </div>
  </div>
  </br>

        <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="../assets/img/notificaciones.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Notificaciones</h5>
            <p class="card-text">Elige las preferencias de notificación y tu forma de contacto</p>
            
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="../assets/img/privacidadyusocompartido.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Privacidad y uso compartido</h5>
            <p class="card-text">Controla las aplicaciones vinculadas, lo que compartes y quién puede verlo</p>
            
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="../assets/img/preferenciasgenerales.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Preferencias generales</h5>
            <p class="card-text">Configura tu idioma, moneda y zona horaria</p>
            
          </div>
        </div>
      </div>
    </br>

      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="../assets/img/viajedetrabajo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Viaje de trabajo</h5>
            <p class="card-text">Agrega un correo electrónico laboral para acceder a los beneficios para viajes de negocio</p>
            
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="../assets/img/herramientasprofesionales.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Herramientas para anfitriones profesionales</h5>
            <p class="card-text">Obtén herramientas profesionales si administras varias propiedades en Airbnb</p>
            
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="../assets/img/invitaamigos.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Invita a tus amigos</h5>
            <p class="card-text">Cuando se registren, tus amigos recibirán hasta $1,450 MNX para una reservación que cumpla con determinados requisitos</p>
            
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