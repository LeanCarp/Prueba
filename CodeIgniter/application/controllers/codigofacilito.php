<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Codigofacilito extends CI_Controller {
	function __construct(){
		parent::__construct(); /*Ejecuta el constructor del padre*/
		//$this->load->helper('mihelper'); // Primero busca en helper de Application, sino va a System.
		$this->load->helper('form'); // Viene por defecto con CI. Crear formularios con ese helper.
		$this->load->model('codigofacilito_model');
	}

	function index(){ /*Se ejecuta cuando cargues este controlador*/
		$this->load->library('menu', array('Inicio','Contacto','Cursos'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('codigofacilito/headers'); // Permite cargar múltiples vistas. En este caso se cargó el head.
		$this->load->view('codigofacilito/bienvenido',$data);
	}

	function holaMundo(){
		/*View permite cargar las vistas*/
		/*El load viene por defecto en el CI_Controller*/
		$this->load->view('codigofacilito/headers'); // Permite cargar múltiples vistas. En este caso se cargó el head.
		$this->load->view('codigofacilito/bienvenido');
	}

	function nuevo(){
		$this->load->view('codigofacilito/headers'); // Permite cargar múltiples vistas. En este caso se cargó el head.
		$this->load->view('codigofacilito/formulario'); // Permite cargar múltiples vistas. En este caso se cargó el head.
	}

	function recibirDatos(){
		$data = array(
			'nombreCurso' => $this->input->post('nombre'),
			'videosCurso' => $this->input->post('videos')
			);
		$this->codigofacilito_model->crearCurso($data);

		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido');
	}
}
?>