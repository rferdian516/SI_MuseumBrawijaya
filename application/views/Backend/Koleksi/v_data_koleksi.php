<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-crop-alt"></i> Daftar Koleksi Yang Dimiliki
    </div>

    <?php echo anchor(
        'Data_Koleksi/input',
        '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus-square"></i> Tambah Data</button>'
    )
    ?>

    <table id="table_id" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th> NO</th>
                <th> ID</th>
                <th> NAMA</th>
                <th> NEGARA</th>
                <th> TAHUN</th>
                <th> GAMBAR</th>
                <th> AKSI</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($data_koleksi as $dt_kol) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt_kol->id_koleksi ?></td>
                <td><?php echo $dt_kol->nama_koleksi ?></td>
                <td><?php echo $dt_kol->negara ?></td>
                <td><?php echo $dt_kol->tahun ?></td>
                <td><img src="<?php echo base_url() . 'assets/img/' . $dt_kol->gambar; ?>"></td>
                <td>
                    <?php echo anchor(
                        'Data_koleksi/update/' . $dt_kol->id_koleksi,
                        '<div class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</div>'
                    ) ?>
                    <?php echo anchor(
                        'Data_koleksi/delete/' . $dt_kol->id_koleksi,
                        '<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>