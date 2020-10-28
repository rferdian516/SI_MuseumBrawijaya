<div class="container-fluid">

    <div class="alert alert-primary " role="alert">
        <i class="fas fa-users"></i> Input Data Karyawan
    </div>
    <form method="post" action="<?php echo base_url('Data_karyawan/input_aksi') ?>">
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>ID Karyawan</b></label>
            <input type="text" name="id_karyawan" placeholder="ex: K0001" class="form-control col-md-5">
            <?php echo form_error('id_karyawan', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Nama Karyawan</b></label>
            <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control col-md-5">
            <?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Usia</b></label>
            <input type="text" name="usia" placeholder="ex: 30 " class="form-control col-md-5">
            <?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Asal Kota </b></label>
            <input type="text" name="alamat" placeholder="ex: Malang,dsb " class="form-control col-md-5">
            <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>No Telepon</b></label>
            <input type="text" name="no_telp" placeholder="ex: 085234567899 " class="form-control col-md-5">
            <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"> <b>Jabatan</b></label>
            <select class="form-control col-md-5" name="jabatan">
                <option>----Pilih Kategori Jabatan----</option>
                <option>Cleaning Service</option>
                <option>Ticketing</option>
                <option>Office Manager</option>
                <option>Security</option>
                <option>Receptionist</option>
                <option>Help Desk</option>
                <option>Petugas Khusus</option>
                <?php echo form_error('usia', '<div class="text-danger small" ml-3>') ?>
            </select>
        </div>
        <div class="form-group row">
            <label class=" col-md-8"></label>
            <button type="submit" class="btn btn-success col-md-1">Simpan</button>
        </div>
    </form>

</div>