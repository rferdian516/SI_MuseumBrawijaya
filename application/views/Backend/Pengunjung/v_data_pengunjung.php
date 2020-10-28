<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-ticket-alt"></i> Daftar Informasi Pengunjung
    </div>

    <?php echo anchor(
        'Data_pengunjung/input',
        '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus-square"></i> Tambah Data</button>'
    )
    ?>

    <?php echo anchor(
        'Data_pengunjung/print',
        '<button class="btn btn-sm btn-secondary mb-3"><i class="fas fa-print"></i> Print</button>'
    )
    ?>
    <?php echo anchor(
        'Data_pengunjung/pdf',
        '<button class="btn btn-sm btn-danger mb-3"><i class="fas fa-file-pdf"></i> PDF</button>'
    )
    ?>

    <?php echo anchor(
        'Data_pengunjung/excel',
        '<button class="btn btn-sm btn-success mb-3"><i class="fas fa-file-excel"></i> Excel</button>'
    )
    ?>
    <table id="table_id" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th> NO</th>
                <th> ID</th>
                <th> NAMA</th>
                <th> USIA</th>
                <th>KATEGORI</th>
                <th> TANGGAL KUNJUNGAN</th>
                <th> AKSI</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($data_pengunjung as $dt_p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt_p->id_pengunjung ?></td>
                <td><?php echo $dt_p->nama ?></td>
                <td><?php echo $dt_p->usia ?></td>
                <td><?php echo $dt_p->kategori ?></td>
                <td><?php echo $dt_p->tgl ?></td>
                <td>
                    <?php echo anchor(
                        'Data_pengunjung/update/' . $dt_p->id_pengunjung,
                        '<div class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</div>'
                    ) ?>
                    <?php echo anchor(
                        'Data_pengunjung/delete/' . $dt_p->id_pengunjung,
                        '<div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Delete</div>'
                    ) ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>