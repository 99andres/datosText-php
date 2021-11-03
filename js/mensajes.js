export class mensajes{
    error($mensaje){
        swal({
            position:'center',
            icon:'error',
            title:$mensaje,
            showConfirmButton: true,
        })    
        
    }
    exitoso($mensaje){
        swal(
            'Excelente!',
            $mensaje,
            'success'
            ).then((result)=>{
                if(result){
                    // return true
                    $("#formularioUsuarioFinal").submit()
                    
                }
            })
        

    }
}