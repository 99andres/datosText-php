<div class="contendor__resultado">
    <?php 
        if(count($resultados)!=0){
    ?>
    <table class="resultado">
        <thead class="resultado__titulo">
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Cedula</th>
                <th>Direccion</th>
                <th>Nacimiento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $numero=0;
                foreach($resultados as $item)
                { 
            ?>
                   <tr class="resultado__filas">
                        <td><?php echo $item['nombre']; ?> </td>
                        <td><?php echo $item['tipo']; ?> </td>   
                        <td><?php echo $item['cedula']; ?> </td>
                        <td><?php echo $item['direccion']; ?> </td>
                        <td><?php echo $item['nacimiento']; ?> </td>
                        <td>    
                            <div class="contenedorBoton">
                                <form action="validando.php" method="POST">
                                    <input type="hidden" name="valor" value="<?php echo $numero++ ?>">
                                    <button type="submit" name="btnBorar" class="contenedorBoton__boton colorFondo">borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>   

            <?php
                 }
            ?>
        </tbody>    
    </table>
    <?php } ?>                