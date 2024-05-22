<!DOCTYPE html>
<html>
<head>
    <title>Form Rental</title>
    <style>
        input, select {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5px;
            color: black; 
        }
        body {
            background-image: url('main-qimg-6be4470af3eb8ec31dbcde658207cd12-lq.jpeg'); 
            background-size: cover;
            color: black;
        }
        .hasil-biodata {
            border: 1px solid white;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <form method="POST" name="frmpost" action="">
        <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center">
                <td><h2><b>Masukkan waktu rental</b></h2></td>
            </tr>
            <tr>
                <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>Merk motor</td>
                            <td>:</td>
                            <td>
                                <select name="nama[]">
                                    <option value="Honda CBR">Honda CBR</option>
                                    <option value="Yamaha R1">Yamaha R1</option>
                                    <option value="Suzuki GSX-R">Suzuki GSX-R</option>
                                    <option value="Kawasaki Hayabusa">Kawasaki Ninja Hayabusa</option>
                                    <option value="H2R">Kawasaki H2R</option>
                                    <option value="BMW">BMW S1000RR</option>
                                    <option value="Ducati">Ducati Panigale</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Waktu Tgl peminjaman</td>
                            <td>:</td>
                            <td>
                                <select name="tgl[]">
                                    <option value="1 hari">1 hari</option>
                                    <option value="2 hari">2 hari</option>
                                    <option value="3 hari">3 hari</option>
                                    <option value="4 hari">4 hari</option>
                                    <option value="5 hari">5 hari</option>
                                    <option value="6 hari">6 hari</option>
                                    <option value="7 hari">7 hari</option>
                                    <option value="2 minggu">2 minggu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alasan Peminjaman</td>
                            <td>:</td>
                            <td><input name="alasan[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Jaminan</td>
                            <td>:</td>
                            <td>
                                <select name="jaminan[]">
                                    <option value="Ktp">KTP</option>
                                    <option value="Kartu Keluarga">KK</option>
                                    <option value="Surat tanah Rumah">Surat Tanah</option>
                                    <option value="Perhiasan">Perhiasan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><input type="submit" name="btnOk" value="Simpan" /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nama = $_POST["nama"][0];
        $tgl_peminjaman = $_POST["tgl"][0];
        $alasan = $_POST["alasan"][0];
        $jaminan = $_POST["jaminan"][0];

        
        $harga_per_hari = [
            "Honda CBR" => 200000000,
            "Yamaha R1" => 250000000,
            "Suzuki GSX" => 220000000,
            "Kawasaki Hayabusa" => 300000000,
            "H2R" => 350000000,
            "BMW" => 320000000,
            "Ducati" => 280000000
        ];

       
        $jumlah_hari = substr($tgl_peminjaman, 0, 1); 
        $harga_total = $harga_per_hari[$nama] * $jumlah_hari;

        echo "<table align='center' class='hasil-biodata' cellpadding='0' cellspacing='0' style='margin-top: 20px;'>";
        echo "<tr align='center'><td><h3>Hasil Biodata:</h3></td></tr>";
        echo "<tr><td>Nama: $nama<br>";
        echo "Tanggal Peminjaman: $tgl_peminjaman<br>";
        echo "Alasan Peminjaman: $alasan<br>";
        echo "Jaminan: $jaminan<br>";
        echo "Harga Total: Rp" . number_format($harga_total, 0, ',', '.') . "<br></td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>