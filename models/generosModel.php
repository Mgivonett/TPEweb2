<?php
class GenerosModel{
  private $generos;
  private $db;
  private $generoExiste=-1;
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
    if($this->getIdGenero($titulo)==""){
      $sentencia = $this->db->prepare("INSERT INTO genero(titulo) VALUES(?)");
      $sentencia->execute(array($titulo));
      $id_genero = $this->db->lastInsertId();
      return $id_genero;
    }
    return $this->generoExiste;//quiere decir que e genero pasado por parametro ya existe y por lo tanto no se crea ne la tabla Genero
  }
  //creacionDeGeneros($generos,$id_pelicula){ NO VA
/*  function creacionDeGeneros($generos,$id_pelicula){
    foreach ($generos as $genero) {
      $id_genero=$this->crearGenero($genero);
      if($id_genero!=$this->generoExiste){
        $this->crearGeneroPelicula($id_genero,$id_pelicula);//crear regitro en la tabla genero_pelicula
      }
    }
  }*/
  
  function getIdGenero($genero)
  {
    $sentencia = $this->db->prepare("select id_genero from genero where titulo=?");
    $sentencia->execute(array($genero));
    $id_genero = $sentencia->fetch(PDO::FETCH_ASSOC);
    return $id_genero['id_genero'];
  }
  
  function getIdGenerosSegunArregloGeneros($generos){
    $id_generos=[];
    foreach ($generos as $genero){
      $id_generos[]= $this->getIdGenero($genero);
    }
    return $id_generos;
  }
  function eliminarGenero($id_genero){
    $sentencia = $this->db->prepare("delete from genero where id_genero=?");
    $sentencia->execute(array($id_genero));
  }
  function eliminarGeneroPeliculaSegunIdGenero($id_genero){
    $sentencia = $this->db->prepare("delete from genero_pelicula where fk_id_genero=?");
    $sentencia->execute(array($id_genero));
  }
  
  function crearGeneroPelicula($id_genero,$id_pelicula){//crear regitro en la tabla genero_pelicula
    $sentencia = $this->db->prepare("INSERT INTO genero_pelicula(fk_id_pelicula,fk_id_genero) VALUES(?,?)");
    $sentencia->execute(array($id_pelicula,$id_genero));
  }

  function editarGenero($tituloGenero,$id_genero){
    $sentencia= $this->db->prepare("UPDATE genero set titulo=? WHERE id_genero=?");
    $sentencia->execute(array($tituloGenero,$id_genero));
  }
}
?>