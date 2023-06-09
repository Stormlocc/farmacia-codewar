funcionesUsuario = {
    //Tener cuidado ya que los valores de estos son utilizados en UsuarioController.php
    obtener_usuario: 'obtener_usuario',
    capturar_datos: 'capturar_datos',
    editar_datos: 'editar_datos'
};

$(document).ready(function () {
    var funcion = '';
    //recuperamos el usuario del front
    var id_usuario = $('#id_usuario').val();
    var edit_flag = false;
    obtener_publicar_usuario(id_usuario);

    function obtener_publicar_usuario(dato) {
        funcion = funcionesUsuario.obtener_usuario;
        //AJAX
        $.post('../controlador/UsuarioController.php', { dato, funcion }, (response) => {
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
            nombre += `${usuarioJson.nombre}`;
            apellidos += `${usuarioJson.apellidos}`;
            edad += `${usuarioJson.edad}`;
            dni += `${usuarioJson.dni}`;
            tipo += `${usuarioJson.tipo}`;
            telefono += `${usuarioJson.telefono}`;
            residencia += `${usuarioJson.residencia}`;
            correo += `${usuarioJson.correo}`;
            sexo += `${usuarioJson.sexo}`;
            adicional += `${usuarioJson.adicional}`;
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
        });
    }

    $(document).on('click', '.edit', (e) => {
        funcion = funcionesUsuario.capturar_datos;
        edit_flag = true;
        //AJAX
        $.post('../controlador/UsuarioController.php', { funcion, id_usuario }, (response) => {
            const usuario = JSON.parse(response);
            $('#telefono').val(usuario.telefono);
            $('#residencia').val(usuario.residencia);
            $('#correo').val(usuario.correo);
            $('#sexo').val(usuario.sexo);
            $('#adicional').val(usuario.adicional);
        });
    })

    $('#form-usuario').submit(e => {
        if (edit_flag == true) {
            let telefono = $('#telefono').val();
            let residencia = $('#residencia').val();
            let correo = $('#correo').val();
            let sexo = $('#sexo').val();
            let adicional = $('#adicional').val();
            funcion = funcionesUsuario.editar_datos;
            //AJAX
            $.post('../controlador/UsuarioController.php', { id_usuario, funcion, telefono, residencia, correo, sexo, adicional }, (response) => {
                if (response == 'editado') {
                    //Mostrar efecto
                    $('#editado').hide('slow');
                    $('#editado').show(2000);
                    $('#editado').hide(2000);
                    //Restaurar campos de input
                    $('#form-usuario').trigger('reset');
                }
                edit_flag = false;
                obtener_publicar_usuario(id_usuario);
            })
        }
        else {
            //Mostrar efecto
            $('#no_editado').hide('slow');
            $('#no_editado').show(1500);
            $('#no_editado').hide(2000);
            //Restaurar campos de input
            $('#form-usuario').trigger('reset');
        }
        e.preventDefault();
    })
})