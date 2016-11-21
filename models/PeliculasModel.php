<?php
include_once ('Model.php');
class PeliculasModel extends Model{
  private $peliculas;

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
      $pelicula['generos']=$this->getGenerosSegunIdPelicula($pelicula['id_pelicula']);//agregado de generos a la pelicula
      $pelicula['imagenes']=$this->getImagenesSegunIdPelicula($pelicula['id_pelicula']);
      return $pelicula;
  }
  function getGenerosSegunIdPelicula($id_pelicula){//Devuelve la lista de titulos de los generos de una pelicula
      $sentencia = $this->db->prepare( "select fk_id_genero from genero_pelicula where fk_id_pelicula=?");
      $sentencia->execute(array($id_pelicula));
      $generos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      $listaGeneros=[];
      foreach ($generos as $genero){
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
          $listaPeliculas[]=$this->getPeliculaXId($id_pelicula['fk_id_pelicula']);
      }
      return $listaPeliculas;
  }
  function getPeliculas(){
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    $peliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($peliculas as $key => $pelicula) {
      $peliculas[$key]['generos']=$this->getGenerosSegunIdPelicula($pelicula['id_pelicula']);
      $peliculas[$key]['imagenes']=$this->getImagenesSegunIdPelicula($pelicula['id_pelicula']);
    }
    return $peliculas;
  }
  
  function getIdGenero($genero)
  {
    $sentencia = $this->db->prepare("select id_genero from genero where titulo=?");
    $sentencia->execute(array($genero));
    $id_genero = $sentencia->fetch(PDO::FETCH_ASSOC);
    return $id_genero['id_genero'];
  }
//----------------------------get de imagenes-----------------------------
  function getImagenesSegunIdPelicula($id_pelicula){
    $imagenesArr=$this->db->prepare("SELECT * FROM imagen WHERE fk_id_pelicula=?");
    $imagenesArr->execute(array($id_pelicula));
    $imagenes=$imagenesArr->fetchAll(PDO::FETCH_ASSOC);
    return $imagenes;
  }
  //--------------------------------------------------------------------
  function crearPelicula($titulo,$link,$descripcion,$id_generos,$imagenes){
    $sentencia = $this->db->prepare("INSERT INTO pelicula(titulo,link,descripcion) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$link,$descripcion));
    $id_pelicula = $this->db->lastInsertId();
    $this->crearImagenes($id_pelicula,$imagenes);
    //agrega a la tabla GeneroPelicula todos los generos que fueron seleccionados para esa pelicula
    foreach ($id_generos as $id_genero){
      $this->crearGeneroPelicula($id_genero,$id_pelicula);
    }
  }

  function imagenUpload($imagen){
    $path="images/".uniqid()."_".$imagen["name"];
    move_uploaded_file($imagen["tmp_name"],$path);
    return $path;
  }

  function crearImagenes($id_pelicula,$imagenes){
    foreach ($imagenes as $imagen){
      $path=$this->imagenUpload($imagen);
      $imgACrear=$this->db->prepare("INSERT INTO imagen(direccion,fk_id_pelicula) VALUES (?,?)");
      $imgACrear->execute(array($path,$id_pelicula));
    }
  }

  function crearGeneroPelicula($id_genero,$id_pelicula){//crear regitro en la tabla genero_pelicula
    $sentencia = $this->db->prepare("INSERT INTO genero_pelicula(fk_id_pelicula,fk_id_genero) VALUES(?,?)");
    $sentencia->execute(array($id_pelicula,$id_genero));
  }

  function eliminarGenerosPeliculaSegunIdPelicula($id_pelicula){
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
    $this->eliminarGenerosPeliculaSegunIdPelicula($id_pelicula);
  }

  function eliminarImagen($id_imagen){
    $sentencia = $this->db->prepare("delete from imagen where id_imagen=?");
    $sentencia->execute(array($id_imagen));
  }
  
  function editarPelicula($titulo,$link,$descripcion,$imagenes,$id_pelicula){
    $this->crearImagenes($id_pelicula,$imagenes);
    $this->editarPeliculaSinImagen($titulo,$link,$descripcion,$id_pelicula);
  }

  function editarPeliculaSinImagen($titulo,$link,$descripcion,$id_pelicula){
    $sentencia = $this->db->prepare("update pelicula set titulo=?,link=?,descripcion=? where id_pelicula=?");
    $sentencia->execute(array($titulo,$link,$descripcion,$id_pelicula));
  }
}
?>
