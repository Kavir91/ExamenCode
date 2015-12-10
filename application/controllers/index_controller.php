<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class index_controller extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
  
    public function index() {
        $this->load->view('index/index');
    }
    public function ingresar()
	{		
		$this->load->view('headers/librerias');
		$this->load->view('index');
		$this->load->view('footer');
	}
    public function logueo()
	{
	    $data=array();
		$query=$this->input->get('query', TRUE);
		if($query)
		{
			$result=$this->index_model->logueo(trim($query));
			if ($result!=FALSE)
			{
				$data=array('result'=>$result);
				$this->load->view('headers/librerias');
				$this->load->view('confirma_datos', $data);
				$this->load->view('footer');
				
			}else{
				$this->load->view('headers/librerias');
				$this->load->view('index');
				$this->load->view('footer');
				echo "<p tabindex='0' role='alert'>Clave incorrecta, inténtalo de nuevo.</p>";
			}
		}
	}

	public function confirma()
	{
		$data=array();
		$query=$this->input->get('query', TRUE);
		$result=$this->index_model->logueo(trim($query));
		$data=array('result'=>$result);
		$this->load->view('headers/librerias');
		$this->load->view('confirma_datos', $data);
		$this->load->view('footer');
			
	}
	public function creaExamen()
	{
		//date_default_timezone_set('America/Mexico_City');
		//$fechadeExamen = date('Y-m-d');
		//$horaIncio=date("H:i:s");
		/*$data = array(
			'idExamen' => $this ->input->post('idExamen', TRUE),
			'fechadeExamen' => date('Y-m-d'),
			'horaInicio' => date('H:i:s'),
			'horaFinal' => date('H:i:s'),
			'verExamen' => $this ->input->post('verExamen', TRUE),	
			'aspirante_folioUV' => $this->input->post('aspirante_folioUV', TRUE),
		);
		$this->index_model->crear($data);	*/
		//redirect('index_controller/preguntas');	
		
		redirect('/preguntas_controller/index/');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */