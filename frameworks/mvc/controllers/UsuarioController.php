<?php
//crear el controlador UsuarioController dentro de la carpeta controllers

class UsuarioController{
	public function crear(){
		require_once 'views/usuarios/crear.php';
	}

	public function guardar(){
		require_once 'models/Usuario.php';
		$user = new Usuario();
		$user->setNombre($_POST['txNombre']);
		$user->setApellido($_POST['txApellido']);
		$user->setEmail($_POST['txEmail']);
		$guardar = $user->Create();
	}

	public function mostrarTodos(){
		require_once 'models/Usuario.php';
		$user = new Usuario();
		$resultUser= $user->MostrarTodos('usuarios');
		require_once 'views/usuarios/mostrar.php';
	}

	public function buscar(){}

	public function eliminar(){
		require_once 'views/usuarios/eliminar.php';
	}

	public function eliminacion(){
		require_once 'models/Usuario.php';
		$user = new Usuario();		
		$delete =$user->eliminado($_POST['txtNameDelete']);		
		header("Location:index.php?controller=UsuarioController&action=mostrarTodos");

	}
	public function editar() {
        require_once 'modelos/Usuario.php';
        $user = new Usuario();

        $modificar = $user>editar($_POST['txtNombreEditar']);

       
        require_once 'views/usuarios/editar.php';



}}