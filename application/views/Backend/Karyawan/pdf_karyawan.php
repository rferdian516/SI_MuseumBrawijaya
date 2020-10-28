<!DOCTYPE html>
<html><head>
</head><body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>ID KARYAWAN</th>
            <th>NAMA KARYAWAN</th>
            <th>USIA</th>
            <th>ALAMAT</th>
            <th>NOMOR TELEPON</th>
            <th>JABATAN</th>
        </tr>
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
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>