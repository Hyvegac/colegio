<?php
include_once("../models/classAlumno.php");

if(!isset($_REQUEST['Idaprendiz']))
{
    $_REQUEST['Idaprendiz'] =0;
}
if(!isset($_REQUEST["Aprendiz"])){

    if(($_REQUEST['Idaprendiz'] != null)&&($_REQUEST["value"] == "Borra")){
        $Idaprendiz = $_REQUEST['Idaprendiz'];
        $aprendiz = new Aprendiz();
        $aprendiz -> borrarAprendiz($Idaprendiz);
    }
    elseif(isset($_REQUEST["btnAgregar"])) {
        header("location:../views/addAlumno.php");
    }elseif(isset($_POST["btnNewAlumno"]) && ($_REQUEST["btnNewAlumno"] != null)) {
        $nombre = $_REQUEST['newNameAlumno'];
        $correo = $_REQUEST['newCorreoAlumno'];
        $telefono = $_REQUEST['newTelAlumno'];
        $programa = $_REQUEST['newProgramaAlumno'];
        $aprendiz = new Aprendiz();
        $aprendiz -> addAlumno($nombre,$correo,$telefono,$programa );
    }elseif(($_REQUEST["Idaprendiz"] != null) && ($_REQUEST["value"] == "Actualizar")) {
        header("location:../views/actAlumno1.php?Idaprendiz=".$_REQUEST["Idaprendiz"]);
    }elseif(isset($_POST["btnActAlumno"]) && ($_REQUEST["btnActAlumno"] != null)){
        $Idaprendiz = $_REQUEST['newIdAlumno'];
        $nombre = $_REQUEST['newNameAlumno'];
        $correo = $_REQUEST['newCorreoAlumno'];
        $telefono = $_REQUEST['newTelAlumno'];
        $programa = $_REQUEST['newProgramaAlumno'];
        $aprendiz = new Aprendiz();
        $aprendiz -> actualizarAprendiz($nombre,$correo,$telefono,$programa,$Idaprendiz );
    }
}else{
    header("location:../views/viewAlumno.php");
}
?>