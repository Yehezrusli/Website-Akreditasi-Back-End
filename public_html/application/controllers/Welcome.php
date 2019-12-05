<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$data = null;
		// $data['content'] = $this->db->get('DosenTetapUPPS_TD')->result_array();
		$this->db->query("SET NOCOUNT ON");
		$data['result'] = $this->db->query("EXEC Tabel3a1_DosenTetapUPPS")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		// var_dump($data);die;
		$this->load->view('welcome_message', $data);
	}

	public function tabel3a1(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3a1_DosenTetapUPPS")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		$this->serveApi($data);	
	}



	protected function serveApi($data) {
		header("Content-type: application/json");

		echo json_encode([
			"status" => true,
			"result" => $data
		]);
	}
	// public function getSomething(){
	// 	$data = null;
	// 	$data['content'] = $this->db->get('DosenTetapUPPS_TD');
	// 	$this->load->view('welcome_message', $data);
	// }
}

