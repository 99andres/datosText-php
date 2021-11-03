
<div class="contendor__formulario">
        <h3 class="contendor__texto">Ingresar Datos</h3>
        <form method="POST" action="validando.php" class="formulario formulario__espacio" id="formularioUsuarioFinal">
            <input type="text" class="formulario__campo" name="nombre" id="nombre" placeholder="Ingrese el nombre" >
            <br>
            <select name="tipo" class="formulario__campo formulario__ampliando" id="tipo">
                <option selected="true">Tipo de Documento</option> 
                <option value="cedula">cedula</option> 
                <option value="Tarjeta de dentidad">Tarjeta de identidad</option> 
            </select>
            <br>
            <input type="number" class="formulario__campo" name="numero" id="numero"  placeholder="Ingrese el numero de documento">
            <br>
            <input type="text" name="direccion" id="direccion" class="formulario__campo" placeholder="Ingrese la direccion" >
            <br>
            <input type="hidden" value="btn" name="btn">
            <input type="date" name="nacimiento" id="nacimiento" class="formulario__campo formulario__ampliandoData" placeholder="Ingrese de nacimiento">
            <br>
            <div class="contenedorBoton">
                <button type="submit" class="formulario__boton" id="botonGuardar" name="guardar">guardar!</button>
            </div>
            
        </form>
    </div>