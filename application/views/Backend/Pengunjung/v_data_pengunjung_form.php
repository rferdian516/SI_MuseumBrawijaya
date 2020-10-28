<div class="container-fluid">
    <div class="alert alert-primary " role="alert">
        <i class="fas fa-users"></i> Input Data Pengunjung
    </div>
    <form method="post" action="<?php echo base_url('Data_pengunjung/input_aksi') ?>">
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>ID pengunjung</b></label>
            <input type="text" name="id_pengunjung" placeholder="Masukan ID pengunjung" class="form-control col-md-5">
            <?php echo form_error('id_pengunjung', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Nama pengunjung</b></label>
            <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control col-md-5">
            <?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
        </div>
        <label class="col-md-4"></label>
        <label class=" col-md-4 text-danger">*0-16th anak-anak, ≥17 Dewasa</label>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"> <b>USIA</b></label>
            <select class="form-control col-md-5" name="usia">
                <option>----Pilih Golongan USIA----</option>
                <option>Anak-Anak</option>
                <option>Dewasa</option>
                <?php echo form_error('usia', '<div class="text-danger small" ml-3>') ?>
            </select>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"> <b>KATEGORI</b></label>
            <select class="form-control col-md-5" name="kategori">
                <option>----Pilih Kategori Pengunjung----</option>
                <option>Pelajar</option>
                <option>Umum</option>
                <?php echo form_error('kategori', '<div class="text-danger small" ml-3>') ?>
            </select>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Tanggal Kunjungan</b></label>
            <input type="date" name="tgl" placeholder="Jalan, Kode Pos, Kota " class="form-control col-md-5">
            <?php echo form_error('tgl', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-8"></label>
            <button type="submit" class="btn btn-success col-md-1">Simpan</button>
        </div>
    </form>
</div>