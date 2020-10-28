<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-users"></i> Daftar Informasi Karyawan
    </div>

    <?php echo anchor(
        'Data_karyawan/input',
        '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus-square"></i> Tambah Data</button>'
    )
    ?>
    <?php echo anchor(
        'Data_karyawan/print',
        '<button class="btn btn-sm btn-secondary mb-3"><i class="fas fa-print"></i> Print</button>'
    )
    ?>
    <?php echo anchor(
        'Data_karyawan/pdf',
        '<button class="btn btn-sm btn-danger mb-3"><i class="fas fa-file-pdf"></i> PDF</button>'
    )
    ?>

    <?php echo anchor(
        'Data_karyawan/excel',
        '<button class="btn btn-sm btn-success mb-3"><i class="fas fa-file-excel"></i> Excel</button>'
    )
    ?>

    <table id="table_id" class="display table table-bordered table-striped table-hover">
        <thead class="class thead-dark">
            <tr>
                <th> NO</th>
                <th> ID</th>
                <th> NAMA</th>
                <th> USIA</th>
                <th> ASAL KOTA</th>
                <th> NOMOR TELP</th>
                <th> JABATAN</th>
                <th> AKSI</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($data_karyawan as $dt_k) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt_k->id_karyawan ?></td>
                <td><?php echo $dt_k->nama ?></td>
                <td><?php echo $dt_k->usia ?></td>
                <td><?php echo $dt_k->alamat ?></td>
                <td><?php echo $dt_k->no_telp ?></td>
                <td><?php echo $dt_k->jabatan ?></td>
                <td>
                    <?php echo anchor(
                        'Data_karyawan/update/' . $dt_k->id_karyawan,
                        '<div class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</div>'
                    ) ?>
                    <?php echo anchor(
                        'Data_karyawan/delete/' . $dt_k->id_karyawan,
                        '<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</div>'
                    ) ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>