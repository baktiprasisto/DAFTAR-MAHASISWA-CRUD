<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_mahasiswa'); // load model
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = "Data Mahasiswa";
        $data['mhs'] = $this->model_mahasiswa->get_mhs(); // panggil model
        $data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();

        // Load view
        $this->load->view('layouts/header', $data);
        $this->load->view('index', $data);
        $this->load->view('layouts/footer');
    }

    public function simpan_data() 
	{
		$this->model_mahasiswa->simpan_data();
		$data['mhs'] = $this->model_mahasiswa->get_mhs();
		$data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();
		$this->load->view('index',$data);
	}

    public function edit_data($id) 
	{
        $data['title'] = "Edite Data Mahasiswa";
		$data['data']   = $this->model_mahasiswa->get_edit_data($id); 
		$data['mhs']    = $this->model_mahasiswa->get_mhs();
		$data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();
		

        // Load view
        $this->load->view('layouts/header', $data);
        $this->load->view('mhs', $data);
        $this->load->view('layouts/footer');
	}
	
	public function eksekusi_edit() 
	{
		$this->model_mahasiswa->eksekusi_edit(); 
	}
	
	public function hapus_data($id) 
	{
		$this->model_mahasiswa->hapus_data($id);
	}
}
