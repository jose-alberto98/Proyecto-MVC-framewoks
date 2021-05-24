<?php
// crear la configuracion de la bd

class database{
	public static function conectar(){
		$conexion = new mysqli("localhost","root","","usuarios");
		$conexion->query("SET NAME 'utf8");
		return $conexion;
	}
}
?>