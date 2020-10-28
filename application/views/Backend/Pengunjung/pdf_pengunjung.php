<!DOCTYPE html>
<html><head>
</head><body>
    <table>
        <tr>
            <th>NO</th>
            <th>ID PENGUNJUNG</th>
            <th>NAMA PENGUNJUNG</th>
            <th>USIA</th>
            <th>KATEGORI</th>
            <th>TANGGAL KUNJUNGAN</th>
        </tr>
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
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>  