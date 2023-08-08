<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DTS extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('mahasiswa');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$config['base_url'] = 'http://localhost/ci_jwd23/DTS/index/';
		$query = $this->db->query("select*from mahasiswa");
		$row = $query->num_rows();
		$config['total_rows'] = $row;
		$config['per_page'] = 3;
		$data['start'] = $this->uri->segment(3);

		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$config['num_links'] = 2;

		$this->pagination->initialize($config);




		$data['dbmhs'] = $this->mahasiswa->tampil($config['per_page'], $data['start']);
		$data['title'] = "DTS 2023";
		$this->load->view('header', $data);
		$this->load->view('admin');
		$this->load->view('footer');
	}
	public function adduser()
	{

		$data['title'] = "DTS 2023";
		$this->form_validation->set_rules('tnim', 'NIM', 'required|min_length[9]|is_unique[mahasiswa.nim]');
		$this->form_validation->set_rules('tnama', 'Nama', 'required');
		$this->form_validation->set_rules('tprodi', 'Program Studi', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('header', $data);
			$this->load->view('form_adduser');
			$this->load->view('footer');
		} else {
			// $this->mahasiswa->simpan();
			$data = [
				'nim' => $this->input->post('tnim', true),
				'nama' => $this->input->post('tnama', true),
				'prodi' => $this->input->post('tprodi', true)
			];
			$this->db->insert('mahasiswa', $data);

			redirect(base_url() . 'DTS');
		}
	}
	public function delete_mhs($id_ = '')
	{
		$id = $id_ / 12345 / 12345;
		$this->db->delete('mahasiswa', ['id' => $id]);
		redirect(base_url() . 'DTS');
	}
	public function update_mhs($id_ = '')
	{
		$id = $id_ / 12345 / 12345;
		$this->db->where(['id' => $id]);
		$data['dbMhs'] = $this->db->get('mahasiswa')->row_array();


		$data['title'] = "DTS 2023";
		$this->form_validation->set_rules('tnim', 'NIM', 'required|min_length[9]');
		$this->form_validation->set_rules('tnama', 'Nama', 'required');
		$this->form_validation->set_rules('tprodi', 'Program Studi', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('header', $data);
			$this->load->view('form_updateuser');
			$this->load->view('footer');
		} else {

			$data = [
				'nim' => $this->input->post('tnim', true),
				'nama' => $this->input->post('tnama', true),
				'prodi' => $this->input->post('tprodi', true)
			];
			$this->db->where(['id' => $id]);
			$this->db->update('mahasiswa', $data);
			redirect(base_url() . 'DTS');
		}
	}
	public function search()
	{
		$search = $_POST['tsearch'];
		if ($search) {
			$this->db->like(['nim' => $search]);
			$this->db->or_like(['nama' => $search]);
			$this->db->or_like(['prodi' => $search]);

			$data['dbsearch'] = $this->db->get('mahasiswa')->result_array();

			$data['title'] = "DTS 2023";
			$this->load->view('header', $data);
			$this->load->view('search');
			$this->load->view('footer');
		} else {
			redirect(base_url() . 'DTS');
		}
	}
	public function searchxml()
	{
		$this->db->like(['nim' => $_POST['keyword']]);
		$this->db->or_like(['nama' => $_POST['keyword']]);
		$this->db->or_like(['prodi' => $_POST['keyword']]);
		$data['dbmhs'] = $this->db->get("mahasiswa", 3)->result_array();

		$this->load->view('searchxml', $data);
	}

	public function login()
	{
		$data['title'] = "JWD2023";
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function daftar()
	{

		$this->form_validation->set_rules('tuser', 'User', 'trim|required|valid_email');
		$this->form_validation->set_rules('tnama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tpass1', 'Password', 'trim|required|matches[tpass2]');
		$this->form_validation->set_rules('tpass2', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {


			$data['title'] = "JWD2023";
			$this->load->view('header', $data);
			$this->load->view('daftar');
			$this->load->view('footer');
		} else {
		}
	}
}
