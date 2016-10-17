<?php
class GenerosModel{
  private $generos;
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=base_peliculas;charset=utf8', 'root', '');
  }

  function getGeneros(){
    $sentencia = $this->db->prepare( "select * from genero");
    $sentencia->execute();
    $generos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $generos;
  }

  function getGeneroXId($id_genero){//Retorna el titulo de un genero de acuerdo al ID pasado como parametro
    $sentencia = $this->db->prepare( "select titulo from genero where id_genero=?");
    $sentencia->execute(array($id_genero));
    $genero = $sentencia->fetch(PDO::FETCH_ASSOC);
    return $genero['titulo'];
  }
  function crearGenero($titulo){//crea el genero ne la tabla GENERO y retorna el ID
    $sentencia = $this->db->prepare("INSERT INTO genero(titulo) VALUES(?)");
    $sentencia->execute(array($titulo));
    $id_genero = $this->db->lastInsertId();
    return $id_genero;
  }
  function getIdGenero($genero)
  {
    $sentencia = $this->db->prepare("select id_genero from genero where titulo=?");
    $sentencia->execute(array($genero));
    $id_genero = $sentencia->fetch(PDO::FETCH_ASSOC);
    return $id_genero['id_genero'];
  }
  function eliminarGenero($id_genero){
    $sentencia = $this->db->prepare("delete from genero where id_genero=?");
    $sentencia->execute(array($id_genero));
  }
}
?>