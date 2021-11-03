<?php
require_once __DIR__ . "/../vendor/autoload.php";
use App\proceso\GetData;

session_start();

if(isset($_POST['btn']))
{
    if(isset($_POST['nombre']) && $_POST['nombre'] !="" && isset($_POST['tipo']) && $_POST['tipo']!="" && isset($_POST['numero']) && $_POST['numero']!="" && $_POST['numero']>0 && isset($_POST['direccion']) && $_POST['direccion']!="" && isset($_POST['nacimiento']) && $_POST['nacimiento']!=""){

        if(preg_match("/\D/", $_POST['nombre']) ==1 && preg_match("/\d/", $_POST['numero']) == 1 &&  preg_match("/\W/", $_POST['direccion'])){
            $datos=array($_POST['nombre'],$_POST['tipo'],$_POST['numero'],$_POST['direccion'],$_POST['nacimiento']);
            // print_r($datos);
            $objeto=new GetData();
            $objeto->saveData($datos);
            

        }
        else{
            header("location:../");        
        }
        
    }else{
        $_SESSION['error']="erro";
        header("location:./");    

    }

}
else if(isset($_POST['btnBorar'])){
 
$objeto=new GetData();
$objeto->delete($_POST['valor']);

}
else{
    
    header("location:./index.php");
}



            

?>