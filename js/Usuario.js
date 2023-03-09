$(document).ready(function(){
    var funcion = '';
    //recuperamos el usuario del front
    var id_usuario = $('#id_usuario').val();
    buscar_usuario(id_usuario);

    //TODO: cambiar nombre de la funcion de buscar_usario a obtener_usuario
    function buscar_usuario(dato){
        //Esto utiliza un template and interpolacion
        funcion = 'buscar_usuario';
        $.post('../controlador/UsuarioController.php',{dato,funcion},(response)=>{
            console.log(response);
            let nombre = '';
            let apellidos = '';
            let edad = '';
            let dni = '';
            let tipo = '';
            let telefono = '';
            let residencia = '';
            let correo = '';
            let sexo = '';
            let adicional = '';
            const usuarioJson = JSON.parse(response);
            //Interpolacion wtf q es
            nombre+=`${usuarioJson.nombre}`;
            apellidos+=`${usuarioJson.apellidos}`;
            edad+=`${usuarioJson.edad}`;
            dni+=`${usuarioJson.dni}`;
            tipo+=`${usuarioJson.tipo}`;
            telefono+=`${usuarioJson.telefono}`;
            residencia+=`${usuarioJson.residencia}`;
            correo+=`${usuarioJson.correo}`;
            sexo+=`${usuarioJson.sexo}`;
            adicional+=`${usuarioJson.adicional}`;
            
            $('#nombre_us').html(nombre);    
            $('#apellidos_us').html(apellidos);    
            $('#edad').html(edad);    
            $('#dni_us').html(dni);    
            $('#us_tipo').html(tipo);    
            $('#telefono_us').html(telefono);    
            $('#residencia_us').html(residencia);    
            $('#correo_us').html(correo);    
            $('#sexo_us').html(sexo);    
            $('#adicional_us').html(adicional);    
            
        } );
    }
 
})