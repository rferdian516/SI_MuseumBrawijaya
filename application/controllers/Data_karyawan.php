<?php

class Data_karyawan extends CI_Controller
{

    // public function __construct ()
    // {
    // 	parent ::__construct ();
    // 	$this->load->model('M_data_karyawan'); //panggil model
    // }
    public function index()
    {
        $data['data_karyawan'] = $this->M_data_karyawan->tampil_data()->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Karyawan/v_data_karyawan', $data);
        $this->load->view('tamplates/footer');
    }

    public function input()
    {
        $data = array(
            'id_karyawan' => set_value('id_karyawan'),
            'nama'        => set_value('nama'),
            'usia'        => set_value('usia'),
            'alamat'      => set_value('alamat'),
            'no_telp'     => set_value('no_telp'),
            'jabatan'     => set_value('jabatan')

        );
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Karyawan/v_data_karyawan_form', $data);
        $this->load->view('tamplates/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'id_karyawan' => $this->input->post('id_karyawan', TRUE),
                'nama'        => $this->input->post('nama', TRUE),
                'usia'        => $this->input->post('usia', TRUE),
                'alamat'      => $this->input->post('alamat', TRUE),
                'no_telp'     => $this->input->post('no_telp', TRUE),
                'jabatan'     => $this->input->post('jabatan', TRUE)
            );
            $this->M_data_karyawan->input($data);
            redirect('Data_karyawan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_karyawan', 'id_karyawan', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('usia', 'usia', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required', ['required' => 'Tidak Boleh Kosong!']);
    }

    public function update($id)
    {
        $where = array('id_karyawan' => $id);
        $data['data_karyawan'] = $this->M_data_karyawan->edit($where, 'tb_karyawan')->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Karyawan/v_data_karyawan_update', $data);
        $this->load->view('tamplates/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_karyawan');
        $nama        = $this->input->post('nama');
        $usia        = $this->input->post('usia');
        $alamat      = $this->input->post('alamat');
        $no_telp     = $this->input->post('no_telp');
        $jabatan     = $this->input->post('jabatan');

        $data = array(
            'nama'        => $nama,
            'usia'        => $usia,
            'alamat'      => $alamat,
            'no_telp'     => $no_telp,
            'jabatan'     => $jabatan
        );

        $where = array(
            'id_karyawan' => $id
        );
        $this->M_data_karyawan->update_data($where, $data, 'tb_karyawan');
        redirect('Data_karyawan');
    }

    public function delete($id)
    {
        $where = array('id_karyawan' => $id);
        $this->M_data_karyawan->hapus_data($where, 'tb_karyawan');
        redirect('Data_karyawan');
    }

    public function print()
    {
        $data['data_karyawan'] = $this->M_data_karyawan->tampil_data("tb_karyawan")->result();
        $this->load->view('Backend/Karyawan/print_karyawan', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['data_karyawan'] = $this->M_data_karyawan->tampil_data('tb_karyawan')->result();
        $this->load->view('Backend/Karyawan/pdf_karyawan', $data);
        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("pdf_karyawan.pdf", array('Attachment' => 0));
    }



    public function excel()
    {
        $data['data_karyawan'] = $this->M_data_karyawan->tampil_data("tb_karyawan")->result();
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator("Reynaldo Ferdian");
        $object->getProperties()->setLastModifiedBy("Reynaldo Ferdian");
        $object->getProperties()->setTitle("Data Karyawan");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'ID KARYAWAN');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA KARYAWAN');
        $object->getActiveSheet()->setCellValue('D1', 'USIA');
        $object->getActiveSheet()->setCellValue('E1', 'ASAL KOTA');
        $object->getActiveSheet()->setCellValue('F1', 'NOMOR TELEPON');
        $object->getActiveSheet()->setCellValue('G1', 'JABATAN');
        $baris = 2;
        $no = 1;
        foreach ($data['data_karyawan'] as $dt_k) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $dt_k->id_karyawan);
            $object->getActiveSheet()->setCellValue('C' . $baris, $dt_k->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $dt_k->usia);
            $object->getActiveSheet()->setCellValue('E' . $baris, $dt_k->alamat);
            $object->getActiveSheet()->setCellValue('F' . $baris, $dt_k->no_telp);
            $object->getActiveSheet()->setCellValue('G' . $baris, $dt_k->jabatan);
            $baris++;
        }
        $filename = "Data_Karyawan" . '.xlxs';
        $object->getActiveSheet()->setTitle("Data Karyawan");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Desiposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
    }
}
