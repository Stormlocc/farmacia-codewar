<?php
include '../modelo/Usuario.php';
session_start();
//Recupera variables del html
$user = $_POST['user'];
$pass = $_POST['pass'];
$usuario = new Usuario();

if (!empty($_SESSION['us_tipo'])) {
    //TODO: eso puede mejorar con el patron FACTORY
    switch ($_SESSION['us_tipo']) {
        case 1:
            header('Location: ../vista/adm_catalogo.php');
            break;
        case 2:
            header('Location: ../vista/tec_catalogo.php');
            break;
    }
} else {
    $usuario->Loguearse($user, $pass);
    if (!empty($usuario->answer)) {
        foreach ($usuario->answer as $x) {
            //TODO: cambiar 'usuario' a 'id_usuario' 
            $_SESSION['usuario'] = $x->id_usuario;
            $_SESSION['us_tipo'] = $x->us_tipo;
            $_SESSION['nombre_us'] = $x->nombre_us;
        }
        //TODO: eso puede mejorar con el patron FACTORY
        switch ($_SESSION['us_tipo']) {
            case 1:
                header('Location: ../vista/adm_catalogo.php');
                break;
            case 2:
                header('Location: ../vista/tec_catalogo.php');
                break;
        }
    } else {
        //Se conecto a la BD but no existe el usuario
        header('Location: ../index.php');
    }
}
