<?php

class ComentariosModel
{
  private $db;

  public function __construct()     //sacamos la herencia de Model porque se quedaba ciclando llamando a index.php de la carpeta db.
  {
     $this->db = new PDO('mysql:host=localhost;dbname=base_peliculas;charset=utf8', 'root', '');
  }

  public function getComentariosDePelicula($id_pelicula,$lvlAuth)
  {
    $comentarios=$this->db->prepare("SELECT 
                                      id_comentario, 
                                      fk_id_pelicula, 
                                      fk_id_usuario, 
                                      comentario, 
                                      puntuacion, 
                                      usuario.email AS usuario
                                      FROM comentario, usuario
                                      WHERE comentario.fk_id_usuario = usuario.id_usuario AND fk_id_pelicula=?");
    $comentarios->execute(array($id_pelicula));
    $arrComentarios= $comentarios->fetchAll(PDO::FETCH_ASSOC);
    foreach ($arrComentarios as $key=>$comentario){
      if($lvlAuth==ADMIN){
        $arrComentarios[$key]['admin'] = true;
      }
      else{
        $arrComentarios[$key]['admin'] = false;
      }
    }
    return $arrComentarios;
  }

  public function getComentario($id_comentario)
  {
    $comentario=$this->db->prepare("SELECT 
                                      id_comentario, 
                                      fk_id_pelicula, 
                                      fk_id_usuario, 
                                      comentario, 
                                      puntuacion, 
                                      usuario.email AS usuario
                                      FROM comentario, usuario
                                      WHERE comentario.fk_id_usuario = usuario.id_usuario AND fk_id_comentario=?");
    $comentario->execute(array($id_comentario));
    return $comentario->fetchAll(PDO::FETCH_ASSOC);
  }

  function createComentario($id_pelicula,$id_usuario,$comentario,$puntuacion){
    $sentencia = $this->db->prepare("INSERT INTO comentario(fk_id_pelicula,fk_id_usuario,comentario,puntuacion) values(?,?,?,?)");
    $sentencia->execute(array($id_pelicula,$id_usuario,$comentario,$puntuacion));
    return $this->db->lastInsertId();
  }

  function deleteComentario($id_comentario){
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->rowCount();
  }
}