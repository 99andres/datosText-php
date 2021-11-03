<?php 
namespace App\proceso;
class GetData{
    function saveData($data){
        $cadena = implode(',',$data);
        $file = fopen("archivo.txt", "a");        
            fwrite($file,"$cadena\n");
            fclose($file);
            header("location:./");
            //echo "<script>alert('Se guardaron los datos');window.location='./'</script>";
    }
    function setData(){
        if(file_exists('archivo.txt')){
            $archivo = file( "archivo.txt" );
            $datos=[];
            foreach($archivo as $item){
                if(!empty($item)){
                    list($nombre,$tipo,$cedula,$direccion,$nacimiento)=explode(",", $item);
                    $datos[]=['nombre' => $nombre, 'tipo' => $tipo, 'cedula' => $cedula, 'direccion' => $direccion,'nacimiento' => $nacimiento];
                }
                
            }
            return $datos;
        }   
    }
    function delete($numero){
        $archivo = file( "archivo.txt" );
        unset($archivo[$numero]);
        file_put_contents("archivo.txt", $archivo);
        header("location:./");
        //echo "<script>alert('Se eliminaron los datos');window.location='./'</script>";        
  }
}
?>