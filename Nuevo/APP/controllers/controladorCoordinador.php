<?php

 include_once("../models/classCoordinador.php");
 if(!isset($_REQUEST['IdCoordinador']))
 {
     $_REQUEST['IdCoordinador'] =0;
 }
 if(!isset($_REQUEST["Coordinador"])){
 
     if(($_REQUEST['IdCoordinador'] != null)&&($_REQUEST["value"] == "Borra")){
         $IdCoordinador = $_REQUEST['IdCoordinador'];
         $coordinador = new Coordinador();
         $coordinador -> borrarCoordinador($IdCoordinador);
     }
     elseif(isset($_REQUEST["btnAgregar"])) {
         header("location:../views/addCoord.php");
     }elseif(isset($_POST["btnNewCoord"]) && ($_REQUEST["btnNewCoord"] != null)) {
         $nombre = $_REQUEST['newNameCoord'];
         $correo = $_REQUEST['newCorreoCoord'];
         $novedades = $_REQUEST['newNovedadesCoord'];
         $coordinador = new Coordinador();
         $coordinador -> addCoordinador($nombre,$correo,$novedades);
     }elseif(($_REQUEST["IdCoordinador"] != null) && ($_REQUEST["value"] == "Actualizar")) {
         header("location:../views/actCoord1.php?IdCoordinador=".$_REQUEST["IdCoordinador"]);
     }elseif(isset($_POST["btnActCoord"]) && ($_REQUEST["btnActCoord"] != null)){
         $IdCoordinador = $_REQUEST['newIdCoord'];
         $nombre = $_REQUEST['newNameCoord'];
         $correo = $_REQUEST['newCorreoCoord'];
         $novedades = $_REQUEST['newNovedadesCoord'];
         $coordinador = new Coordinador();
         $coordinador -> actualizarCoordinador($nombre,$correo,$novedades,$IdCoordinador);
     }
 }else{
     header("location:../viewCoordinador.php");
 }
 ?>