<?php

include_once('models/PeliculasModel.php');
include_once('views/PeliculasView.php');
include_once('views/PeliculasFiltradasXGeneroView.php');
require_once('views/DetallesPeliculaView.php');
require_once('views/AdministradorPeliculaView.php');
require_once('controllers/GenerosController.php');
require_once('controllers/UserController.php');

class PeliculasController
{
  private $vistaPeliculasXgenero;
  private $vistaDetallesPelicula;
  private $modelo;
  private $generosController;
  private $vista;
  private $userController;
  
  function __construct($generoController,$userController)
  {
    $this->vistaPeliculasXgenero = new PeliculasFiltradasXGeneroView();
    $this->vistaDetallesPelicula = new DetallesPeliculaView();
    $this->vistaAdministradorPelicula = new AdministradorPeliculaView();
    $this->generosController=$generoController;
    $this->userController=$userController;
    $this->vista=new PeliculasView();
    $this->modelo=new PeliculasModel();
  }

  function iniciar(){
    $peliculas = $this->modelo->getPeliculas();
    $generos= $this->generosController->getModelo()->getGeneros();
    $usuarioLogueado=$this->userController->usuarioLogueado();
    $this->vista->mostrar($peliculas,$generos,$usuarioLogueado);
  }

  /*function login(){
    $this->userController->login();
    $this->mostrarPrincipal();
  }

  function crearUsuario(){
    $this->userController->createUsuario();
    $this->mostrarPrincipal();
  }

  function administrarUsuarios(){
    $this->userController->aadministrarUsuarios();
    $this->mostrarPrincipal();*/
 // }

  function mostrarPrincipal(){
    $peliculas = $this->modelo->getPeliculas();
    $generos = $this->generosController->getModelo()->getGeneros();
    $usuarioLogueado=$this->userController->usuarioLogueado();
    $this->vista->mostrarPrincipal($peliculas,$generos,$usuarioLogueado);
  }
  
  function actualizarLista(){
    $peliculas = $this->modelo->getPeliculas();
    $this->vistaAdministradorPelicula->getListaParaAdmin($peliculas);
  }

