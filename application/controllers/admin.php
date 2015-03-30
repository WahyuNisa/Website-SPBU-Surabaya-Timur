<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/login');
		}
		else{
			$data['username'] = set_value('username');
            $data['password'] = do_hash(set_value('password'), 'md5');
            if ($this->mspbu->login($data['username'], $data['password'],'spbu_user')){
            	$quser = $this->mspbu->getOne1('username', set_value('username'), 'password', $data['password'],'spbu_user');
            	$newdata = array(
            		'id_user' => $quser['id'],
            		'username' => $quser['username'],
            		'nama_user' => $quser['nama_user'],
            		'status' => $quser['status'],
            		'logged_in' => TRUE
            		);
            	$this->session->set_userdata($newdata);
            	$this->session->unset_userdata('error');
            	if ($this->session->userdata('status')=='Aktif') {
            		redirect('admin/user');
            	}
            	else{
            		$data['message'] = '<div class="alert alert-warning alert-dismissable">
            		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            		<strong>Account Anda Tidak Aktif Silahkan Menghubungi Administrator</strong>
            		</div>';
            		$this->load->view('admin/login', $data);
            	}
            }
            else{
            	$data['message'] = '<div class="alert alert-warning alert-dismissable">
					            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					            	<strong>Username / Password anda salah silahkan login kembali</strong>
					            	</div>';
				$this->load->view('admin/login', $data);
                }
		}
		
	}

	public function user(){
		if ($this->session->userdata('logged_in')) {
			$crud = new grocery_CRUD();
	        $crud->set_table('spbu_user');
	        $output = $crud->render();
	        $this->_example_output($output); 
		}
		else{
			redirect('admin');
		}

	}

	public function spbu(){
		if ($this->session->userdata('logged_in')) {
			$crud = new grocery_CRUD();
	        $crud->set_table('spbu_spbu');
	        $crud->set_field_upload('gambar','assets/img');
	        $output = $crud->render();
	        $this->_example_output($output); 
		}
		else{
			redirect('admin');
		}

	}

	public function produk(){
		if ($this->session->userdata('logged_in')) {
			$crud = new grocery_CRUD();
	        $crud->set_table('spbu_produk');
	        $crud->set_relation('no_spbu','spbu_spbu','nama_spbu');
	        $output = $crud->render();
	        $this->_example_output($output); 
		}
		else{
			redirect('admin');
		}
	}

	public function fasilitas(){
		if ($this->session->userdata('logged_in')) {
			$crud = new grocery_CRUD();
	        $crud->set_table('spbu_fasilitas');
	        $crud->set_relation('no_spbu','spbu_spbu','nama_spbu');
	        $output = $crud->render();
	        $this->_example_output($output); 
		}
		else{
			redirect('admin');
		}
	}

	public function komentar(){
		if ($this->session->userdata('logged_in')) {
			$crud = new grocery_CRUD();
	        $crud->set_table('spbu_komentar');
	        $crud->set_relation('no_spbu','spbu_spbu','nama_spbu');
	        $output = $crud->render();
	        $this->_example_output($output); 
		}
		else{
			redirect('admin');
		}
	}

	public function logout(){
		$this->mspbu->logout();
		redirect('admin');
	}

	function _example_output($output = null){
        $this->load->view('admin/user.php',$output);    
    }   
}