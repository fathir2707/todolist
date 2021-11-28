<?php
include "index_user.php";
?>

<html lang="en">
  <head>

  <title>DATA KELULUSAN</title>

</head>
<body>
    <div class="content">  
        <div class="badan">

            <center>
                <h1> Data Nilai USBN </h1>               

            <form method="post" enctype="multipart/form-data" action="proses_data_nilai.php">
            <table cellpadding="8" style="text-align:center" border="1">

            <tr>
                <th style="text-align:center">Mata Pelajaran</th>
                <th style="text-align:center">Nilai</th>
            </tr>
            
            <tr>
                <th style="text-align:center" name="ipa">IPA</th>
                    <td><input type="text" name="ipa1" ></td>
            </tr>

            <tr>
                <th style="text-align:center" name="mtk">Matematika</th>
                    <td><input type="text" name="mtk1" ></td>
                    
            </tr>

            <tr>
                <th style="text-align:center" name="ing">Bahasa Inggris</th>
                    <td><input type="text" name="ing1" ></td>
                   
            </tr>

            <tr>
                <th style="text-align:center" name="ind">Bahasa Indonesia</th>
                    <td><input type="text" name="ind1" ></td>
                   
            </tr>

            
            </table><br>
                <input type="submit" class="button" name="save" value="Simpan">
            </form>
            </center>
        </div>
    </div>
</body>
</html>