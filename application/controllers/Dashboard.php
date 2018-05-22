<?php 

/**
* 
*/
class Dashboard extends CI_Controller
{

	// tampil 
	public function index()
	{
		$data['tb'] = $this->db->get('tb_pemb_air');

		$this->load->view('main', $data);
	}

	// tambah
	public function add()
	{
		$this->load->view('add');
	}

	public function restore()
	{
		$data = array(
			'penanggung' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'kode' => $this->input->post('kode'),
			'biayabeban' => $this->input->post('biayabeban'),
			'hargaperkubik' => $this->input->post('hargaperkubik'),
			'pemakaianair' => $this->input->post('pemakaianair'),
			'totalbayar' => $this->input->post('totalbayar')
		);

		$this->db->insert('tb_pemb_air', $data);

		redirect('dashboard');
	}


	// edit
	public function edit($id)
	{
		$this->db->where('id', $id);
		$data['tb'] = $this->db->get('tb_pemb_air')->row();

		$this->load->view('edit', $data);
	}

	public function update($id)
	{

		$data = array(
			'penanggung' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'kode' => $this->input->post('kode'),
			'biayabeban' => $this->input->post('biayabeban'),
			'hargaperkubik' => $this->input->post('hargaperkubik'),
			'pemakaianair' => $this->input->post('pemakaianair'),
			'totalbayar' => $this->input->post('totalbayar')
		);

		$this->db->where('id', $id);
		$this->db->update('tb_pemb_air', $data);

		redirect('dashboard');
	}


	// hapus
	public function hapus($id)
	{
		$this->db->delete('tb_pemb_air', ['id' => $id]);

		redirect('dashboard');
	}
}

 ?>