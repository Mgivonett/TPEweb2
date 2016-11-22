<?php
include_once ('Model.php');
class UserModel extends Model
{
  function getUser($user){
    $sentencia = $this->db->prepare( "select * from usuario where email = ?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
function GuardarUsuario($user,$pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(email,password) VALUES(?,?)");
    $sentencia->execute(array($user,$pass));
}

}

?>
