<?php

class PeliculasModel{
  private $peliculas;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=base_peliculas;charset=utf8', 'root', '');

    //$this->tareas = ['Tarea 11','Tarea 21','Tarea 31'];
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
      $generos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $generos;
  }
  function getPeliculaXId($id_pelicula){
      $sentencia = $this->db->prepare( "select * from pelicula where id_pelicula=?");
      $sentencia->execute(array($id_pelicula));
      $peliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $peliculas;
  }
  function getGenerosPelicula($id_pelicula){//Devuelve la lista de los titulos de los generos de una pelicula
      $sentencia = $this->db->prepare( "select fk_id_genero from genero_pelicula where fk_id_pelicula=?");
      $sentencia->execute(array($id_pelicula));
      $generos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      $listaGeneros=[];
      foreach ($generos as $keyG => $genero){
          $listaGeneros[]=$this->getGeneroXId($genero['fk_id_genero']);
      }
      return $listaGeneros;
  }
  function getPeliculasXGenero($id_genero){
      $sentencia = $this->db->prepare( "select fk_id_pelicula from genero_pelicula where fk_id_genero=?");
      $sentencia->execute(array($id_genero));
      $id_peliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      $listaPeliculas=[];
      foreach ($id_peliculas as $id_pelicula){
          $listaPeliculas[]=$this->getPeliculaXId($id_pelicula);
      }
      return $listaPeliculas;
  }
  function getPeliculas(){
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    $peliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($peliculas as $key => $pelicula) {
      $peliculas[$key]['generos']=$this->getGenerosPelicula($pelicula['id_pelicula']);
    }
    return $peliculas;
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
    $id_genero = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $id_genero;
  }
  function crearPelicula($titulo,$link,$descripcion, $imagen,$generos){
    $path="images/".uniqid()."_".$imagen["name"];
    move_uploaded_file($imagen["tmp_name"], $path);
    $sentencia = $this->db->prepare("INSERT INTO pelicula(titulo,link,imagen,descripcion) VALUES(?,?,?,?)");
    $sentencia->execute(array($titulo,$link,$path,$descripcion));
    $id_pelicula = $this->db->lastInsertId();
    //agregar los generos
    for ($i=0;$i<count($generos);$i++){
      $id_genero_tabla=$this->getIdGenero($generos[$i]);
      var_dump($id_genero_tabla);
      if($id_genero_tabla!=null){
        $this->crearGeneroPelicula($id_genero_tabla,$id_pelicula);
      }else{
        $id_genero=$this->crearGenero($generos[$i]);
        $this->crearGeneroPelicula($id_genero,$id_pelicula);
      }
    }
  }
  function crearGeneroPelicula($id_genero,$id_pelicula){//crear regitro en la tabla genero_pelicula
    $sentencia = $this->db->prepare("INSERT INTO genero_pelicula(fk_id_pelicula,fk_id_genero) VALUES(?,?)");
    $sentencia->execute(array($id_pelicula,$id_genero));
  }

  function eliminarTarea($id_tarea){
    //Elimina la '$id_tarea' del arreglo
    //tareas[0] = 'Tarea 11'
    //tareas[1] = 'Tarea 21'
    //tareas[2] = 'Tarea 11'
    //unset($this->tareas[$id_tarea]);
    $sentencia = $this->db->prepare("delete from tarea where id_tarea=?");
    $sentencia->execute(array($id_tarea));
  }

  function getTarea($id_tarea){
    $sentencia = $this->db->prepare( "select * from tarea where id_tarea=?");
    $sentencia->execute(array($id_tarea));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}

?>
