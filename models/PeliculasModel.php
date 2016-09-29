<?php

class PeliculasModel{
  private $peliculas;
  private $db;
  const HOST="localhosst";
  const DBNAME="base_peliculas";
  const USER="root";
  const PASS="";
  function __construct()
  {
    $this->db = new PDO('mysql:host=self::HOST;dbname=self::DBNAME;charset=utf8', self::USER, self::PASS);

    //$this->tareas = ['Tarea 11','Tarea 21','Tarea 31'];
  }

  function getGeneros(){
      $sentencia = $this->db->prepare( "select * from genero");
      $sentencia->execute();
      $generos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $generos;
  }
  function getGenerosPelicula($id_pelicula){
      $sentencia = $this->db->prepare( "select fk_id_genero from genero_pelicula where fk_id_pelicula=?");
      $sentencia->execute(array($id_pelicula));
      $generos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $generos;
  }
  function getPeliculasXGenero($id_genero){
      $sentencia = $this->db->prepare( "select fk_id_pelicula from genero_pelicula where fk_id_genero=?");
      $sentencia->execute(array($id_genero));
      $peliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $peliculas;
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

  function crearTarea($tarea, $imagenes){
    //Agrega en la ultima posicion del arreglo
    $sentencia = $this->db->prepare("INSERT INTO tarea(nombre) VALUES(?)");
    $sentencia->execute(array($tarea));
    $id_tarea = $this->db->lastInsertId();

    //Copiarla del lugar temporal al definitivo.
    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_tarea) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_tarea));
    }
    //$this->tareas[] = $tarea;
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

  function toogleTarea($id_tarea){
    $tarea = $this->getTarea($id_tarea);
    $sentencia = $this->db->prepare("update tarea set finalizada=? where id_tarea=?");
    $sentencia->execute(array(!$tarea['finalizada'],$id_tarea));
  }

  function getTarea($id_tarea){
    $sentencia = $this->db->prepare( "select * from tarea where id_tarea=?");
    $sentencia->execute(array($id_tarea));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }



}

?>
