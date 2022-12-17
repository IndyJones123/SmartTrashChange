<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('');
		$this->load->model('M_pemesanan');
	}

	public function index()
	{
		$queryData = $this->M_pemesanan->getData();
		$DATA = array('queryAllMhs' => $queryData);
		//$this->load->view('home', $DATA);
		$this->template->display('home', $DATA);
	}
	public function V_update($id)
	{
		$querydata = $this->M_pemesanan->getData($id);
		$DATA = array('queryData' => $querydata);
		$this->load->view('V_update', $DATA);
	}
	public function fungsiTambah()
	{
		$Nama = $this->input->post('Nama');
		$Alamat = $this->input->post('Alamat');
		$Kategori = $this->input->post('Kategori');
		$Jenis = $this->input->post('Jenis');
		$Tanggal = $this->input->post('Tanggal');
		$Total = $this->input->post('Total');
		$Harga = $this->input->post('Harga');


		$ArrInsert = array(
			'Nama' => $Nama,
			'Alamat' => $Alamat,
			'Kategori' => $Kategori,
			'Jenis' => $Jenis,
			'Tanggal' => $Tanggal,
			'Total' => $Total,
			'Harga' => $Harga
		);

		$this->M_pemesanan->insertdata($ArrInsert);
		redirect(base_url(''));
	}
	public function fungsiEdit()
		{
            $Nama = $this->input->post('Nama');
            $Alamat = $this->input->post('Alamat');
            $Kategori = $this->input->post('Kategori');
            $Jenis = $this->input->post('Jenis');
            $Tanggal = $this->input->post('Tanggal');
            $Total = $this->input->post('Total');
            $Harga = $this->input->post('Harga');
    
    
            $ArrUpdate = array(
                'Nama' => $Nama,
                'Alamat' => $Alamat,
                'Kategori' => $Kategori,
                'Jenis' => $Jenis,
                'Tanggal' => $Tanggal,
                'Total' => $Total,
                'Harga' => $Harga
			);

			$this->M_pemesanan->insertdata($ArrUpdate);
			redirect(base_url(''));
	}

	public function fungsiDelete($NPM)
	{
		$this->M_pemesanan->deleteDataMhs($NPM);
		redirect(base_url(''));
	}
}