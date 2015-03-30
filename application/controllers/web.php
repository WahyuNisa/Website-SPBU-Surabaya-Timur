<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index(){
		$data['slide'] = $this->mspbu->getSlide('spbu_spbu');
		$data['spbu'] = $this->mspbu->get('spbu_spbu');
		$this->load->view('web/index',$data);
	}

	public function cari(){
		if (isset($_POST["lokasi"])) {
			$lokasi = $_POST["lokasi"];
			$data['spbu'] = $this->mspbu->get('spbu_spbu');
			$data['spbusearch'] = $this->mspbu->getDetail('spbu_spbu','kecamatan',$lokasi);
			$data['slide'] = $this->mspbu->getSlide('spbu_spbu');
			$this->load->view('web/spbu',$data);
		}
		else{
			$fasilitas = $_POST["fasilitas"];
			$data['spbu'] = $this->mspbu->get('spbu_spbu');
			$data['spbusearch'] = $this->mspbu->getJoin('spbu_spbu','spbu_fasilitas','spbu_spbu.id_spbu=spbu_fasilitas.no_spbu','fasilitas',$fasilitas);
			$data['slide'] = $this->mspbu->getSlide('spbu_spbu');
			$this->load->view('web/spbu',$data);
		}
	}

	public function info($id){
		$data['allspbu'] = $this->mspbu->get('spbu_spbu');
		$data['spbu'] = $this->mspbu->getDetail('spbu_spbu','id_spbu',$id);
		$data['fasilitas'] = $this->mspbu->getDetail('spbu_fasilitas','no_spbu',$id);
		$data['produk'] = $this->mspbu->getDetail('spbu_produk','no_spbu',$id);
		$data['komentar'] = $this->mspbu->getDetail('spbu_komentar','no_spbu',$id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('komentar', 'Komentar', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('web/info',$data);
		}
		else{
			$komen['no_spbu'] = $id;
			$komen['email'] = set_value('email');
			$komen['nama'] = set_value('nama');
			$komen['komentar'] = set_value('komentar');
			$komen['tgl'] = date('Y-m-d');
			$this->mspbu->save('spbu_komentar',$komen);
			redirect('web/info/'.$id);
		}
		
	}
}