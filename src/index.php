<?php 
    require_once __DIR__ . '/../vendor/autoload.php';
    use App\proceso\GetData;
    session_start();
    if(isset($_SESSION['error']))
    {
        echo "error";
        unset($_SESSION['error']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
    <script src="../js/index.js" type="module"></script>

</head>
<body>
<div class="contendor">   
    
    <?php 
        $objeto=new GetData();
        $resultados=$objeto->setData();    
        require_once "componentes/formulario.php";
        require_once "componentes/table.php";
    ?>
    
    </div>
</div> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>