<?php

class Data_pengunjung extends CI_Controller
{

    public function index()
    {
        $data['data_pengunjung'] = $this->M_data_pengunjung->tampil_data()->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Pengunjung/v_data_pengunjung', $data);
        $this->load->view('tamplates/footer');
    }

    public function input()
    {
        $data = array(
            'id_pengunjung' => set_value('id_pengunjung'),
            'nama'        => set_value('nama'),
            'usia'        => set_value('usia'),
            'kategori'        => set_value('kategori'),
            'tgl'      => set_value('tgl')

        );
        $data['data_pengunjung'] = $this->M_data_pengunjung->tampil_data()->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Pengunjung/v_data_pengunjung_form', $data);
        $this->load->view('tamplates/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'id_pengunjung' => $this->input->post('id_pengunjung', TRUE),
                'nama'        => $this->input->post('nama', TRUE),
                'usia'        => $this->input->post('usia', TRUE),
                'kategori'        => $this->input->post('kategori', TRUE),
                'tgl'      => $this->input->post('tgl', TRUE)
            );
            $this->M_data_pengunjung->input($data);
            redirect('Data_pengunjung');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pengunjung', 'id_pengunjung', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('usia', 'usia', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('kategori', 'kategori', 'required', ['required' => 'Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('tgl', 'tgl', 'required', ['required' => 'Tidak Boleh Kosong!']);
    }

    public function update($id)
    {
        $where = array('id_pengunjung' => $id);
        $data['data_pengunjung'] = $this->M_data_pengunjung->edit($where, 'tb_pengunjung')->result();
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/sidebar');
        $this->load->view('Backend/Pengunjung/v_data_pengunjung_update', $data);
        $this->load->view('tamplates/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_pengunjung');
        $nama        = $this->input->post('nama');
        $usia        = $this->input->post('usia');
        $kategori        = $this->input->post('kategori');
        $tgl      = $this->input->post('tgl');

        $data = array(
            'nama'        => $nama,
            'usia'        => $usia,
            'kategori'        => $kategori,
            'tgl'      => $tgl
        );

        $where = array(
            'id_pengunjung' => $id
        );
        $this->M_data_pengunjung->update_data($where, $data, 'tb_pengunjung');
        redirect('Data_pengunjung');
    }

    public function delete($id)
    {
        $where = array('id_pengunjung' => $id);
        $this->M_data_pengunjung->hapus_data($where, 'tb_pengunjung');
        redirect('Data_pengunjung');
    }

    public function print()
    {
        $data['data_pengunjung'] = $this->M_data_pengunjung->tampil_data("tb_pengunjung")->result();
        $this->load->view('Backend/pengunjung/print_pengunjung', $data);
    }
    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['data_pengunjung'] = $this->M_data_pengunjung->tampil_data('tb_pengunjung')->result();
        $this->load->view('Backend/pengunjung/pdf_pengunjung', $data);
        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("pdf_pengunjung.pdf", array('Attachment' => 0));
    }



    public function excel()
    {
        $data['data_pengunjung'] = $this->M_data_pengunjung->tampil_data("tb_pengunjung")->result();
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator("Reynaldo Ferdian");
        $object->getProperties()->setLastModifiedBy("Reynaldo Ferdian");
        $object->getProperties()->setTitle("Data Pengunjung");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'ID PENGUNJUNG');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA PENGUNJUNG');
        $object->getActiveSheet()->setCellValue('D1', 'USIA');
        $object->getActiveSheet()->setCellValue('E1', 'KATEGORI');
        $object->getActiveSheet()->setCellValue('F1', 'TANGGAL');
        $baris = 2;
        $no = 1;
        foreach ($data['data_pengunjung'] as $dt_p) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $dt_p->id_pengunjung);
            $object->getActiveSheet()->setCellValue('C' . $baris, $dt_p->nama);
            $object->getActiveSheet()->setCellValue('D' . $baris, $dt_p->usia);
            $object->getActiveSheet()->setCellValue('E' . $baris, $dt_p->kategori);
            $object->getActiveSheet()->setCellValue('F' . $baris, $dt_p->tgl);
            $baris++;
        }
        $filename = "Data_pengunjung" . '.xlxs';
        $object->getActiveSheet()->setTitle("Data pengunjung");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Desiposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
    }
}
