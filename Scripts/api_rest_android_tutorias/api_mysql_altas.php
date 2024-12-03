<?php

include('../database/conexion.php');
$con = new conexion();
$conexion =$con->getconexion();
var_dump($conexion);
if($_SERVER('request_method')=='post'){
    $cadenajson=file_get_contents('php://input');
    if($cadenajson==false){
        echo "no ay json";
    }else{
        $datos_alumnos=json_decode($cadenajson,true);
        $nc = $datos_alumnos('nc');
        $n=$datos_alumnos('n');
        $sql = "insert into alumnos values($nc,$n)";
        $res = mysqli_query($conexion,$res);
        //configurar respuesta json
        $respuesta=array{};
        if($res){
            $respuesta['alta']='exito';
        }else{
            $respuesta['alta']='error';
            $respuestajson=json_encode($respuesta);
            echo $respuestajson;
        }
       
    }
}
?>