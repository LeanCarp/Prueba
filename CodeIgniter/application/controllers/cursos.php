<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cursos extends CI_Controller {
	function __construct(){
		parent::__construct(); /*Ejecuta el constructor del padre*/
		//$this->load->helper('mihelper'); // Primero busca en helper de Application, sino va a System.
		$this->load->helper('form'); // Viene por defecto con CI. Crear formularios con ese helper.
		$this->load->model('codigofacilito_model');
	}
	function index(){
		$data['cursos'] = $this->codigofacilito_model->obtenerCursos();
		$this->load->view('codigofacilito/headers'); // Permite cargar múltiples vistas. En este caso se cargó el head.
		$this->load->view('cursos/cursos', $data); // Permite cargar múltiples vistas. En este caso se cargó el head.
	}


	function nuevo(){
		$this->load->view('codigofacilito/headers'); // Permite cargar múltiples vistas. En este caso se cargó el head.
		$this->load->view('cursos/formulario'); // Permite cargar múltiples vistas. En este caso se cargó el head.
	}

	function recibirdatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'videos' => $this->input->post('videos')
			);
		$this->codigofacilito_model->crearCurso($data);

		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido');
	}
}

?>