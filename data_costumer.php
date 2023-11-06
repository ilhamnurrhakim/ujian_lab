<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
        th {
            background-color: #fbff00;
            color: black;
        }
    </style>
</head>

<body>
    <h2 align="center" style="background: #fbff00; font-weight: bold; padding: 10px;">Data Costumer</h2>
    <h3 align="center"><a href="input_costumer.php" style="background: #fbff00; font-weight: bold; padding: 10px;">Tambah Data +</a></h3>
    <table border="1" cellpadding="5" cellspacing="0" align="center">
        <tr>
            <th> No</th>
            <th> No Rekening</th>
            <th> Nama</th>
            <th> Alamat</th>
            <th> No Telepon </th>
            <th> No Plat</th>
            <th> Nama Kendaraan</th>
            <th> Tipe Kendaraan</th>
            <th> Aksi</th>
            <?php
            include 'koneksi.php';
            $no = 1;
            $ambil = $koneksi->query("SELECT * FROM data_nasabah");
            while ($data = $ambil->fetch_assoc()) {
            ?>
        <tr>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $data['No_rekening']; ?> </td>
            <td> <?php echo $data['nama']; ?> </td>
            <td> <?php echo $data['alamat']; ?> </td>
            <td> <?php echo $data['notlp']; ?> </td>
            <td> <?php echo $data['noplat']; ?> </td>
            <td> <?php echo $data['nama_kendaraan']; ?> </td>
            <td> <?php echo $data['Tipe_kendaraan']; ?> </td>
            <td>
                <a href="edit_costumer.php?idedit=<?= $data['No_rekening'] ?>">Edit</a> /
                <a href="hapus_costumer.php?idhapus=<?= $data['No_rekening'] ?>">Hapus</a>
            </td>
        </tr>
    <?php
            }
    ?>
    </table>
    <div align="center">
        <a href="index.php">Kembali</a>
    </div>
</body>

</html>