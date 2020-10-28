<div class="class container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-users"></i> Update Informasi Karyawan
    </div>


    <?php foreach ($data_karyawan as $dt_k) : ?>
        <form method="post" action="<?php echo base_url('Data_karyawan/update_aksi') ?>">

            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>ID Karyawan</b></label>
                <input type="text" class="form-control col-md-5" name="id_karyawan" value="<?php echo $dt_k->id_karyawan ?>" readonly>
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Nama Karyawan</b></label>
                <input type="text" class="form-control col-md-5" name="nama" value="<?php echo $dt_k->nama ?>">
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Usia</b></label>
                <input type="text" class="form-control col-md-5" name="usia" value="<?php echo $dt_k->usia ?>">
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Asal Kota </b></label>
                <input type="text" class="form-control col-md-5" name="alamat" value="<?php echo $dt_k->alamat ?>">
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>No Telepon</b></label>
                <input type="number" class="form-control col-md-5" name="no_telp" value="<?php echo $dt_k->no_telp ?>">
            </div>
            <div class="form-group row">
                <label class=" col-md-2"></label>
                <label class=" col-md-2"><b>Jabatan</b></label>
                <select class="form-control col-md-5" name="jabatan" value="<?php echo $dt_k->jabatan ?>">
                    <option><?php echo $dt_k->jabatan ?></option>
                    <option>Cleaning Service</option>
                    <option>Ticketing</option>
                    <option>Office Manager</option>
                    <option>Security</option>
                    <option>Receptionist</option>
                    <option>Help Desk</option>
                    <option>Petugas Khusus</option>
                </select>
            </div>
            <!-- <div class="form-group row"> -->
            <label class=" col-md-7"></label>
            <button type="submit" class="btn btn-success col-md-1">Update</button>
            <button class="btn btn-danger col-md-1" onclick="goBack()">Batal</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
            <!-- </div> -->
        </form>
    <?php endforeach; ?>
</div>