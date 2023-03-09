<?php
include_once 'Conexion.php';

class Usuario{
    var $objetos;
    private $acceso;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }

    function Loguearse($dni,$pass){
        $sql="SELECT * FROM usuario inner join tipo_us on us_tipo=id_tipo_us where dni_us=:dni and contrasena_us=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':dni' => $dni,':pass'=>$pass));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
       
    } 
    function obtener_usuario($id_usuario){
        $sql="SELECT * FROM usuario join tipo_us ON us_tipo=id_tipo_us and id_usuario=:id_usuario";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_usuario' => $id_usuario));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }     
    
    function editar($id_usuario,$telefono,$residencia,$correo,$sexo,$adicional){
        $sql="UPDATE usuario SET telefono_us=:telefono, residencia_us=:residencia, correo_us=:correo, sexo_us=:sexo, adicional_us=:adicional WHERE id_usuario=:id_";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_'=>$id_usuario, ':telefono' => $telefono, ':residencia'=>$residencia, ':correo'=>$correo, ':sexo'=>$sexo, ':adicional'=>$adicional));
    }
}

?>