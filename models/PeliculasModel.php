<?php

class PeliculasModel{
  private $peliculas;
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
  function getPeliculaXId($id_pelicula){
      $sentencia = $this->db->prepare( "select * from pelicula where id_pelicula=?");
      $sentencia->execute(array($id_pelicula));
      $pelicula = $sentencia->fetch(PDO::FETCH_ASSOC);
      $pelicula['generos']=$this->getGenerosPelicula($pelicula['id_pelicula']);//agregado de generos a la pelicula
      return $pelicula;
  }
  function getGenerosPelicula($id_pelicula){//Devuelve la lista de los titulos de los generos de una pelicula
      $sentencia = $this->db->prepare( "select fk_id_genero from genero_pelicula where fk_id_pelicula=?");
      $sentencia->execute(array($id_pelicula));
      $generos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      $listaGeneros=[];
      foreach ($generos as $key => $genero){
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
    $id_genero = $sentencia->fetch(PDO::FETCH_ASSOC);
    return $id_genero['id_genero'];
  }
  function crearPelicula($titulo,$link,$descripcion, $imagen,$generos){
    $path=$this->imagenUpload($imagen);
    $sentencia = $this->db->prepare("INSERT INTO pelicula(titulo,link,imagen,descripcion) VALUES(?,?,?,?)");
    $sentencia->execute(array($titulo,$link,$path,$descripcion));
    $id_pelicula = $this->db->lastInsertId();
    //agregar los generos y/o crearlos
    $this->agregadoYCreacionDeGeneros($generos,$id_pelicula);
  }

  function agregadoYCreacionDeGeneros($generos,$id_pelicula){
    foreach ($generos as $genero){
      $id_genero_tabla=$this->getIdGenero($genero);
      if($id_genero_tabla!=""){ //si el genero existe en la tabla generos
        $this->crearGeneroPelicula($id_genero_tabla,$id_pelicula);
      }else{                    //sino existe el genero en la tabla, lo creo y luego hago la relacion genero/pelicula
        $id_genero=$this->crearGenero($genero);
        $this->crearGeneroPelicula($id_genero,$id_pelicula);
      }
    }
  }

  function crearGeneroPelicula($id_genero,$id_pelicula){//crear regitro en la tabla genero_pelicula
    $sentencia = $this->db->prepare("INSERT INTO genero_pelicula(fk_id_pelicula,fk_id_genero) VALUES(?,?)");
    $sentencia->execute(array($id_pelicula,$id_genero));
  }

  function eliminarGenerosPelicula($id_pelicula){
    $sentencia = $this->db->prepare("delete from genero_pelicula where fk_id_pelicula=?");
    $sentencia->execute(array($id_pelicula));
  }

  function eliminarUnGeneroDePelicula($id_genero,$id_pelicula){
    $sentencia = $this->db->prepare("delete from genero_pelicula where fk_id_pelicula=? AND fk_id_genero=?");
    $sentencia->execute(array($id_pelicula,$id_genero));
  }
  
  function eliminarPelicula($id_pelicula){
    $sentencia = $this->db->prepare("delete from pelicula where id_pelicula=?");
    $sentencia->execute(array($id_pelicula));
    $this->eliminarGenerosPelicula($id_pelicula);
  }

  function desvincularImgAnterior($imagen){
    unlink($imagen);
  }

  function imagenUpload($imagen){
    $path="images/".uniqid()."_".$imagen["name"];
    move_uploaded_file($imagen["tmp_name"],$path);
    return $path;
  }

  function editarPelicula($titulo,$link,$descripcion,$imagen,$id_pelicula){
    $sentencia = $this->db->prepare("update pelicula set titulo=?,link=?,descripcion=?,imagen=? where id_pelicula=?");
    $sentencia->execute(array($titulo,$link,$descripcion,$imagen,$id_pelicula));
  }

  function editarPeliculaSinImagen($titulo,$link,$descripcion,$id_pelicula){
    $sentencia = $this->db->prepare("update pelicula set titulo=?,link=?,descripcion=? where id_pelicula=?");
    $sentencia->execute(array($titulo,$link,$descripcion,$id_pelicula));
  }
}
?>
