<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_Controller extends CI_Controller {


	public function home()
	{

		// $data['datos'] = $this->Usuarios_Model->seleccionarUsuarios();
		// $data=json_encode($data);
		$this->load->view('include/header');
		$this->load->view('include/navbar');
		$this->load->view('usuarios/home');
		$this->load->view('include/footer');

		// echo "hola"
	}

		public function registrarUsuarios()
	{

		if (isset($_POST['submit'])) {
			$nombre=$this->input->post('nombre');
			$apellido=$this->input->post('apellido');
			$estado=$this->input->post('estado');
			$capital=$this->input->post('capital');
			$usuario=$this->input->post('usuario');
			$contrasena=$this->input->post('contrasena');

			$this->Usuarios_Model->registrarUsuarios($nombre ,$apellido ,$estado ,$capital ,$usuario ,$contrasena );

			redirect(base_url("index.php/usuarios_controller/login"));
		} else {			

			redirect(base_url("index.php/usuarios_controller/home"));
		}
		

	
	}

		public function cargarEstados()
	{

		$data = $this->Usuarios_Model->cargarEstados();


		foreach ($data as $datos) {
			

			echo '<option>'.$datos->estado.'</option>';
		}

		// echo $data->estado;
		// echo "hola";
		
	}

		public function cargarCapitales()
	{

		$data = $this->Usuarios_Model->cargarCapitales();


		foreach ($data as $datos) {
			

			echo '<option >'.$datos->capital.'</option>';
		}		
		
	}


	public function login()
	{

		// $data['datos'] = $this->Usuarios_Model->seleccionarUsuarios();
		// $data=json_encode($data);
		$this->load->view('include/header');
		$this->load->view('include/navbar');
		$this->load->view('usuarios/login');
		$this->load->view('include/footer');

		// echo "hola"
	}

		public function obtenerCapitales()
	{
			// combo dependiente a lo pro Jonathan Castro Style

			$estado=$_POST["miestado"];

			$data=$this->Usuarios_Model->obtenerCapitales($estado);


			echo '<option>'.$data->capital.'</option>';



			

		// combo dependiente a lo picapiedra

			// $options="";
	  //       if ($_POST["miestado"]== 'Amazonas') 
	  //       {
	  //           $options= '
	  //           <option value="Puerto Ayacucho">Puerto Ayacucho</option>           
	  //           '; 	
				
	  //       }

	  //        if ($_POST["miestado"]== 'Anzoátegui') 
	  //       {
	  //           $options= '
	  //           <option value="Aragua">Aragua</option>           
	  //           '; 				
				
	  //       }

	  //           if ($_POST["miestado"]== 'Apure') 
	  //       {
	  //           $options= '
	  //           <option value="San Fernando de Apure">San Fernando de Apure</option>           
	  //           '; 				
				
	  //       }

   //              if ($_POST["miestado"]== 'Aragua') 
	  //       {
	  //           $options= '
	  //           <option value="Maracay">Maracay</option>           
	  //           '; 				
				
	  //       }

	  //              if ($_POST["miestado"]== 'Barinas') 
	  //       {
	  //           $options= '
	  //           <option value="Barinas">Barinas</option>           
	  //           ';  				
				
	  //       }

	  //       echo $options;

	}

}
