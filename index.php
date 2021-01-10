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

 
	
</head>
<?php 
session_start();
  if (isset($_SESSION['error'])) {
    $mensaje=$_SESSION['error'];
    $style= 'text-align: center; font-size: 13px; margin-top: 20px; margin-bottom: 20px; color:red;';
    unset($_SESSION['error']);
  }else if(isset($_SESSION['rpt'])){
    $mensaje=$_SESSION['rpt'];
    $style= 'text-align: center; font-size: 13px; margin-top: 20px; margin-bottom: 20px; color:green;';
    unset($_SESSION['rpt']);
  }else {
    $mensaje="";
    $style= "";
  }
?>
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
        <form action="Server/Registro_usuario_rafael.php" method="POST">
     
      
           <div class="form-group">
              <input style="margin-top: 5px" name="txtTelefono" id="txtTelefono" type="text" class="form-control" required placeholder="Número de teléfono"><br>
              
              <input style="margin-top: 5px" name="txtEmail" id="txtEmail" type="email" class="form-control" required placeholder="Email"><br>
              <input style="margin-top: 5px" name="txtNombre" id="txtNombre" type="text" class="form-control" required placeholder="Nombre"><br>
              <input style="margin-top: 5px" name="txtApellidoP" id="txtApellidoP" type="text" class="form-control" required placeholder="Apellido paterno"><br>
              <input style="margin-top: 5px" name="txtApellidoM" id="txtApellidoM" type="text" class="form-control" placeholder="Apellido materno"><br>

              <div class="dropdown-divider"></div>

              <label><h5 class="display-4" style="font-size: 15px;">Contraseña</h5></label>
              <input style="margin-top: 5px" name="txtPassword" id="txtPassword"  type="password" class="form-control" required placeholder="Contraseña"><br>
              <input style="margin-top: 5px" name="txtVpassword" id="txtVpassword" type="password" class="form-control" required placeholder="Confirmación de contraseña"><br>
            </div>

            <div class="dropdown-divider"></div>

            <div class="form-group">
              <label><h5 class="display-4" style="font-size: 15px;">Datos de contacto:</h5></label>
              <br>

              <div class="row">


              <label><h5 class="display-4 col-8" style="font-size: 15px;">Fecha de Nacimiento:</h5></label>

              <input style="margin-top: -5px" name="dateFechaNac" id="dateFechaNac" type="date" class="form-control
              form-control col-6" required>


              </div>
              
              <input style="margin-top: 5px" name="txtDireccion" id="txtDireccion" type="text" class="form-control" required placeholder="Dirección">
              <input style="margin-top: 5px" name="txtColonia" id="txtColonia" type="text" class="form-control" required placeholder="Colonia">
              <div class="row" style="margin-top: 5px">
                <input style="margin-left: 15px" name="txtCodPostal" id="txtCodPostal" type="text" class="form-control col-4" required placeholder="Código Postal">
                <input style="margin-left: 34px" name="txtCiudad" id="txtCiudad" type="text" class="form-control col-6" required placeholder="Ciudad">
              </div>
              <br>
             
              <input style="margin-top: 5px" name="txtEstado" id="txtEstado" type="text" class="form-control" required placeholder="Estado"><br>
              <div style="margin-top: 12px" class="form-check">
                <input class="form-check-input" type="checkbox" id="aviso">
                <label for="aviso"><h6 class="h6" style="font-size: 12.5px;">
                  Acepto términos y condiciones
                </h6></label>
              </div>
            </div>
            <input type="hidden" name="tipoCuenta" value="1">

        
  
         
        <input type="submit" value="Registrarse" class="btn btn-block btn-danger login-btn" >
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
        <form action="Server/login.php" id="loginForm" method="POST">
            <div class="form-group">
             <label for="user">Numero de telefono:</label>
            <input type="text" name="txtCorreo" class="form-control">
             </div>
             <label for="password">Password:</label>
             <input type="password" name="txtContraseña" class="form-control"><br/>
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
