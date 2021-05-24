<?php
// crear el modelo del Usuario
require_once 'ModeloBase.php';
class Usuario extends ModeloBase{
	public $nombre;
	public $apellido;
	public $email;

	public function __construct(){
		parent::__construct();
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($apellido){
		$this->apellido=$apellido;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function setEmail($email){
		$this->email=$email;
	}
	public function getEmail(){
		return $this->email;
	}

	public function Create(){
		$sql = "INSERT INTO usuarios(nombre,apellido,email)VALUES ('{$this->nombre}','{$this->apellido}','{$this->email}')";
		$guardado = $this->db->query($sql);

		return $guardado;
	}

	public function eliminado($nombre) {

   $sql ="DELETE FROM usuarios WHERE nombre = '{$nombre}' ORDER BY nombre ASC LIMIT 1;";
  

    $delete = $this->db->query($sql);
   return $delete;


}
    

public function editar($nombre) {
    $sql = "UPDATE usuarios SET  nombre=  '{$this->nombre}','{$this->apellido}','{$this->email}'"
                . "WHERE nombre = $nombre;";
        $guardar = $this->db->query($sql);
        return $guardar;
}
   


}
