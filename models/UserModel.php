<?php
include_once ('Model.php');
class UserModel extends Model
{

  function GuardarUsuario($user,$pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(email,password) VALUES(?,?)");
    $sentencia->execute(array($user,$pass));
  }
    
  function getUser($user){
    $sentencia = $this->db->prepare( "select * from usuario where email = ?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getUsers(){
    $sentencia = $this->db->prepare('SELECT * FROM  usuario');
    $sentencia->execute(array());
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getAdministradores(){
    $sentencia = $this->db->prepare('SELECT email FROM  usuario WHERE admin=1');
    $sentencia->execute(array());
    $arrAdmins= $sentencia->fetchAll(PDO::FETCH_ASSOC);
    $arrAdminsEmail=[];
    foreach ($arrAdmins as $admin){
      $arrAdminsEmail[]=$admin['email'];
    }
    return $arrAdminsEmail;
  }

  function editarUsuario($user){
    $usuario = $this->getUser($user);
    $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE email=?");
    $sentencia->execute(array(!$usuario["admin"],$user));
  }
  

}
?>
