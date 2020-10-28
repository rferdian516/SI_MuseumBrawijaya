<div class="container-fluid">
    <div class="alert alert-primary " role="alert">
        <i class="fas fa-users"></i> Input Daftar Koleksi
    </div>
    <form method="post" action="<?php echo base_url('Data_koleksi/input_aksi') ?>">
        <label class=" col-md-4"></label>
        <label class=" col-md-4 text-danger">*awali dengan KODE 'KL'</label>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>ID Koleksi</b></label>
            <input type="text" name="id_koleksi" placeholder="ex : KL0001" class="form-control col-md-5">
            <?php echo form_error('id_koleksi', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Nama Koleksi</b></label>
            <input type="text" name="nama_koleksi" placeholder="Masukan Nama " class="form-control col-md-5">
            <?php echo form_error('nama_koleksi', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Negara</b></label>
            <input type="text" name="negara" placeholder="Asal Produksi" class="form-control col-md-5">
            <?php echo form_error('negara', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>Tahun</b></label>
            <input type="number" name="tahun" placeholder="Tahun Dibuat/Ditemukan" class="form-control col-md-5">
            <?php echo form_error('tahun', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group row">
            <label class=" col-md-2"></label>
            <label class=" col-md-2"><b>GAMBAR</b></label>
            <input type="file" name="gambar" placeholder="Upload Gambar" class="form-control col-md-5">
            <?php echo form_error('gambar', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group row">
            <label class=" col-md-8"></label>
            <button type="submit" class="btn btn-success col-md-1">Simpan</button>
        </div>
    </form>
</div>