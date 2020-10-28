<?php

class Dashboard extends CI_Controller
{


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
