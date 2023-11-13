<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_mkt']))
{
    $mkt_id = mysqli_real_escape_string($con, $_POST['delete_mkt']);

    $query = "DELETE FROM marketing WHERE id='$mkt_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Usuario Deleted Successfully";
        header("Location: marketing.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: marketing.php");
        exit(0);
    }
}


if(isset($_POST['save_mkt']))
{
  
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $paquete = mysqli_real_escape_string($con, $_POST['paquete']);

    $query = "INSERT INTO marketing SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono', paquete='$paquete'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Usuario Created Successfully";
        // header("Location: informacion.php");
        echo "Success";
        exit(0);
        
    }
    else
    {
        $_SESSION['message'] = "Usuario Not Created";
        //header("Location: informacion.php");
       
        echo "Fail";
        exit(0);
    }
}


?>
