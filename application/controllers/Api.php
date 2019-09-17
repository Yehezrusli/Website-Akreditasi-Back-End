<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    public function __construct() {
        parent::__construct();
        header("Content-type: application/json");
		$this->load->database();
    }
    
    public function index() {
        echo "kambing";
    }

    public function tabel3a1(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3a1_DosenTetapUPPS")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}



	protected function serveApi($data) {
		echo json_encode([
			"status" => true,
			"result" => $data
        ]);
        return;
	}

}