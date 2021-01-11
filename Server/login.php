<?php
	session_start(); 
	$Correo=$_POST['txtCorreo'];
	$Contraseña=$_POST['txtContraseña'];
	include("Conexion.php"); 
	//$CorreoProtegido = mysqli_real_escape_string($con,(strip_tags($Correo,ENT_QUOTES)));
	$Password_hash =  md5($Contraseña);
	$sql = "SELECT COUNT(*) as contar FROM registro_usuario_rafael WHERE Num_telefono = '$Correo' and Contraseña='$Contraseña'";
	$query=mysqli_query($conn,$sql);
	$array=mysqli_fetch_array($query);
	$sql2= "SELECT * FROM registro_usuario_rafael WHERE Num_telefono = '$Correo' and Contraseña='$Contraseña'";
	$query2=mysqli_query($conn,$sql2);
	$datos=mysqli_fetch_array($query2);
	if ($array['contar']>0){
		$_SESSION['Num_telefono']=$datos['Num_telefono'];
		$_SESSION['Nombre']=$datos['Nombre'];
		$_SESSION['Summary']=TRUE;

		$_SESSION['Correo']=$datos['Correo'];
		$_SESSION['Ap_pat']=$datos['Ap_pat'];
		$_SESSION['Ap_mat']=$datos['Ap_mat'];
		$_SESSION['Fecha_nacimiento']=$datos['Fecha_nacimiento'];
		$_SESSION['Direccion']=$datos['Direccion'];
		$_SESSION['Colonia']=$datos['Colonia'];
		$_SESSION['Codigo_postal']=$datos['Codigo_postal'];
		$_SESSION['Ciudad']=$datos['Ciudad'];
		$_SESSION['Estado']=$datos['Estado'];
		$_SESSION['id']=$datos['id'];


		$_SESSION['Rol']=$datos['Rol'];

		 switch($_SESSION['Rol']){
                case 1:
                    header('location: ../myaccount/profile.php');
                break;
    
                case 2:
                header('location: rt.php');
                break;
    
                default:
            }




		/*header("location: ../myaccount/profile.php"); */
	} else {
		$_SESSION['error']="Usuario o contraseña incorrectos";
		header("location:../index.php?fallo=true");	
	}		

?>