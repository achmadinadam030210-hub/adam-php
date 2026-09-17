<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tiket Online Jakarta - Malaysia</title>
    <style>
        body {
            font-family: monospace;
            padding: 20px;
        }
        .container {
            border: 1px solid #1a5f7a;
            padding: 20px;
            width: 450px;
        }
        h3 {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 16px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            padding: 4px 0;
            vertical-align: top;
        }
        input[type="text"], select {
            font-family: inherit;
            padding: 2px 4px;
        }
        .radio-group label {
            display: block;
            margin-bottom: 2px;
        }
        .btn-group {
            margin-top: 20px;
        }
        .btn-group input {
            font-family: inherit;
            padding: 3px 10px;
            margin-right: 10px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px dashed #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>TIKET ONLINE JAKARTA - MALAYSIA</h3>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td width="160"><label for="nama">Nama</label></td>
                <td><input type="text" id="nama" name="nama" value="Dzimar Rauhillah" required></td>
            </tr>
            <tr>
                <td><label for="kode">Pilih Kode Pesawat</label></td>
                <td>
                    <select id="kode" name="kode_pesawat">
                        <option value="GRD">GRD</option>
                        <option value="LION">LION</option>
                        <option value="AIRASIA">AIRASIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilih Kelas</td>
                <td class="radio-group">
                    <label><input type="radio" name="kelas" value="Eksekutif" checked> Eksekutif</label>
                    <label><input type="radio" name="kelas" value="Bisnis"> Bisnis</label>
                    <label><input type="radio" name="kelas" value="Ekonomi"> Ekonomi</label>
                </td>
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah Tiket</label></td>
                <td>
                    <select id="jumlah" name="jumlah_tiket">
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </td>
            </tr>
        </table>

        <div class="btn-group">
            <input type="submit" name="simpan" value="SIMPAN">
            <input type="reset" value="BATAL">
        </div>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kode_pesawat = $_POST['kode_pesawat'];
        $kelas = $_POST['kelas'];
        $jumlah_tiket = $_POST['jumlah_tiket'];

        echo "<div class='result'>";
        echo "<strong>Hasil Pemesanan:</strong><br>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Kode Pesawat: " . htmlspecialchars($kode_pesawat) . "<br>";
        echo "Kelas: " . htmlspecialchars($kelas) . "<br>";
        echo "Jumlah Tiket: " . htmlspecialchars($jumlah_tiket);
        echo "</div>";
    }
    ?>
</div>

</body>
</html>