  function getImagenesVerificadas($imagenes){
    $imagenesVerificadas = [];
    for ($i=0;$i<count($imagenes['name']);$i++) {
      if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
        $imagen_aux = [];
        $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
        $imagen_aux['name']=$imagenes['name'][$i];
        $imagenesVerificadas[]=$imagen_aux;
      }
    }
    return $imagenesVerificadas;
  }
  
  function guardar(){
    if(isset($_FILES['imagenes'])&&isset($_POST['titulo'])&&isset($_POST['link'])&&isset($_POST['descripcion'])&&isset($_POST['generos'])){
      $titulo = $_POST['titulo'];
      $link = $_POST['link'];
      $descripcion = $_POST['descripcion'];
      $generos = $_POST['generos'];
      $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
      if((count($imagenesVerificadas)>0) && (count($generos)>0)){
        $id_generos=$this->generosController->getModelo()->getIdGenerosSegunArregloGeneros($generos);
        $this->modelo->crearPelicula($titulo,$link,$descripcion,$id_generos,$imagenesVerificadas);
        $this->vista->mostrarMensaje("La pelicula se creo con imagen y todo!", "success");
      }
      else{
        $this->vista->mostrarMensaje("Error con las imagenes", "danger");
      }
    }
    else{
      $this->vista->mostrarMensaje("Error. uno o mas campos no completados","danger");
    }
    $this->actualizarLista();
  }

  function eliminar(){
    $key = $_GET['id_pelicula'];
    $this->modelo->eliminarPelicula($key);
    $peliculas = $this->modelo->getPeliculas();
    $this->vistaAdministradorPelicula->getListaParaAdmin($peliculas);
  }

  function peliculaAEditar(){
    $key = $_GET['id_pelicula'];
    $pelicula=$this->modelo->getPeliculaXId($key);
    $generos = $this->generosController->getModelo()->getGeneros();//$this->modelo->getGeneros();
    $this->vistaAdministradorPelicula->mostrarPelicula($pelicula,$generos);
  }

  function mostrarVistaAdmnistradorPeliculas(){//despues de editar se carga el tpl adminlista para mostrar las peliculas
    $peliculas = $this->modelo->getPeliculas();
    $generos = $this->generosController->getModelo()->getGeneros();
    $this->vistaAdministradorPelicula->mostrarAdministradorDePeliculas($peliculas,$generos);
  }
  
  function mostrarVistaPeliculas(){
    $peliculas = $this->modelo->getPeliculas();
    $this->vista->getLista($peliculas);
  }
  
  function updateGenerosPelicula($generos,$id_pelicula){//cuando edito compruebo los generos que ya existen en esa pelicula, para no modificarlos, los que no existen, para crearlos y los que ya no estan, borrarlos
    $todosLosGeneros=$this->generosController->getModelo()->getGeneros();
    $generosAnterioresDePelicula=$this->modelo->getGenerosSegunIdPelicula($id_pelicula);
    foreach ($todosLosGeneros as $unGenero){//por cada genero que exista en la tabla Genero
      if (in_array($unGenero['titulo'],$generos)){//si el usuario eligio este genero, compruebo si los tiene la pelicula
        if (!in_array($unGenero['titulo'],$generosAnterioresDePelicula)){ //si el genero seleccionado no esta en la tabla de relacion Genero_Pelicula, lo agrego
          $this->modelo->crearGeneroPelicula($this->modelo->getIdGenero($unGenero['titulo']),$id_pelicula);
        }
      }
      else if (in_array($unGenero['titulo'],$generosAnterioresDePelicula)){// si el genero no esta seleccionado, pero pertenece a la tabla de realcion genero_pelicula, lo elimino
        $this->modelo->eliminarUnGeneroDePelicula($this->modelo->getIdGenero($unGenero['titulo']),$id_pelicula);
      }
    }
  }

  function editar(){
    if(isset($_POST['id_pelicula'])&&isset($_POST['titulo'])&&isset($_POST['link'])&&isset($_POST['descripcion'])&&isset($_POST['generos'])){
      $id_pelicula=$_POST['id_pelicula'];
      $titulo = $_POST['titulo'];
      $link = $_POST['link'];
      $descripcion = $_POST['descripcion'];
      $generos = $_POST['generos'];
      if(!empty($_FILES['imagenes'])){  //si se agrego una imagen al formulalrio para cambiar la actual
        $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
        if((count($imagenesVerificadas)>0) && (count($generos)>0)){
          //$imagen=$this->modelo->imagenUpload($imagenesVerificadas);
          $this->updateGenerosPelicula($generos,$id_pelicula);
          $this->modelo->editarPelicula($titulo,$link,$descripcion,$imagenesVerificadas,$id_pelicula);
          $this->mostrarVistaAdmnistradorPeliculas();
        }
        else if(count($generos)>0){ //pelicula editada, pero conservando la imagen anterior porque no paso la verificacion
          $this->updateGenerosPelicula($generos,$id_pelicula);
          $this->modelo->editarPeliculaSinImagen($titulo,$link,$descripcion,$id_pelicula);
          $this->mostrarVistaAdmnistradorPeliculas();
        }
        else{
          $this->vista->mostrarMensaje("Error con los generos", "danger");
          $this->mostrarVistaAdmnistradorPeliculas();
        }
      }
      else {
        if(count($generos)>0){//pelicula editada, pero conservando la imagen anterior porque no se agrego al formulario
          $this->updateGenerosPelicula($generos,$id_pelicula);
          $this->modelo->editarPeliculaSinImagen($titulo,$link,$descripcion,$id_pelicula);
          $this->mostrarVistaAdmnistradorPeliculas();
        }
        else{
          $this->vista->mostrarMensaje("Error con los generos", "danger");
          $this->mostrarVistaAdmnistradorPeliculas();
        }
      }
    }
    else{
      $this->vista->mostrarMensaje("Error. uno o varios campos no completados", "danger");
      $this->mostrarVistaAdmnistradorPeliculas();
    }

  }

  function getPelicula(){
    $id_pelicula=$_GET['id_pelicula'];
    $pelicula=$this->modelo->getPeliculaXId($id_pelicula);
    $usuarioLogueado=$this->userController->usuarioLogueado();
    $this->vistaDetallesPelicula->getPelicula($pelicula,$usuarioLogueado);
  }

  function mostrarPeliculasXGenero(){
    $tituloGenero=$_GET['titulo'];
    $id_genero=$this->modelo->getIdGenero($tituloGenero);
    $generos=$this->generosController->getModelo()->getGeneros();
    $peliculasXgenero=$this->modelo->getPeliculasXGenero($id_genero);
    if(empty($peliculasXgenero)){
      $this->vista->mostrarMensaje("No existen peliculas con ese genero", "danger");
    }
    else{
      $this->vistaPeliculasXgenero->mostrarPeliculasDelGenero($peliculasXgenero,$generos);
    }

  }
  function irAAdministradorDePeliculas(){
    $peliculas = $this->modelo->getPeliculas();
    $generos = $this->generosController->getModelo()->getGeneros();
    $this->vistaAdministradorPelicula->mostrarAdministradorDePeliculas($peliculas,$generos);
  }
  
  function eliminarImagen(){
    $id_imagen=$_GET['id_imagen'];
    $id_pelicula=$_GET['id_pelicula'];
    $this->modelo->eliminarImagen($id_imagen);
    $pelicula = $this->modelo->getPeliculaXId($id_pelicula);
    $usuarioLogueado=$this->userController->usuarioLogueado();
    $this->vistaDetallesPelicula->getPelicula($pelicula,$usuarioLogueado);
  }
}
 ?>
