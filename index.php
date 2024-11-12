<?php
include "Koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
</head>
<body>
    <table border="1">
        <caption>Laporan Penjualan</caption>
        <tr>
            <th>No</th>
            <th>tanggal_penjualan</th>
            <th>nama_produk</th>
            <th>harga</th>
            <th>jumlah_terjual</th>
            <th>total_penjualan</th>
</tr>
<?php
$query = "SELECT * FROM penjualan";
$result = $mysqli->query($query);
$no = 1;
while($row =  $result->fetch_object()){
 ?>  
   
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row->tanggal_penjualan ?></td>
            <td><?php echo $row->nama_produk ?></td>
            <td><?php echo $row->harga ?></td>
            <td><?php echo $row->jumlah_terjual ?></td>
            <td><?php echo $row->total_penjualan ?></td>
        </tr>
        <?php 
    }
    ?>
    </table>
</body>
</html>