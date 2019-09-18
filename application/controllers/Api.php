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

	public function tabel3a2(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3a2_EWMPDosenTetapPerguruanTinggi")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}
	
	public function tabel3a3(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3a3_DosenTidakTetapUPPS")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3a4(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3a4_DosenPembimbingUtamaTugasAkhir")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b1(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b1_RekognisiDTPS")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b2(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b2_PenelitianDTPS")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b3(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b3_PKMDTPS")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b4Jurnal(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b4_PartJurnal")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b4Seminar(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b4_PartSeminar")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b4Tulisan(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b4_PartTulisan")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b5(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b5_LuaranPenelitianPKMLainnya")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel3b6(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel3b61_KaryaIlmiahDisitasi")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel6a(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel6a_PenelitianDTPSMahasiswa")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel5b(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel5b_IntegrasiKegiatanPenelitianPkM")->result_array();
		$this->db->query("SET NOCOUNT OFF");
		return $this->serveApi($data);	
	}

	public function tabel7(){
		$this->load->database();
		$this->db->query("SET NOCOUNT ON");
		$data = $this->db->query("EXEC Tabel7_PKMDTPSMahasiswa")->result_array();
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