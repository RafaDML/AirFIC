<?php
session_start();
 
if(!isset($_SESSION['Nombre'])){
    header('Location: ../index.php');
    exit;
} else {
    // Show users the page!
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
    $Num_telefono=$_SESSION['Num_telefono'];
    $Ap_pat=$_SESSION['Ap_pat'];
    $Ap_mat=$_SESSION['Ap_mat'];
    $Fecha_nacimiento=$_SESSION['Fecha_nacimiento'];
    $Direccion=$_SESSION['Direccion'];
    $Colonia=$_SESSION['Colonia'];
    $Codigo_postal=$_SESSION['Codigo_postal'];
    $Ciudad=$_SESSION['Ciudad'];
    $Estado=$_SESSION['Estado'];
    $id=$_SESSION['id'];
    if(!isset($Correo)){
        header("location: Server/login.php");
    }
?>   


<div class="container">

                  <div class="row" style="margin-top: 100px;">

                    <div class="col-sm-4">
                    <div class="card">
                       <img style="height: 50%; width: 50%; margin-left: 80px;" class="card-img-top" src="../assets/img/account/accountpicture.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; margin-top: 20px; margin-left: 30px;">Verificación de identidad</h5>
                        <p class="card-text">
                            Agrega el distintivo de identidad verificada para que el resto de la comunidad sepa que realmente eres quien dices ser.</p>
                       <br>

                       <button class="btn btn-outline-dark " style=" margin-left: 80px; ">
                        <strong>Obtén el distintivo</strong></button>

                          <div style="margin-top: 30px;" class="dropdown-divider"></div>

                          

                          <h5 style="margin-top: 30px; font-weight: bold;" class="card-title"><?=$Nombre?> </h5>
                        <p class="card-text">Confirmó
                            </p> 
                       <br>
                      </div>
                    </div>
                    <br><br><br>

                    

                     
                  </div>

                  <div class="col-sm-8">
                         <div class="container" style="">
                            <label><h2 style="font-weight: bold;">Hola, me llamo <?=$Nombre?></h2></label>
                            <br>
                            <label>

                              <a style="color: #2596be;" href="informacion_personal.php">Edita tu perfil</a>
                              
                              </br>
                            </label>

                            <h4 style="margin-top: 40px; font-weight: bold;">Acerca de</h4>

                            <br>

                            <img style="width: 5%; height: 5%; position: absolute;" src="../assets/img/account/place.jpg">
                            <p style="margin-left: 50px; margin-top: 8px;">Vive en <?=$Ciudad?>, <?=$Estado?> </p>

                        </div>

                          


                   
                  </div>
                  
                </div>



</div>





   
  


<?php
  include '../footer.php'; 
?>

</body>
</html>