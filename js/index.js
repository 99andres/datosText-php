import * as variables from './variables.js'
import {mensajes} from './mensajes.js'
let {botonFormulario,nombre,tipo,numero,direccion,nacimiento}=variables
let objeto=new mensajes()
$(document).ready(function(){
    

    botonFormulario.click(function(e){
        e.preventDefault();
        if(nombre.val().length==0 || nombre.val()=="" || tipo.val().length==0 || tipo.val()=="Tipo de Documento"  || numero.val().length==0 || numero.val()=="" || direccion.val().length==0 || direccion.val()=="" || nacimiento.val().length==0 || nacimiento.val()=="" ){
            objeto.error('debe llenar todos los datos');
            
            
        }
        else{
            objeto.exitoso('se guardaron los datos');
                      
        }
    })
    
})