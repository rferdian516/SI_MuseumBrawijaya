<?php

class Data_koleksi extends CI_Controller
{

    public function index()
    {
        $data['data_koleksi'] = $this->M_data_koleksi->tampil_data()->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Koleksi/v_data_koleksi', $data);
        $this->load->view('tamplates/footer');
    }

    public function input()
    {
        $data = array(
            'id_koleksi' => set_value('id_koleksi'),
            'nama_koleksi'        => set_value('nama_koleksi'),
            'tahun'        => set_value('tahun'),
            'negara'        => set_value('negara'),
            'gambar'      => set_value('gambar')
        );
        $data['data_koleksi'] = $this->M_data_koleksi->tampil_data()->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Koleksi/v_data_koleksi_form', $data);
        $this->load->view('tamplates/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'id_koleksi' => $this->input->post('id_koleksi', TRUE),
                'nama_koleksi'        => $this->input->post('nama_koleksi', TRUE),
                'negara'        => $this->input->post('negara', TRUE),
                'tahun'        => $this->input->post('tahun', TRUE),
                'gambar'      => $this->input->post('gambar', TRUE)
            );
            $this->M_data_koleksi->input($data);
            redirect('Data_koleksi');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_koleksi', 'id_koleksi', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('nama_koleksi', 'nama_koleksi', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('negara', 'tahun', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('tahun', 'tahun', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('gambar', 'gambar', 'required', ['required' => 'Tidak Boleh Kosong!']);
    }

    public function update($id)
    {
        $where = array('id_koleksi' => $id);
        $data['data_koleksi'] = $this->M_data_koleksi->edit($where, 'tb_koleksi')->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Koleksi/v_data_koleksi_update', $data);
        $this->load->view('tamplates/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_koleksi');
        $nama_koleksi        = $this->input->post('nama_koleksi');
        $negara        = $this->input->post('negara');
        $tahun        = $this->input->post('tahun');
        $gambar      = $this->input->post('gambar');

        $data = array(
            'nama_koleksi'   => $nama_koleksi,
            'negara'          => $negara,
            'tahun'          => $tahun,
            'gambar'         => $gambar
        );

        $where = array(
            'id_koleksi' => $id
        );
        $this->M_data_koleksi->update_data($where, $data, 'tb_koleksi');
        redirect('Data_koleksi');
    }

    public function delete($id)
    {
        $where = array('id_koleksi' => $id);
        $this->M_data_koleksi->hapus_data($where, 'tb_koleksi');
        redirect('Data_koleksi');
    }
}
