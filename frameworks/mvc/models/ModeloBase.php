<?php



require_once 'config/database.php';
class ModeloBase{
	public $db;

	public function __construct(){
		$this->db = database::conectar();
	}

	//consultas generales 

	public function MostrarTodos($tabla){
		$query = $this->db->query("SELECT * FROM $tabla");
		return $query;
	}



}
?>