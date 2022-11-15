<head>
    <title>CRUP PHP dan MySQLi data  siswa</title>
</head>
<body>
    <h2>CRUD DATA SISWA - SMKN 4 KENDAL</h2>
    <br>
    <a href="tambah.php">+ TAMBAH SISWA</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIPD</th>
            <th>Kelas</th>
            <th>Program Keahlian</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from tb_siswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nipd']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['proli']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
</body>