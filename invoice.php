<?php include 'koneksi.php'; ?>

<body onLoad="javascript:window:print()">
    <div class="container">
        <div align="center"><strong><b>Travel TOTAL PERSADIA NUSANTARA (TPN</strong><br />
            <div align="center"><strong><b>Bukti Pemesanan Tiket</strong><br />
                <div align="center"><strong><b>________________________________________________________________________________________________________________________________________________________________________________</strong><br />

                    <p>
                    </p>
                </div>
                <?php
                $tampil = $koneksi->query("SELECT * FROM tbl_tiket")->fetch_assoc();
                ?>

                <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
                    <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                        NOMOR Transaksi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $tampil['notrans'] ?></br>
                        Username/Nama Pelanggan &emsp;&emsp;: <?php echo $tampil['user'] ?><br>
                        Tgl Pesan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $tampil['tglpesan'] ?><br>
                        Tgl Berangkat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $tampil['tglberangkat'] ?><br>
                        Nomor Polisi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $tampil['nopol'] ?><br>
                        Jurusan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $tampil['jurusan'] ?><br>
                        Tujuan Antar &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $tampil['tujuan'] ?><br>
                        Harga Tiket&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: Rp. <?php echo number_format($tampil['harga']); ?><br>
                        Jumlah Pengunjung&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $tampil['jumlah_pen'] ?><br>
                        Total Bayar &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: Rp. <?php echo number_format($tampil['total_biaya']); ?><br>
                        Via Pembayaran><br>
                        <center>
                            No.Rekening BRI : 3395-01-033519-53-9
                        </center>
                    </td>
                </table>


                <p></p>
                <br>
                <br>
                <div>
                    <div style="width:300px;float:right">
                        <div style="text-align:center">
                            Padang, <?php echo date("d-M-Y") ?>
                            <br />&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;dto,

                            <br>
                            <br>
                            <br>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ir.Ferdinal<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>