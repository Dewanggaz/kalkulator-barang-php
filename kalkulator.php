<?php

    if (isset($_POST["nama_barang"])) {
        $nama_barang = $_POST["nama_barang"];
        $harga = $_POST["harga"];
        $jumlah = $_POST["jumlah"];

        if ($harga < 0 || $jumlah < 1 ) {
            echo "harga tidak boleh minus dan barang tidak boleh kurang dari saru";
        } else {
            $total = $harga * $jumlah;
        
        
        if ($total > 500_000) {
            $diskon = 20;
        }elseif ($total > 250_000) {
            $diskon = 10;
        }else {
            $diskon = 0;
        }

        $potongan = $total * $diskon / 100;
        $pembayaran = $total - $potongan;
   
        echo "<h2>Hasil Pembayaran</h2>";
        echo "Nama Barang: " . $nama_barang . "<br>";
        echo "Harga Satuan: Rp " . number_format($harga, 0, ',', '.') . "<br>";
        echo "Jumlah Pembelian: " . $jumlah . "<br>";
        echo "Total Harga: Rp " . number_format($total, 0, ',', '.') . "<br>";
        echo "Diskon: " . $diskon . "%<br>";
        echo "Potongan: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
        echo "Total Pembayaran: Rp " . number_format($pembayaran, 0, ',', '.');
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Pembelian Barang</h2>

    <form method="POST">
        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" required>
        <br><br>

        <label>Harga Satuan:</label><br>
        <input type="number" name="harga" required>
        <br><br>

        <label>Jumlah Pembelian:</label><br>
        <input type="number" name="jumlah" required>
        <br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>