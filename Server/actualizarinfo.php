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
    $id=$_SESSION['id'];
    
    

/* INSERT INTO registro_usuario_rafael(Num_telefono,Correo,Nombre,Ap_pat,Ap_mat,Contraseña,Fecha_nacimiento,Direccion,Colonia,Codigo_postal,Ciudad,Estado,Rol) 
    VALUES ('$Num_telefono','$Correo','$Nombre','$Ap_Pat','$Ap_Mat','$Contraseña','$Fecha_nacimiento','$Direccion','$Colonia','$Codigo_postal','$Ciudad','$Estado','1')*/

     $sql= "UPDATE registro_usuario_rafael SET Num_telefono = '$Num_telefono', 
                                                Correo='$Correo',
                                                Nombre= '$Nombre',
                                                Ap_pat='$Ap_Pat',
                                                Ap_mat='$Ap_Mat',
                                                
                                                Fecha_nacimiento='$Fecha_nacimiento',
                                                Direccion='$Direccion',
                                                Colonia='$Colonia',
                                                Codigo_postal='$Codigo_postal',
                                                Ciudad='$Ciudad',
                                                Estado='$Estado' WHERE id='$id'";
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
        $_SESSION['error']="Ha ocurrido un error al actualizar su cuenta, intentelo de nuevo.";
        header('Location:../index.php');
    }
} 
?>