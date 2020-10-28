<?php
class m_data_karyawan extends CI_Model
{

    function get_all_karyawan()
    {
        $result = $this->db->get('tb_karyawan');
        return $result;
    }

    function tambah_karyawan($id_karyawan, $nama, $alamat, $no_telp, $jabatan)
    {
        $data = array(
            'id_karyawan' => $id_karyawan,
            'nama'        => $nama,
            'alamat'      => $alamat,
            'no_telp'     => $no_telp,
            'jabatan'     => $jabatan
        );
        $this->db->insert('tb_karyawan', $data);
    }

    function edit_karyawan($id_karyawan, $nama, $alamat, $no_telp, $jabatan)
    {
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'jabatan' => $jabatan
        );
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->update('tb_karyawan', $data);
    }

    function hapus_karyawan($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->delete('tb_karyawan');
    }
}
