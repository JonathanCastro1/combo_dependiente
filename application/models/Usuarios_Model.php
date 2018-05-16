<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_Model extends CI_Model {
	

	public function seleccionarUsuarios()
	{
		$sql = "SELECT nombre,apellido,usuario,contrasena
		 from usuarios";

		$query = $this->db->query($sql);

		return $query->row();
	}

		public function registrarUsuarios($nombre ,$apellido ,$estado ,$capital ,$usuario ,$contrasena )
	{
		$sql = "INSERT INTO usuarios VALUES
		       (null,
		        '$nombre',
		         '$apellido',
		         '$estado',
		         '$capital',		         
		         '$usuario',
		         '$contrasena')";

		$query = $this->db->query($sql);

		return $query;
	}

		public function cargarEstados()
	{
		$sql = "SELECT estado from hubicacion";

		$query = $this->db->query($sql);

		return $query->result();
	}

		public function cargarCapitales()
	{
		$sql = "SELECT capital from hubicacion";

		$query = $this->db->query($sql);

		return $query->result();
	}

		public function obtenerCapitales($estado)
	{
		$sql = "SELECT capital from hubicacion where estado='$estado'  ";

		$query = $this->db->query($sql);

		return $query->row();
	}
}
