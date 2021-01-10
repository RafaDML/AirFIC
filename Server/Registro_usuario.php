
<?php
include('Conexion.php');
session_start();
if (isset($_POST['txtTelefono'])) {
    $Num_telefono = $_POST['txtTelefono'];
    $Correo = $_POST['txtEmail'];
    $Nombre = $_POST['txtNombre'];
    $Ap_Pat = $_POST['txtApellidoP'];
    $Ap_Mat = $_POST['txtApellidoM'];
    $Contraseña = $_POST['txtPassword'];
    $Vcontraseña = $_POST['txtVpassword'];
    $Fecha_nacimiento = $_POST['dateFechaNac'];
    $Direccion = $_POST['txtDireccion'];
    $Colonia = $_POST['txtColonia'];
    $Codigo_postal = $_POST['txtCodPostal'];
    $Ciudad = $_POST['txtCiudad'];
    $Estado = $_POST['selEstados'];
    $Tipo_Cuenta = $_POST['txtTipoCuenta'];
    $id_h = md5($Num_telefono);



     $sql= "INSERT INTO registro_usuario(Num_telefono,Correo,Nombre,Ap_pat,Ap_mat,Contraseña,Fecha_nacimiento,Direccion,Colonia,Codigo_postal,Ciudad,Estado,Tipo_Cuenta,id_h) 
    VALUES ('$Num_telefono','$Correo','$Nombre','$Ap_Pat','$Ap_Mat','$Contraseña','$Fecha_nacimiento','$Direccion','$Colonia','$Codigo_postal','$Ciudad','$Estado','$Tipo_Cuenta','$id_h')";
    if ($conn->query($sql)===TRUE) {
        header("Location:../myaccount/profile.php");
    }else{
        $_SESSION['error']="Ha ocurrido un error al registrar su cuenta, intentelo de nuevo.";
        header('Location:../welcome/signup_personal.php');
    }
} 
?>