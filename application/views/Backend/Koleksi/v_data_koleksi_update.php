<div class="class container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-ticket-alt"></i> Update Informasi koleksi
    </div>

    <?php foreach ($data_koleksi as $dt_kol) : ?>
        <form method="post" action="<?php echo base_url('Data_Koleksi/update_aksi') ?>">

            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>ID koleksi</b></label>
                <input type="text" class="form-control col-md-5" name="id_koleksi" value="<?php echo $dt_kol->id_koleksi ?>" readonly>
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Nama Koleksi</b></label>
                <input type="text" class="form-control col-md-5" name="nama_koleksi" value="<?php echo $dt_kol->nama_koleksi ?>">
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Negara</b></label>
                <input type="text" class="form-control col-md-5" name="negara" value="<?php echo $dt_kol->negara ?>">
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Tahun</b></label>
                <input type="number" class="form-control col-md-5" name="tahun" value="<?php echo $dt_kol->tahun ?>">
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Gambar</b></label>
                <input type="file" class="form-control col-md-5" name="gambar" value="<?php echo $dt_kol->gambar ?>">
            </div>

            <label class=" col-md-7"></label>
            <button type="submit" class="btn btn-success col-md-1">Update</button>
            <button class="btn btn-danger col-md-1" onclick="goBack()">Batal</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </form>
    <?php endforeach; ?>
</div>