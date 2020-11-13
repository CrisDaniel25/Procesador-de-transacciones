<?php
require_once '../../transaciones/transaciones.php';

    $date;
    $transancion = new transaciones();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        date_default_timezone_set("America/Santo_Domingo");
        $date = date("Y-m-d h:i:sa");
        $transancion.InitData(0,$date,$_POST['monto'],$_POST['descripcion']);
        echo $date;


    }
    // header('location:../../Index.php');
?>