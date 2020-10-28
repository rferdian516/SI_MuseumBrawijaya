<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data_karyawan');
	}
	public function index()
	{
		// $this->load->view('dashboard');
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');

		$this->load->view('tamplates/footer');
		$data = array(
			'data'  => $this->db->from("tb_karyawan")->count_all_results(),
			'data2' => $this->db->from("tb_pengunjung")->count_all_results(),
			'data3' => $this->db->from("tb_koleksi")->count_all_results()
		);
		$this->load->view('Backend/administrator', $data);
	}
}
