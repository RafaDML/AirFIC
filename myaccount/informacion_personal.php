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
    $Num_telefono=$_SESSION['Num_telefono'];
    $Ap_pat=$_SESSION['Ap_pat'];
    $Ap_mat=$_SESSION['Ap_mat'];
    $Fecha_nacimiento=$_SESSION['Fecha_nacimiento'];
    $Direccion=$_SESSION['Direccion'];
    $Colonia=$_SESSION['Colonia'];
    $Codigo_postal=$_SESSION['Codigo_postal'];
    $Ciudad=$_SESSION['Ciudad'];
    $Estado=$_SESSION['Estado'];
    if(!isset($Correo)){
        header("location: Server/login.php");
    }
?>   




  <div class="container" style="margin-top: 100px;">
    <label><h2 style="font-weight: bold;">Cuenta</h2></label></br>
    <label>
      <h3 class="display-4" style="  font-size: 22px; font-weight: 400">
        <span style="font-weight: bold;"><?= $Nombre?></span>
      </h3>
      </br>
    </label>

  </div>



    <form action="Server/Registro_usuario_rafael.php" method="POST">
     
      
           
      <div class="container">

                  <div class="row">
                  <div class="col-sm-8">

                    <div class="form-group container">
            <label><h5 class="display-4" style="font-size: 15px;">Teléfono:</h5></label>
              <input style="margin-top: 5px" name="txtTelefono" id="txtTelefono" type="text" class="form-control col-7" value="<?=$Num_telefono?>"><br>

               <label><h5 class="display-4" style="font-size: 15px;">Correo:</h5></label>
              <input style="margin-top: 5px" name="txtEmail" id="txtEmail" type="email" class="form-control col-7"  value="<?=$Correo?>"><br>

              <label><h5 class="display-4" style="font-size: 15px;">Nombre:</h5></label>
              <input style="margin-top: 5px" name="txtNombre" id="txtNombre" type="text" class="form-control col-7" value="<?=$Nombre?>"><br>

              <label><h5 class="display-4" style="font-size: 15px;">Apellido Paterno:</h5></label>
              <input style="margin-top: 5px" name="txtApellidoP" id="txtApellidoP" type="text" class="form-control col-7" value="<?=$Ap_pat?>"><br>

              <label><h5 class="display-4" style="font-size: 15px;">Apellido Materno:</h5></label>
              <input style="margin-top: 5px" name="txtApellidoM" id="txtApellidoM" type="text" class="form-control col-7" value="<?=$Ap_mat?>"><br>

               <label><h5 class="display-4" style="font-size: 15px;">Fecha de nacimiento:</h5></label>
              <input style="margin-top: 5px" name="dateFechaNac" id="dateFechaNac" type="date" class="form-control col-7" required value="<?=$Fecha_nacimiento?>"><br>

              <label><h5 class="display-4" style="font-size: 15px;">Dirección:</h5></label>
              <input style="margin-top: 5px" name="txtDireccion" id="txtDireccion" type="text" class="form-control col-7" value="<?=$Direccion?>"><br>

              <label><h5 class="display-4" style="font-size: 15px;">Colonia:</h5></label>
              <input style="margin-top: 5px" name="txtColonia" id="txtColonia" type="text" class="form-control col-7" value="<?=$Colonia?>"><br>
              

                <label><h5 class="display-4" style="font-size: 15px;">Codigo Postal:</h5></label>
                <input style="margin-left: 5px" name="txtCodPostal" id="txtCodPostal" type="text" class="form-control col-7" value="<?=$Codigo_postal?>"><br>

                <label><h5 class="display-4" style="font-size: 15px;">Ciudad:</h5></label>
                <input style="margin-left: 5px" name="txtCiudad" id="txtCiudad" type="text" class="form-control col-7" value="<?=$Ciudad?>"><br>
             

              
              <label><h5 class="display-4" style="font-size: 15px;">Estado:</h5></label>
              <input style="margin-left: 5px" name="txtEstado" id="txtEstado" type="text" class="form-control col-7" required placeholder="" value="<?=$Estado?>"><br>


                    
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                       <img class="card-img-top" src="../assets/img/infosettings.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">¿Qué datos se pueden editar?</h5>
                        <p class="card-text">
                            No se pueden modificar los datos que Airbnb utiliza para verificar tu identidad. Aunque puedes modificar tus datos personales y de contacto, podríamos pedirte que verifiques tu identidad la próxima vez que hagas una reservación o crees un anuncio.</p>
                       <br>

                          <div class="dropdown-divider"></div>

                          <img class="card-img-top" src="../assets/img/candadoinfo.jpg" alt="Card image cap">

                          <h5 class="card-title">¿Qué información se comparte con los demás?</h5>
                        <p class="card-text">
                            Airbnb solo proporciona los datos de contacto de los anfitriones y los huéspedes cuando se confirma una reservación.</p> 
                       <br>
                      </div>
                    </div>
                    <br><br><br>

                    <button type="button" class="btn btn-info" style="position: relative; width: 250px;">Editar datos</button>
                  </div>
                </div>



</div>



               <!-- <div class="form-control-4">

                 
                                      


              
             

              

            </div> -->

            <div class="form-group container">
             
              
            </div>
            <input type="hidden" name="tipoCuenta" value="1">

        
  
         
        
    </form>
  




</body>
</html>