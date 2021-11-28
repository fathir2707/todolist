<html>
    <head>
        <title> FORM DATA PEMBAYARAN </title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
<body>

    <div class="badan">
        <center><h1> Upload Data Pembayaran dan Bukti Daftar </h1><br>

        <form method="post" action="proses_data_bayar.php" enctype="multipart/form-data">
            <tabel cellpadding="8">
                <tr>
                    <td>Slip Pembayaran</td><br><br>
                    <input type="file" name="fileku[]">
                </tr>
                    <br><br>
                <tr>
                    <td>Bukti Pendaftaran</td><br><br>
                    <input type="file" name="fileku[]">
                </tr>
            </tabel><br><br>
            
            <input class="button" type="submit" name="save" value="Kirim">
        </form>
        </center>
    </div>
</body>
</html>