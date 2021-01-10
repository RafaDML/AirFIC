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
	<?php include 'header_account.php'; 
	  $mensaje="";


   
?>

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


	<div className='banner' class=""  style="
	    position: relative;
	    background: url(../assets/img/profilebackground.jpg); 
	    padding-top: 90px; 
	    height: 70vh; 
	    margin-top: 12vh;">

            <div className='banner_info'>
            <h1 style="color: white; font-weight: bold; padding-left: 30px;">Escápate</h1>
            </div>
    </div>


</body>
</html>