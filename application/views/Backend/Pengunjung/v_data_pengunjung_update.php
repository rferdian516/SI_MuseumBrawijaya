<div class="class container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-ticket-alt"></i> Update Informasi Pengunjung
    </div>

    <?php foreach ($data_pengunjung as $dt_p) : ?>
        <form method="post" action="<?php echo base_url('Data_pengunjung/update_aksi') ?>">

            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>ID pengunjung</b></label>
                <input type="text" class="form-control col-md-5" name="id_pengunjung" value="<?php echo $dt_p->id_pengunjung ?>" readonly>
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Nama pengunjung</b></label>
                <input type="text" class="form-control col-md-5" name="nama" value="<?php echo $dt_p->nama ?>">
            </div>
            <label class=" col-md-4"></label>
            <label class=" col-md-4 text-danger">*0-16th anak-anak, >17 Dewasa</label>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b> USIA</b></label>
                <select class="form-control col-md-5" name="usia" value="<?php echo $dt_p->usia ?>">
                    <option><?php echo $dt_p->usia ?></option>
                    <option>Anak-Anak</option>
                    <option>Dewasa</option>
                </select>
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b> KATEGORI</b></label>
                <select class="form-control col-md-5" name="kategori" value="<?php echo $dt_p->kategori ?>">
                    <option><?php echo $dt_p->kategori ?></option>
                    <option>Pelajar</option>
                    <option>Umum</option>
                </select>
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b> Tanggal Kunjungan</b></label>
                <input type="date" class="form-control col-md-5" name="tgl" value="<?php echo $dt_p->tgl ?>">
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