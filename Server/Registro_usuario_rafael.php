
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
    $Estado = $_POST['txtEstado'];
    $Rol = $_POST['txtTipoCuenta'];
    



     $sql= "INSERT INTO registro_usuario_rafael(Num_telefono,Correo,Nombre,Ap_pat,Ap_mat,Contraseña,Fecha_nacimiento,Direccion,Colonia,Codigo_postal,Ciudad,Estado,Rol) 
    VALUES ('$Num_telefono','$Correo','$Nombre','$Ap_Pat','$Ap_Mat','$Contraseña','$Fecha_nacimiento','$Direccion','$Colonia','$Codigo_postal','$Ciudad','$Estado','1')";
    if ($conn->query($sql)===TRUE) {

        $_SESSION['Num_telefono']=$Num_telefono;
        $_SESSION['Nombre']=$Nombre;
        

        $_SESSION['Correo']= $Correo;
        $_SESSION['Ap_pat']=$Ap_Pat;
        $_SESSION['Ap_mat']=$Ap_Mat;
        $_SESSION['Fecha_nacimiento']=$Fecha_nacimiento;
        $_SESSION['Direccion']=$Direccion;
        $_SESSION['Colonia']=$Colonia;
        $_SESSION['Codigo_postal']=$Codigo_postal;
        $_SESSION['Ciudad']=$Ciudad;
        $_SESSION['Estado']=$Estado;

        
        header("Location:../myaccount/profile.php");

    }else{
        $_SESSION['error']="Ha ocurrido un error al registrar su cuenta, intentelo de nuevo.";
        header('Location:../index.php');
    }
} 
?>