<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM formaunica WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "El estudiante fue eliminado";
        header("Location: formaunica.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "No se pudo borrar el estudiante";
        header("Location: formaunica.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $direccion = mysqli_real_escape_string($con, $_POST['direccion']);
    $quien = mysqli_real_escape_string($con, $_POST['quien']);
    $observaciones = mysqli_real_escape_string($con, $_POST['observaciones']);
    $nombrepmtuno = mysqli_real_escape_string($con, $_POST['nombrepmtuno']);
    $teluno = mysqli_real_escape_string($con, $_POST['teluno']);
    $emailuno = mysqli_real_escape_string($con, $_POST['emailuno']);
    $nombrepmtdos = mysqli_real_escape_string($con, $_POST['nombrepmtdos']);
    $teldos = mysqli_real_escape_string($con, $_POST['teldos']);
    $emaildos = mysqli_real_escape_string($con, $_POST['emaildos']);
    $nombremergencia = mysqli_real_escape_string($con, $_POST['nombremergencia']);
    $telemergencia = mysqli_real_escape_string($con, $_POST['telemergencia']);
    $relacion = mysqli_real_escape_string($con, $_POST['relacion']);
    $direccionemergencia = mysqli_real_escape_string($con, $_POST['direccionemergencia']);
    $nombremergenciados = mysqli_real_escape_string($con, $_POST['nombremergenciados']);
    $telemergenciados = mysqli_real_escape_string($con, $_POST['telemergenciados']);
    $relaciondos = mysqli_real_escape_string($con, $_POST['relaciondos']);
    $direccionemergenciados = mysqli_real_escape_string($con, $_POST['direccionemergenciados']);
    $nombremergenciatres = mysqli_real_escape_string($con, $_POST['nombremergenciatres']);
    $telemergenciatres = mysqli_real_escape_string($con, $_POST['telemergenciatres']);
    $relaciontres = mysqli_real_escape_string($con, $_POST['relaciontres']);
    $direccionemergenciatres = mysqli_real_escape_string($con, $_POST['direccionemergenciatres']);
    $doctor = mysqli_real_escape_string($con, $_POST['doctor']);
    $teldoc = mysqli_real_escape_string($con, $_POST['teldoc']);
    $direcciondoc = mysqli_real_escape_string($con, $_POST['direcciondoc']);
    $dentista = mysqli_real_escape_string($con, $_POST['dentista']);
    $teldent = mysqli_real_escape_string($con, $_POST['teldent']);
    $direcciondent = mysqli_real_escape_string($con, $_POST['direcciondent']);
    $trasladar = mysqli_real_escape_string($con, $_POST['trasladar']);
    $ssn = mysqli_real_escape_string($con, $_POST['ssn']);
    $autorizado = mysqli_real_escape_string($con, $_POST['autorizado']);
    $telauto = mysqli_real_escape_string($con, $_POST['telauto']);
    $relacionauto = mysqli_real_escape_string($con, $_POST['relacionauto']);
    $autorizadodos = mysqli_real_escape_string($con, $_POST['autorizadodos']);
    $telautodos = mysqli_real_escape_string($con, $_POST['telautodos']);
    $relacionautodos = mysqli_real_escape_string($con, $_POST['relacionautodos']);
    $fechaNac = mysqli_real_escape_string($con, $_POST['fechaNac']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);

    $query = "UPDATE formaunica SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', direccion='$direccion', quien='$quien', observaciones='$observaciones', nombrepmtuno='$nombrepmtuno', teluno='$teluno', emailuno='$emailuno', nombrepmtdos='$nombrepmtdos', teldos='$teldos', emaildos='$emaildos', nombremergencia='$nombremergencia', telemergencia='$telemergencia', relacion='$relacion', direccionemergencia='$direccionemergencia', nombremergenciados='$nombremergenciados', telemergenciados='$telemergenciados', relaciondos='$relaciondos', direccionemergenciados='$direccionemergenciados', nombremergenciatres='$nombremergenciatres', telemergenciatres='$telemergenciatres', relaciontres='$relaciontres', direccionemergenciatres='$direccionemergenciatres', doctor='$doctor', teldoc='$teldoc', direcciondoc='$direcciondoc', dentista='$dentista', teldent='$teldent', direcciondent='$direcciondent', trasladar='$trasladar', ssn='$ssn', autorizado='$autorizado', telauto='$telauto', relacionauto='$relacionauto', autorizadodos='$autorizadodos', telautodos='$telautodos', relacionautodos='$relacionautodos', edad='$edad', fechaNac='$fechaNac' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "El estudiante se actualizo exitosamente";
        header("Location: formaunica.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "No se pudo actualizar el estudiante";
        header("Location: formaunica.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $direccion = mysqli_real_escape_string($con, $_POST['direccion']);
    $quien = mysqli_real_escape_string($con, $_POST['quien']);
    $observaciones = mysqli_real_escape_string($con, $_POST['observaciones']);
    $nombrepmtuno = mysqli_real_escape_string($con, $_POST['nombrepmtuno']);
    $teluno = mysqli_real_escape_string($con, $_POST['teluno']);
    $emailuno = mysqli_real_escape_string($con, $_POST['emailuno']);
    $nombrepmtdos = mysqli_real_escape_string($con, $_POST['nombrepmtdos']);
    $teldos = mysqli_real_escape_string($con, $_POST['teldos']);
    $emaildos = mysqli_real_escape_string($con, $_POST['emaildos']);
    $nombremergencia = mysqli_real_escape_string($con, $_POST['nombremergencia']);
    $telemergencia = mysqli_real_escape_string($con, $_POST['telemergencia']);
    $relacion = mysqli_real_escape_string($con, $_POST['relacion']);
    $direccionemergencia = mysqli_real_escape_string($con, $_POST['direccionemergencia']);
    $nombremergenciados = mysqli_real_escape_string($con, $_POST['nombremergenciados']);
    $telemergenciados = mysqli_real_escape_string($con, $_POST['telemergenciados']);
    $relaciondos = mysqli_real_escape_string($con, $_POST['relaciondos']);
    $direccionemergenciados = mysqli_real_escape_string($con, $_POST['direccionemergenciados']);
    $nombremergenciatres = mysqli_real_escape_string($con, $_POST['nombremergenciatres']);
    $telemergenciatres = mysqli_real_escape_string($con, $_POST['telemergenciatres']);
    $relaciontres = mysqli_real_escape_string($con, $_POST['relaciontres']);
    $direccionemergenciatres = mysqli_real_escape_string($con, $_POST['direccionemergenciatres']);
    $doctor = mysqli_real_escape_string($con, $_POST['doctor']);
    $teldoc = mysqli_real_escape_string($con, $_POST['teldoc']);
    $direcciondoc = mysqli_real_escape_string($con, $_POST['direcciondoc']);
    $dentista = mysqli_real_escape_string($con, $_POST['dentista']);
    $teldent = mysqli_real_escape_string($con, $_POST['teldent']);
    $direcciondent = mysqli_real_escape_string($con, $_POST['direcciondent']);
    $trasladar = mysqli_real_escape_string($con, $_POST['trasladar']);
    $ssn = mysqli_real_escape_string($con, $_POST['ssn']);
    $autorizado = mysqli_real_escape_string($con, $_POST['autorizado']);
    $telauto = mysqli_real_escape_string($con, $_POST['telauto']);
    $relacionauto = mysqli_real_escape_string($con, $_POST['relacionauto']);
    $autorizadodos = mysqli_real_escape_string($con, $_POST['autorizadodos']);
    $telautodos = mysqli_real_escape_string($con, $_POST['telautodos']);
    $relacionautodos = mysqli_real_escape_string($con, $_POST['relacionautodos']);
    $fechaNac = mysqli_real_escape_string($con, $_POST['fechaNac']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);

    $query = "INSERT INTO formaunica SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', direccion='$direccion', quien='$quien', observaciones='$observaciones', nombrepmtuno='$nombrepmtuno', teluno='$teluno', emailuno='$emailuno', nombrepmtdos='$nombrepmtdos', teldos='$teldos', emaildos='$emaildos', nombremergencia='$nombremergencia', telemergencia='$telemergencia', relacion='$relacion', direccionemergencia='$direccionemergencia', nombremergenciados='$nombremergenciados', telemergenciados='$telemergenciados', relaciondos='$relaciondos', direccionemergenciados='$direccionemergenciados', nombremergenciatres='$nombremergenciatres', telemergenciatres='$telemergenciatres', relaciontres='$relaciontres', direccionemergenciatres='$direccionemergenciatres', doctor='$doctor', teldoc='$teldoc', direcciondoc='$direcciondoc', dentista='$dentista', teldent='$teldent', direcciondent='$direcciondent', trasladar='$trasladar', ssn='$ssn', autorizado='$autorizado', telauto='$telauto', relacionauto='$relacionauto', autorizadodos='$autorizadodos', telautodos='$telautodos', relacionautodos='$relacionautodos', edad='$edad', fechaNac='$fechaNac'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Su registro fue exitoso";
        header("Location: formaunicadeidentificacion.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Intente registrar nuevamente";
        header("Location: formaunicadeidentificacion.php");
        exit(0);
    }
}

?>