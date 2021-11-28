<html>
<head>
  <title>HOME USER</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>
    
    <div class="badan" height="100%">

    <h1 style="text-align:center" >Data Orang Tua</h1>

    <center>
        <form method="post" action="proses_data_ortu.php" enctype="multipart/form-data">
            <table cellpadding="8">

            <tr>    
                <td>Nama Orang Tua</td>
                <td><input type="text" name="nama_ortu"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat_ortu"></textarea></td>
            </tr>

            <tr>    
                <td>Nomor Telepon</td>
                <td><input type="text" name="no_hp_ortu"></td>
            </tr>

            <tr>    
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>

            <tr>
                <td>Gaji</td>
                <td><select name="gaji">
                    <option value="0-1Juta">0 - 1 Juta</option>
                    <option value="1Juta-3Juta">1 Juta - 3 Juta</option>
                    <option value="3Juta-7Juta">3 Juta - 7 Juta</option>
                    <option value="7Juta-10Juta">7 Juta - 10 Juta</option>
                    <option value="10Juta++">10 Juta ++</option>
                </select></td>
            </tr><br>

            </table><br>

                <input class="button" type="submit" value="Simpan">
                

        </form>
    </div>

</body>
</html>
