<?php
include_once '../modelo/Usuario.php';

$usuario = new Usuario();
// Las funciones de $_POST['funcion'] provienen de Usuario.js del diccionario funcionesUsuario
if ($_POST['funcion'] == 'obtener_usuario') {
    $json = array();
    $usuario->obtener_usuario($_POST['dato']);
    foreach ($usuario->answer as $x) {
        $json[] = array(
            'nombre' => $x->nombre_us,
            'apellidos' => $x->apellidos_us,
            'edad' => $x->edad,
            'dni' => $x->dni_us,
            'tipo' => $x->nombre_tipo,
            'telefono' => $x->telefono_us,
            'residencia' => $x->residencia_us,
            'correo' => $x->correo_us,
            'sexo' => $x->sexo_us,
            'adicional' => $x->adicional_us,
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if ($_POST['funcion'] == 'capturar_datos') {
    $json = array();
    $id_usuario = $_POST['id_usuario'];
    $usuario->obtener_usuario($id_usuario);
    foreach ($usuario->answer as $x) {
        $json[] = array(
            'telefono' => $x->telefono_us,
            'residencia' => $x->residencia_us,
            'correo' => $x->correo_us,
            'sexo' => $x->sexo_us,
            'adicional' => $x->adicional_us,
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if ($_POST['funcion'] == 'editar_datos') {
    $id_usuario = $_POST['id_usuario'];
    $telefono = $_POST['telefono'];
    $residencia = $_POST['residencia'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $adicional = $_POST['adicional'];
    $usuario->editar($id_usuario, $telefono, $residencia, $correo, $sexo, $adicional);
    echo 'editado';
}
