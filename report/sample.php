<!DOCTYPE html>
<html>
    <head>
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        </style>
    </head>

    <body>

    <img src="../assets/images/backgrounds/mart212.jpg" width="15%"></img>
    <center><strong><span style="font-size:160%;">Laporan Penjualan</span></strong></center>
    <br>
        <table style="width:100%">
        <caption>Dari Tanggal 2018-07-01 s/d 2018-08-01</caption>
            <tbody>
                <tr>
                    <th width="14%" scope="col">Kode Penjualan</th>
                    <th width="8%" scope="col">Tanggal</th>
                    <th width="8%" scope="col">Total Qty</th>
                    <th width="14%" scope="col">Total Penjualan</th>
                    <th width="14%" scope="col">Bayar</th>
                    <th width="12%" scope="col">Kembalian</th>
                    <th width="30%" scope="col">Petugas</th>
                </tr>
                <?php
                    include ('../include/config.php');
                    
                    $r = $con->query("SELECT penjualan.kode_penjualan, penjualan.tgl_penjualan, penjualan.total_qty, penjualan.grandtotal, penjualan.bayar, penjualan.kembalian, users.fullname FROM users INNER JOIN penjualan ON users.username = penjualan.username ORDER BY penjualan.tgl_penjualan ASC");
                    while ($rr = $r->fetch_array()) {
                ?>
                <tr>
                    <td><?php echo $rr['kode_penjualan'];?></td>
                    <td><?php echo $rr['tgl_penjualan'];?></td>
                    <td><?php echo $rr['total_qty'];?></td>
                    <td><?php echo $rr['grandtotal'];?></td>
                    <td><?php echo $rr['bayar'];?></td>
                    <td><?php echo $rr['kembalian'];?></td>
                    <td><?php echo $rr['fullname'];?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

    </body>
</html>
